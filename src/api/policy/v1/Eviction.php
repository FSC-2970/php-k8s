<?php

namespace k8s\api\policy\v1;

use k8s\apimachinery\pkg\apis\meta\v1\DeleteOptions;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;

/**
 * Eviction evicts a pod from its node subject to certain policies and safety constraints. This is a subresource of Pod.  A request to cause such an eviction is created by POSTing to ...\/pods\/<pod name>\/evictions.
 */
class Eviction extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var DeleteOptions $deleteOptions
     * DeleteOptions may be provided
     */
    public $deleteOptions;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta $metadata
     * ObjectMeta describes the pod that is being evicted.
     */
    public $metadata;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        if (isset($data['deleteOptions'])) {
            $this->deleteOptions = new DeleteOptions($data['deleteOptions']);
        }
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
    }
}
