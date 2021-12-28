<?php

namespace k8s\api\core\v1;

/**
 * SELinuxOptions are the labels to be applied to the container
 */
class SELinuxOptions extends \k8s\Resource
{
    /**
     * @var string $level
     * Level is SELinux level label that applies to the container.
     */
    public $level;

    /**
     * @var string $role
     * Role is a SELinux role label that applies to the container.
     */
    public $role;

    /**
     * @var string $type
     * Type is a SELinux type label that applies to the container.
     */
    public $type;

    /**
     * @var string $user
     * User is a SELinux user label that applies to the container.
     */
    public $user;

    public function __construct($data)
    {
        $this->level = isset($data['level']) ? $data['level'] : null;
        $this->role = isset($data['role']) ? $data['role'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
        $this->user = isset($data['user']) ? $data['user'] : null;
    }
}
