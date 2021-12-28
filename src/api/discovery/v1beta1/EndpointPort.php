<?php

namespace k8s\api\discovery\v1beta1;

/**
 * EndpointPort represents a Port used by an EndpointSlice
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
     * The name of this port. All ports in an EndpointSlice must have a unique name. If the EndpointSlice is dervied from a Kubernetes service, this corresponds to the Service.ports[].name. Name must either be an empty string or pass DNS_LABEL validation: * must be no more than 63 characters long. * must consist of lower case alphanumeric characters or '-'. * must start and end with an alphanumeric character. Default is empty string.
     */
    public $name;

    /**
     * @var integer $port
     * The port number of the endpoint. If this is not specified, ports are not restricted and must be interpreted in the context of the specific consumer.
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
