<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ClientIPConfig;

/**
 * SessionAffinityConfig represents the configurations of session affinity.
 */
class SessionAffinityConfig extends \k8s\Resource
{
    /**
     * @var ClientIPConfig $clientIP
     * clientIP contains the configurations of Client IP based session affinity.
     */
    public $clientIP;

    public function __construct($data)
    {
        if (isset($data['clientIP'])) {
            $this->clientIP = new ClientIPConfig($data['clientIP']);
        }
    }
}
