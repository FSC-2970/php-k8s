<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\ServiceBackendPort;

/**
 * IngressServiceBackend references a Kubernetes Service as a Backend.
 */
class IngressServiceBackend extends \k8s\Resource
{
    /**
     * @var string $name required
     * Name is the referenced service. The service must exist in the same namespace as the Ingress object.
     */
    public $name;

    /**
     * @var ServiceBackendPort $port
     * Port of the referenced service. A port name or port number is required for a IngressServiceBackend.
     */
    public $port;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        if (isset($data['port'])) {
            $this->port = new ServiceBackendPort($data['port']);
        }
    }
}
