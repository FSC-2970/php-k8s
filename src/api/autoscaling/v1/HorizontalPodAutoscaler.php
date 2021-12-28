<?php

namespace k8s\api\autoscaling\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\autoscaling\v1\HorizontalPodAutoscalerSpec;
use k8s\api\autoscaling\v1\HorizontalPodAutoscalerStatus;

/**
 * configuration of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscaler extends \k8s\Resource
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
     * Standard object metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var HorizontalPodAutoscalerSpec $spec
     * behaviour of autoscaler. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status.
     */
    public $spec;

    /**
     * @var HorizontalPodAutoscalerStatus $status
     * current information about the autoscaler.
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
            $this->spec = new HorizontalPodAutoscalerSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new HorizontalPodAutoscalerStatus($data['status']);
        }
    }
}
