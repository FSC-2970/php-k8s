<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\APIGroup;

/**
 * APIGroupList is a list of APIGroup, to allow clients to discover the API at \/apis.
 */
class APIGroupList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var APIGroup[] $groups
     * groups is a list of APIGroup.
     */
    public $groups;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->groups = array_map(function ($a) {
            return new APIGroup($a);
        }, isset($data['groups']) ? $data['groups'] : []);
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
    }
}
