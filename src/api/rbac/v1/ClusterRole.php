<?php

namespace k8s\api\rbac\v1;

use k8s\api\rbac\v1\AggregationRule;
use k8s\apimachinery\pkg\apis\meta\v1\ObjectMeta;
use k8s\api\rbac\v1\PolicyRule;

/**
 * ClusterRole is a cluster level, logical grouping of PolicyRules that can be referenced as a unit by a RoleBinding or ClusterRoleBinding.
 */
class ClusterRole extends \k8s\Resource
{
    /**
     * @var AggregationRule $aggregationRule
     * AggregationRule is an optional field that describes how to build the Rules for this ClusterRole. If AggregationRule is set, then the Rules are controller managed and direct changes to Rules will be stomped by the controller.
     */
    public $aggregationRule;

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
     * Standard object's metadata.
     */
    public $metadata;

    /**
     * @var PolicyRule[] $rules
     * Rules holds all the PolicyRules for this ClusterRole
     */
    public $rules;

    public function __construct($data)
    {
        if (isset($data['aggregationRule'])) {
            $this->aggregationRule = new AggregationRule($data['aggregationRule']);
        }
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ObjectMeta($data['metadata']);
        }
        $this->rules = array_map(function ($a) {
            return new PolicyRule($a);
        }, $data['rules'] ?? []);
    }
}
