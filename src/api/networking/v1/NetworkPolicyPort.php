<?php

namespace k8s\api\networking\v1;

use k8s\apimachinery\pkg\util\intstr\IntOrString;

/**
 * NetworkPolicyPort describes a port to allow traffic on
 */
class NetworkPolicyPort extends \k8s\Resource
{
    /**
     * @var integer $endPort
     * If set, indicates that the range of ports from port to endPort, inclusive, should be allowed by the policy. This field cannot be defined if the port field is not defined or if the port field is defined as a named (string) port. The endPort must be equal or greater than port. This feature is in Beta state and is enabled by default. It can be disabled using the Feature Gate "NetworkPolicyEndPort".
     */
    public $endPort;

    /**
     * @var IntOrString $port
     * The port on the given protocol. This can either be a numerical or named port on a pod. If this field is not provided, this matches all port names and numbers. If present, only traffic on the specified protocol AND port will be matched.
     */
    public $port;

    /**
     * @var string $protocol
     * The protocol (TCP, UDP, or SCTP) which traffic must match. If not specified, this field defaults to TCP.
     */
    public $protocol;

    public function __construct($data)
    {
        $this->endPort = $data['endPort'] ?? null;
        if (isset($data['port'])) {
            $this->port = new IntOrString($data['port']);
        }
        $this->protocol = $data['protocol'] ?? null;
    }
}