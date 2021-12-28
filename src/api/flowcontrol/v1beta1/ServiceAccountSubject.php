<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * ServiceAccountSubject holds detailed information for service-account-kind subject.
 */
class ServiceAccountSubject extends \k8s\Resource
{
    /**
     * @var string $name required
     * `name` is the name of matching ServiceAccount objects, or "*" to match regardless of name. Required.
     */
    public $name;

    /**
     * @var string $namespace required
     * `namespace` is the namespace of matching ServiceAccount objects. Required.
     */
    public $namespace;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->namespace = isset($data['namespace']) ? $data['namespace'] : null;
    }
}
