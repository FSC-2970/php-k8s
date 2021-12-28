<?php

namespace k8s\api\discovery\v1beta1;

use k8s\api\discovery\v1beta1\Endpoint;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\discovery\v1beta1\EndpointPort;

/**
 * EndpointSlice represents a subset of the endpoints that implement a service. For a given service there may be multiple EndpointSlice objects, selected by labels, which must be joined to produce the full set of endpoints.
 */
class EndpointSlice extends \k8s\Resource
{
    /**
     * @var string $addressType required
     * addressType specifies the type of address carried by this EndpointSlice. All addresses in this slice must be the same type. This field is immutable after creation. The following address types are currently supported: * IPv4: Represents an IPv4 Address. * IPv6: Represents an IPv6 Address. * FQDN: Represents a Fully Qualified Domain Name.
     */
    public $addressType;

    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var Endpoint[] $endpoints
     * endpoints is a list of unique endpoints in this slice. Each slice may include a maximum of 1000 endpoints.
     */
    public $endpoints;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata.
     */
    public $metadata;

    /**
     * @var EndpointPort[] $ports
     * ports specifies the list of network ports exposed by each endpoint in this slice. Each port must have a unique name. When ports is empty, it indicates that there are no defined ports. When a port is defined with a nil port value, it indicates "all ports". Each slice may include a maximum of 100 ports.
     */
    public $ports;

    public function __construct($data)
    {
        $this->addressType = $data['addressType'] ?? null;
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->endpoints = array_map(function ($a) {
            return new Endpoint($a);
        }, $data['endpoints'] ?? []);
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->ports = array_map(function ($a) {
            return new EndpointPort($a);
        }, $data['ports'] ?? []);
    }
}
