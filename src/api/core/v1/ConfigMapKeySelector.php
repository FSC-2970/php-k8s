<?php

namespace k8s\api\core\v1;

/**
 * Selects a key from a ConfigMap.
 */
class ConfigMapKeySelector extends \k8s\Resource
{
    /**
     * @var string $key required
     * The key to select.
     */
    public $key;

    /**
     * @var string $name
     * Name of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#names
     */
    public $name;

    /**
     * @var boolean $optional
     * Specify whether the ConfigMap or its key must be defined
     */
    public $optional;

    public function __construct($data)
    {
        $this->key = isset($data['key']) ? $data['key'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->optional = isset($data['optional']) ? $data['optional'] : null;
    }
}
