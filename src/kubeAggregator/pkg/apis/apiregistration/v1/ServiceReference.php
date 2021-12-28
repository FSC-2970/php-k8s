<?php

namespace k8s\kubeAggregator\pkg\apis\apiregistration\v1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \k8s\Resource
{
    /**
     * @var string $name
     * Name is the name of the service
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace is the namespace of the service
     */
    public $namespace;

    /**
     * @var integer $port
     * If specified, the port on the service that hosting webhook. Default to 443 for backward compatibility. `port` should be a valid port number (1-65535, inclusive).
     */
    public $port;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
        $this->port = $data['port'] ?? null;
    }
}
