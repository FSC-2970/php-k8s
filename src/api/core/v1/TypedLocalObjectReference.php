<?php

namespace k8s\api\core\v1;

/**
 * TypedLocalObjectReference contains enough information to let you locate the typed referenced object inside the same namespace.
 */
class TypedLocalObjectReference extends \k8s\Resource
{
    /**
     * @var string $apiGroup
     * APIGroup is the group for the resource being referenced. If APIGroup is not specified, the specified Kind must be in the core API group. For any other third-party types, APIGroup is required.
     */
    public $apiGroup;

    /**
     * @var string $kind required
     * Kind is the type of resource being referenced
     */
    public $kind;

    /**
     * @var string $name required
     * Name is the name of resource being referenced
     */
    public $name;

    public function __construct($data)
    {
        $this->apiGroup = isset($data['apiGroup']) ? $data['apiGroup'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
