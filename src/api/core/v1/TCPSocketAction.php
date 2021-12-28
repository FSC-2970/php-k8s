<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\util\intstr\IntOrString;

/**
 * TCPSocketAction describes an action based on opening a socket
 */
class TCPSocketAction extends \k8s\Resource
{
    /**
     * @var string $host
     * Optional: Host name to connect to, defaults to the pod IP.
     */
    public $host;

    /**
     * @var IntOrString $port
     * Number or name of the port to access on the container. Number must be in the range 1 to 65535. Name must be an IANA_SVC_NAME.
     */
    public $port;

    public function __construct($data)
    {
        $this->host = isset($data['host']) ? $data['host'] : null;
        if (isset($data['port'])) {
            $this->port = new IntOrString($data['port']);
        }
    }
}
