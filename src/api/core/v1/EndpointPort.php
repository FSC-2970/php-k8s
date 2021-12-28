<?php

namespace k8s\api\core\v1;

/**
 * EndpointPort is a tuple that describes a single port.
 */
class EndpointPort extends \k8s\Resource
{
    /**
     * @var string $appProtocol
     * The application protocol for this port. This field follows standard Kubernetes label syntax. Un-prefixed names are reserved for IANA standard service names (as per RFC-6335 and http:\/\/www.iana.org\/assignments\/service-names). Non-standard protocols should use prefixed names such as mycompany.com\/my-custom-protocol.
     */
    public $appProtocol;

    /**
     * @var string $name
     * The name of this port.  This must match the 'name' field in the corresponding ServicePort. Must be a DNS_LABEL. Optional only if one port is defined.
     */
    public $name;

    /**
     * @var integer $port required
     * The port number of the endpoint.
     */
    public $port;

    /**
     * @var string $protocol
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     */
    public $protocol;

    public function __construct($data)
    {
        $this->appProtocol = $data['appProtocol'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->port = $data['port'] ?? null;
        $this->protocol = $data['protocol'] ?? null;
    }
}
