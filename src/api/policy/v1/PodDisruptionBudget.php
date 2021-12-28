<?php

namespace k8s\api\policy\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\policy\v1\PodDisruptionBudgetSpec;
use k8s\api\policy\v1\PodDisruptionBudgetStatus;

/**
 * PodDisruptionBudget is an object to define the max disruption that can be caused to a collection of pods
 */
class PodDisruptionBudget extends \k8s\Resource
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
     * @var PodDisruptionBudgetSpec $spec
     * Specification of the desired behavior of the PodDisruptionBudget.
     */
    public $spec;

    /**
     * @var PodDisruptionBudgetStatus $status
     * Most recently observed status of the PodDisruptionBudget.
     */
    public $status;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        if (isset($data['spec'])) {
            $this->spec = new PodDisruptionBudgetSpec($data['spec']);
        }
        if (isset($data['status'])) {
            $this->status = new PodDisruptionBudgetStatus($data['status']);
        }
    }
}
