<?php

namespace k8s\api\networking\v1;

use k8s\api\core\v1\TypedLocalObjectReference;
use k8s\api\networking\v1\IngressServiceBackend;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend extends \k8s\Resource
{
    /**
     * @var TypedLocalObjectReference $resource
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the Ingress object. If resource is specified, a service.Name and service.Port must not be specified. This is a mutually exclusive setting with "Service".
     */
    public $resource;

    /**
     * @var IngressServiceBackend $service
     * Service references a Service as a Backend. This is a mutually exclusive setting with "Resource".
     */
    public $service;

    public function __construct($data)
    {
        if (isset($data['resource'])) {
            $this->resource = new TypedLocalObjectReference($data['resource']);
        }
        if (isset($data['service'])) {
            $this->service = new IngressServiceBackend($data['service']);
        }
    }
}
