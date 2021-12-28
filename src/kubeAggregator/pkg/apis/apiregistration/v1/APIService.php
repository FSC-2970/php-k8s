<?php

namespace k8s\kubeAggregator\pkg\apis\apiregistration\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\kubeAggregator\pkg\apis\apiregistration\v1\APIServiceSpec;
use k8s\kubeAggregator\pkg\apis\apiregistration\v1\APIServiceStatus;

/**
 * APIService represents a server for a particular GroupVersion. Name must be "version.group".
 */
class APIService extends \k8s\Resource
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
     * @var APIServiceSpec $spec
     * Spec contains information for locating and communicating with a server
     */
    public $spec;

    /**
     * @var APIServiceStatus $status
     * Status contains derived information about an API server
     */
    public $status;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new APIServiceSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new APIServiceStatus($data['status']);
        }
    }
}
