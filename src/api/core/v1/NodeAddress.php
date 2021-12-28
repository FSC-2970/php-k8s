<?php

namespace k8s\api\core\v1;

/**
 * NodeAddress contains information for the node's address.
 */
class NodeAddress extends \k8s\Resource
{
    /**
     * @var string $address required
     * The node address.
     */
    public $address;

    /**
     * @var string $type required
     * Node address type, one of Hostname, ExternalIP or InternalIP.
     */
    public $type;

    public function __construct($data)
    {
        $this->address = $data['address'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
