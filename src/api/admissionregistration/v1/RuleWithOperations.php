<?php

namespace k8s\api\admissionregistration\v1;

/**
 * RuleWithOperations is a tuple of Operations and Resources. It is recommended to make sure that all the tuple expansions are valid.
 */
class RuleWithOperations extends \k8s\Resource
{
    /**
     * @var string $apiGroups
     * APIGroups is the API groups the resources belong to. '*' is all groups. If '*' is present, the length of the slice must be one. Required.
     */
    public $apiGroups;

    /**
     * @var string $apiVersions
     * APIVersions is the API versions the resources belong to. '*' is all versions. If '*' is present, the length of the slice must be one. Required.
     */
    public $apiVersions;

    /**
     * @var string $operations
     * Operations is the operations the admission hook cares about - CREATE, UPDATE, DELETE, CONNECT or * for all of those operations and any future admission operations that are added. If '*' is present, the length of the slice must be one. Required.
     */
    public $operations;

    /**
     * @var string $resources
     * Resources is a list of resources this rule applies to.
     * 
     * For example: 'pods' means pods. 'pods\/log' means the log subresource of pods. '*' means all resources, but not subresources. 'pods\/*' means all subresources of pods. '*\/scale' means all scale subresources. '*\/*' means all resources and their subresources.
     * 
     * If wildcard is present, the validation rule will ensure resources do not overlap with each other.
     * 
     * Depending on the enclosing object, subresources might not be allowed. Required.
     */
    public $resources;

    /**
     * @var string $scope
     * scope specifies the scope of this rule. Valid values are "Cluster", "Namespaced", and "*" "Cluster" means that only cluster-scoped resources will match this rule. Namespace API objects are cluster-scoped. "Namespaced" means that only namespaced resources will match this rule. "*" means that there are no scope restrictions. Subresources match the scope of their parent resource. Default is "*".
     */
    public $scope;

    public function __construct($data)
    {
        $this->apiGroups = isset($data['apiGroups']) ? $data['apiGroups'] : [];
        $this->apiVersions = isset($data['apiVersions']) ? $data['apiVersions'] : [];
        $this->operations = isset($data['operations']) ? $data['operations'] : [];
        $this->resources = isset($data['resources']) ? $data['resources'] : [];
        $this->scope = isset($data['scope']) ? $data['scope'] : null;
    }
}
