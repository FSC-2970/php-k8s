<?php

namespace k8s\api\authorization\v1;

/**
 * ResourceAttributes includes the authorization attributes available for resource requests to the Authorizer interface
 */
class ResourceAttributes extends \k8s\Resource
{
    /**
     * @var string $group
     * Group is the API Group of the Resource.  "*" means all.
     */
    public $group;

    /**
     * @var string $name
     * Name is the name of the resource being requested for a "get" or deleted for a "delete". "" (empty) means all.
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace is the namespace of the action being requested.  Currently, there is no distinction between no namespace and all namespaces "" (empty) is defaulted for LocalSubjectAccessReviews "" (empty) is empty for cluster-scoped resources "" (empty) means "all" for namespace scoped resources from a SubjectAccessReview or SelfSubjectAccessReview
     */
    public $namespace;

    /**
     * @var string $resource
     * Resource is one of the existing resource types.  "*" means all.
     */
    public $resource;

    /**
     * @var string $subresource
     * Subresource is one of the existing resource types.  "" means none.
     */
    public $subresource;

    /**
     * @var string $verb
     * Verb is a kubernetes resource API verb, like: get, list, watch, create, update, delete, proxy.  "*" means all.
     */
    public $verb;

    /**
     * @var string $version
     * Version is the API Version of the Resource.  "*" means all.
     */
    public $version;

    public function __construct($data)
    {
        $this->group = $data['group'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
        $this->resource = $data['resource'] ?? null;
        $this->subresource = $data['subresource'] ?? null;
        $this->verb = $data['verb'] ?? null;
        $this->version = $data['version'] ?? null;
    }
}
