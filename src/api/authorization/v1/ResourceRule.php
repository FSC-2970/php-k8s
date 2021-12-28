<?php

namespace k8s\api\authorization\v1;

/**
 * ResourceRule is the list of actions the subject is allowed to perform on resources. The list ordering isn't significant, may contain duplicates, and possibly be incomplete.
 */
class ResourceRule extends \k8s\Resource
{
    /**
     * @var string $apiGroups
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple API groups are specified, any action requested against one of the enumerated resources in any API group will be allowed.  "*" means all.
     */
    public $apiGroups;

    /**
     * @var string $resourceNames
     * ResourceNames is an optional white list of names that the rule applies to.  An empty set means that everything is allowed.  "*" means all.
     */
    public $resourceNames;

    /**
     * @var string $resources
     * Resources is a list of resources this rule applies to.  "*" means all in the specified apiGroups.
     *  "*\/foo" represents the subresource 'foo' for all resources in the specified apiGroups.
     */
    public $resources;

    /**
     * @var string $verbs required
     * Verb is a list of kubernetes resource API verbs, like: get, list, watch, create, update, delete, proxy.  "*" means all.
     */
    public $verbs;

    public function __construct($data)
    {
        $this->apiGroups = $data['apiGroups'] ?? [];
        $this->resourceNames = $data['resourceNames'] ?? [];
        $this->resources = $data['resources'] ?? [];
        $this->verbs = $data['verbs'] ?? [];
    }
}
