<?php

namespace k8s\api\core\v1;

/**
 * Sysctl defines a kernel parameter to be set
 */
class Sysctl extends \k8s\Resource
{
    /**
     * @var string $name required
     * Name of a property to set
     */
    public $name;

    /**
     * @var string $value required
     * Value of a property to set
     */
    public $value;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->value = isset($data['value']) ? $data['value'] : null;
    }
}
