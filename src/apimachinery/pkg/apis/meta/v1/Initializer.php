<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * Initializer is information about an initializer that has not yet completed.
 */
class Initializer extends \k8s\Resource
{
    /**
     * @var string $name required
     * name of the process that is responsible for initializing this object.
     */
    public $name;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
