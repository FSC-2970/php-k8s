<?php

namespace k8s\api\admissionregistration\v1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \k8s\Resource
{
    /**
     * @var string $name required
     * `name` is the name of the service. Required
     */
    public $name;

    /**
     * @var string $namespace required
     * `namespace` is the namespace of the service. Required
     */
    public $namespace;

    /**
     * @var string $path
     * `path` is an optional URL path which will be sent in any request to this service.
     */
    public $path;

    /**
     * @var integer $port
     * If specified, the port on the service that hosting webhook. Default to 443 for backward compatibility. `port` should be a valid port number (1-65535, inclusive).
     */
    public $port;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
        $this->path = $data['path'] ?? null;
        $this->port = $data['port'] ?? null;
    }
}
