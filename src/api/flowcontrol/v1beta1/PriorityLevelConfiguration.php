<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationSpec;
use k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationStatus;

/**
 * PriorityLevelConfiguration represents the configuration of a priority level.
 */
class PriorityLevelConfiguration extends \k8s\Resource
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
     * `metadata` is the standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var PriorityLevelConfigurationSpec $spec
     * `spec` is the specification of the desired behavior of a "request-priority". More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
     */
    public $spec;

    /**
     * @var PriorityLevelConfigurationStatus $status
     * `status` is the current status of a "request-priority". More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
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
            $this->spec = new PriorityLevelConfigurationSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new PriorityLevelConfigurationStatus($data['status']);
        }
    }
}
