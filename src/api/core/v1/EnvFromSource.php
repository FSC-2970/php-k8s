<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ConfigMapEnvSource;
use k8s\api\core\v1\SecretEnvSource;

/**
 * EnvFromSource represents the source of a set of ConfigMaps
 */
class EnvFromSource extends \k8s\Resource
{
    /**
     * @var ConfigMapEnvSource $configMapRef
     * The ConfigMap to select from
     */
    public $configMapRef;

    /**
     * @var string $prefix
     * An optional identifier to prepend to each key in the ConfigMap. Must be a C_IDENTIFIER.
     */
    public $prefix;

    /**
     * @var SecretEnvSource $secretRef
     * The Secret to select from
     */
    public $secretRef;

    public function __construct($data)
    {
        if (isset($data['configMapRef'])) {
            $this->configMapRef = new ConfigMapEnvSource($data['configMapRef']);
        }
        $this->prefix = $data['prefix'] ?? null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new SecretEnvSource($data['secretRef']);
        }
    }
}
