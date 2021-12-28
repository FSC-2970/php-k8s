<?php

namespace k8s\api\core\v1;

/**
 * Adds and removes POSIX capabilities from running containers.
 */
class Capabilities extends \k8s\Resource
{
    /**
     * @var string $add
     * Added capabilities
     */
    public $add;

    /**
     * @var string $drop
     * Removed capabilities
     */
    public $drop;

    public function __construct($data)
    {
        $this->add = $data['add'] ?? [];
        $this->drop = $data['drop'] ?? [];
    }
}
