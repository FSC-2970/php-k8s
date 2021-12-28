<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\APIResource;

/**
 * APIResourceList is a list of APIResource, it is used to expose the name of the resources supported in a specific group and version, and if the resource is namespaced.
 */
class APIResourceList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $groupVersion required
     * groupVersion is the group and version this APIResourceList is for.
     */
    public $groupVersion;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var APIResource[] $resources
     * resources contains the name of the resources and if they are namespaced.
     */
    public $resources;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->groupVersion = isset($data['groupVersion']) ? $data['groupVersion'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        $this->resources = array_map(function ($a) {
            return new APIResource($a);
        }, isset($data['resources']) ? $data['resources'] : []);
    }
}
