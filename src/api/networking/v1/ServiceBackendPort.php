<?php

namespace k8s\api\networking\v1;

/**
 * ServiceBackendPort is the service port being referenced.
 */
class ServiceBackendPort extends \k8s\Resource
{
    /**
     * @var string $name
     * Name is the name of the port on the Service. This is a mutually exclusive setting with "Number".
     */
    public $name;

    /**
     * @var integer $number
     * Number is the numerical port number (e.g. 80) on the Service. This is a mutually exclusive setting with "Name".
     */
    public $number;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
        $this->number = $data['number'] ?? null;
    }
}
