<?php

namespace k8s\api\networking\v1;

/**
 * IngressClassParametersReference identifies an API object. This can be used to specify a cluster or namespace-scoped resource.
 */
class IngressClassParametersReference extends \k8s\Resource
{
    /**
     * @var string $apiGroup
     * APIGroup is the group for the resource being referenced. If APIGroup is not specified, the specified Kind must be in the core API group. For any other third-party types, APIGroup is required.
     */
    public $apiGroup;

    /**
     * @var string $kind required
     * Kind is the type of resource being referenced.
     */
    public $kind;

    /**
     * @var string $name required
     * Name is the name of resource being referenced.
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace is the namespace of the resource being referenced. This field is required when scope is set to "Namespace" and must be unset when scope is set to "Cluster".
     */
    public $namespace;

    /**
     * @var string $scope
     * Scope represents if this refers to a cluster or namespace scoped resource. This may be set to "Cluster" (default) or "Namespace". Field can be enabled with IngressClassNamespacedParams feature gate.
     */
    public $scope;

    public function __construct($data)
    {
        $this->apiGroup = $data['apiGroup'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
        $this->scope = $data['scope'] ?? null;
    }
}
