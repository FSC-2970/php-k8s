<?php

namespace k8s\api\core\v1;

/**
 * ConfigMapEnvSource selects a ConfigMap to populate the environment variables with.
 * 
 * The contents of the target ConfigMap's Data field will represent the key-value pairs as environment variables.
 */
class ConfigMapEnvSource extends \k8s\Resource
{
    /**
     * @var string $name
     * Name of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#names
     */
    public $name;

    /**
     * @var boolean $optional
     * Specify whether the ConfigMap must be defined
     */
    public $optional;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->optional = isset($data['optional']) ? $data['optional'] : null;
    }
}
