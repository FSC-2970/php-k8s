<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ConfigMapProjection;
use k8s\api\core\v1\DownwardAPIProjection;
use k8s\api\core\v1\SecretProjection;
use k8s\api\core\v1\ServiceAccountTokenProjection;

/**
 * Projection that may be projected along with other supported volume types
 */
class VolumeProjection extends \k8s\Resource
{
    /**
     * @var ConfigMapProjection $configMap
     * information about the configMap data to project
     */
    public $configMap;

    /**
     * @var DownwardAPIProjection $downwardAPI
     * information about the downwardAPI data to project
     */
    public $downwardAPI;

    /**
     * @var SecretProjection $secret
     * information about the secret data to project
     */
    public $secret;

    /**
     * @var ServiceAccountTokenProjection $serviceAccountToken
     * information about the serviceAccountToken data to project
     */
    public $serviceAccountToken;

    public function __construct($data)
    {
        if (isset($data['configMap'])) {
            $this->configMap = new ConfigMapProjection($data['configMap']);
        }
        if (isset($data['downwardAPI'])) {
            $this->downwardAPI = new DownwardAPIProjection($data['downwardAPI']);
        }
        if (isset($data['secret'])) {
            $this->secret = new SecretProjection($data['secret']);
        }
        if (isset($data['serviceAccountToken'])) {
            $this->serviceAccountToken = new ServiceAccountTokenProjection($data['serviceAccountToken']);
        }
    }
}
