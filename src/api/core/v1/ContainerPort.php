<?php

namespace k8s\api\core\v1;

/**
 * ContainerPort represents a network port in a single container.
 */
class ContainerPort extends \k8s\Resource
{
    /**
     * @var integer $containerPort required
     * Number of port to expose on the pod's IP address. This must be a valid port number, 0 < x < 65536.
     */
    public $containerPort;

    /**
     * @var string $hostIP
     * What host IP to bind the external port to.
     */
    public $hostIP;

    /**
     * @var integer $hostPort
     * Number of port to expose on the host. If specified, this must be a valid port number, 0 < x < 65536. If HostNetwork is specified, this must match ContainerPort. Most containers do not need this.
     */
    public $hostPort;

    /**
     * @var string $name
     * If specified, this must be an IANA_SVC_NAME and unique within the pod. Each named port in a pod must have a unique name. Name for the port that can be referred to by services.
     */
    public $name;

    /**
     * @var string $protocol
     * Protocol for port. Must be UDP, TCP, or SCTP. Defaults to "TCP".
     */
    public $protocol;

    public function __construct($data)
    {
        $this->containerPort = $data['containerPort'] ?? null;
        $this->hostIP = $data['hostIP'] ?? null;
        $this->hostPort = $data['hostPort'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->protocol = $data['protocol'] ?? null;
    }
}
