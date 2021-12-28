<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference extends \k8s\Resource
{
    /**
     * @var string $name required
     * name is the name of the service. Required
     */
    public $name;

    /**
     * @var string $namespace required
     * namespace is the namespace of the service. Required
     */
    public $namespace;

    /**
     * @var string $path
     * path is an optional URL path at which the webhook will be contacted.
     */
    public $path;

    /**
     * @var integer $port
     * port is an optional service port at which the webhook will be contacted. `port` should be a valid port number (1-65535, inclusive). Defaults to 443 for backward compatibility.
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
