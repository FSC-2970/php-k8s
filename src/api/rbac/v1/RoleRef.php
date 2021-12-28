<?php

namespace k8s\api\rbac\v1;

/**
 * RoleRef contains information that points to the role being used
 */
class RoleRef extends \k8s\Resource
{
    /**
     * @var string $apiGroup required
     * APIGroup is the group for the resource being referenced
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
