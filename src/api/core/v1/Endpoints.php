<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\core\v1\EndpointSubset;

/**
 * Endpoints is a collection of endpoints that implement the actual service. Example:
 *   Name: "mysvc",
 *   Subsets: [
 *     {
 *       Addresses: [{"ip": "10.10.1.1"}, {"ip": "10.10.2.2"}],
 *       Ports: [{"name": "a", "port": 8675}, {"name": "b", "port": 309}]
 *     },
 *     {
 *       Addresses: [{"ip": "10.10.3.3"}],
 *       Ports: [{"name": "a", "port": 93}, {"name": "b", "port": 76}]
 *     },
 *  ]
 */
class Endpoints extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * Standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var EndpointSubset[] $subsets
     * The set of all endpoints is the union of all subsets. Addresses are placed into subsets according to the IPs they share. A single address with multiple ports, some of which are ready and some of which are not (because they come from different containers) will result in the address being displayed in different subsets for the different ports. No address will appear in both Addresses and NotReadyAddresses in the same subset. Sets of addresses and ports that comprise a service.
     */
    public $subsets;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->subsets = array_map(function ($a) {
            return new EndpointSubset($a);
        }, isset($data['subsets']) ? $data['subsets'] : []);
    }
}
