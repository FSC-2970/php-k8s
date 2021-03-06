<?php

namespace k8s\api\rbac\v1;

/**
 * PolicyRule holds information that describes a policy rule, but does not contain information about who the rule applies to or which namespace the rule applies to.
 */
class PolicyRule extends \k8s\Resource
{
    /**
     * @var string $apiGroups
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple API groups are specified, any action requested against one of the enumerated resources in any API group will be allowed.
     */
    public $apiGroups;

    /**
     * @var string $nonResourceURLs
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s are allowed, but only as the full, final step in the path Since non-resource URLs are not namespaced, this field is only applicable for ClusterRoles referenced from a ClusterRoleBinding. Rules can either apply to API resources (such as "pods" or "secrets") or non-resource URL paths (such as "\/api"),  but not both.
     */
    public $nonResourceURLs;

    /**
     * @var string $resourceNames
     * ResourceNames is an optional white list of names that the rule applies to.  An empty set means that everything is allowed.
     */
    public $resourceNames;

    /**
     * @var string $resources
     * Resources is a list of resources this rule applies to. '*' represents all resources.
     */
    public $resources;

    /**
     * @var string $verbs required
     * Verbs is a list of Verbs that apply to ALL the ResourceKinds and AttributeRestrictions contained in this rule. '*' represents all verbs.
     */
    public $verbs;

    public function __construct($data)
    {
        $this->apiGroups = isset($data['apiGroups']) ? $data['apiGroups'] : [];
        $this->nonResourceURLs = isset($data['nonResourceURLs']) ? $data['nonResourceURLs'] : [];
        $this->resourceNames = isset($data['resourceNames']) ? $data['resourceNames'] : [];
        $this->resources = isset($data['resources']) ? $data['resources'] : [];
        $this->verbs = isset($data['verbs']) ? $data['verbs'] : [];
    }
}
