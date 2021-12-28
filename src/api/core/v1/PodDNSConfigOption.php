<?php

namespace k8s\api\core\v1;

/**
 * PodDNSConfigOption defines DNS resolver options of a pod.
 */
class PodDNSConfigOption extends \k8s\Resource
{
    /**
     * @var string $name
     * Required.
     */
    public $name;

    /**
     * @var string $value
     */
    public $value;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->value = isset($data['value']) ? $data['value'] : null;
    }
}
