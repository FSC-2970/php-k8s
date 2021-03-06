<?php

namespace k8s\api\networking\v1;

/**
 * IngressTLS describes the transport layer security associated with an Ingress.
 */
class IngressTLS extends \k8s\Resource
{
    /**
     * @var string $hosts
     * Hosts are a list of hosts included in the TLS certificate. The values in this list must match the name\/s used in the tlsSecret. Defaults to the wildcard host setting for the loadbalancer controller fulfilling this Ingress, if left unspecified.
     */
    public $hosts;

    /**
     * @var string $secretName
     * SecretName is the name of the secret used to terminate TLS traffic on port 443. Field is left optional to allow TLS routing based on SNI hostname alone. If the SNI host in a listener conflicts with the "Host" header field used by an IngressRule, the SNI host is used for termination and value of the Host header is used for routing.
     */
    public $secretName;

    public function __construct($data)
    {
        $this->hosts = isset($data['hosts']) ? $data['hosts'] : [];
        $this->secretName = isset($data['secretName']) ? $data['secretName'] : null;
    }
}
