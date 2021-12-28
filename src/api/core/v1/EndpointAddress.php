<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ObjectReference;

/**
 * EndpointAddress is a tuple that describes single IP address.
 */
class EndpointAddress extends \k8s\Resource
{
    /**
     * @var string $hostname
     * The Hostname of this endpoint
     */
    public $hostname;

    /**
     * @var string $ip required
     * The IP of this endpoint. May not be loopback (127.0.0.0\/8), link-local (169.254.0.0\/16), or link-local multicast ((224.0.0.0\/24). IPv6 is also accepted but not fully supported on all platforms. Also, certain kubernetes components, like kube-proxy, are not IPv6 ready.
     */
    public $ip;

    /**
     * @var string $nodeName
     * Optional: Node hosting this endpoint. This can be used to determine endpoints local to a node.
     */
    public $nodeName;

    /**
     * @var ObjectReference $targetRef
     * Reference to object providing the endpoint.
     */
    public $targetRef;

    public function __construct($data)
    {
        $this->hostname = $data['hostname'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->nodeName = $data['nodeName'] ?? null;
        if (isset($data['targetRef'])) {
            $this->targetRef = new ObjectReference($data['targetRef']);
        }
    }
}
