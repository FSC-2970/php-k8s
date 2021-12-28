<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * ResourcePolicyRule is a predicate that matches some resource requests, testing the request's verb and the target resource. A ResourcePolicyRule matches a resource request if and only if: (a) at least one member of verbs matches the request, (b) at least one member of apiGroups matches the request, (c) at least one member of resources matches the request, and (d) least one member of namespaces matches the request.
 */
class ResourcePolicyRule extends \k8s\Resource
{
    /**
     * @var string $apiGroups required
     * `apiGroups` is a list of matching API groups and may not be empty. "*" matches all API groups and, if present, must be the only entry. Required.
     */
    public $apiGroups;

    /**
     * @var boolean $clusterScope
     * `clusterScope` indicates whether to match requests that do not specify a namespace (which happens either because the resource is not namespaced or the request targets all namespaces). If this field is omitted or false then the `namespaces` field must contain a non-empty list.
     */
    public $clusterScope;

    /**
     * @var string $namespaces
     * `namespaces` is a list of target namespaces that restricts matches.  A request that specifies a target namespace matches only if either (a) this list contains that target namespace or (b) this list contains "*".  Note that "*" matches any specified namespace but does not match a request that _does not specify_ a namespace (see the `clusterScope` field for that). This list may be empty, but only if `clusterScope` is true.
     */
    public $namespaces;

    /**
     * @var string $resources required
     * `resources` is a list of matching resources (i.e., lowercase and plural) with, if desired, subresource.  For example, [ "services", "nodes\/status" ].  This list may not be empty. "*" matches all resources and, if present, must be the only entry. Required.
     */
    public $resources;

    /**
     * @var string $verbs required
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs and, if present, must be the only entry. Required.
     */
    public $verbs;

    public function __construct($data)
    {
        $this->apiGroups = isset($data['apiGroups']) ? $data['apiGroups'] : [];
        $this->clusterScope = isset($data['clusterScope']) ? $data['clusterScope'] : null;
        $this->namespaces = isset($data['namespaces']) ? $data['namespaces'] : [];
        $this->resources = isset($data['resources']) ? $data['resources'] : [];
        $this->verbs = isset($data['verbs']) ? $data['verbs'] : [];
    }
}
