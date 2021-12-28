<?php

namespace k8s\api\core\v1;

class PortStatus extends \k8s\Resource
{
    /**
     * @var string $error
     * Error is to record the problem with the service port The format of the error shall comply with the following rules: - built-in error values shall be specified in this file and those shall use
     *   CamelCase names
     * - cloud provider specific error values must have names that comply with the
     *   format foo.example.com\/CamelCase.
     */
    public $error;

    /**
     * @var integer $port required
     * Port is the port number of the service port of which status is recorded here
     */
    public $port;

    /**
     * @var string $protocol required
     * Protocol is the protocol of the service port of which status is recorded here The supported values are: "TCP", "UDP", "SCTP"
     */
    public $protocol;

    public function __construct($data)
    {
        $this->error = isset($data['error']) ? $data['error'] : null;
        $this->port = isset($data['port']) ? $data['port'] : null;
        $this->protocol = isset($data['protocol']) ? $data['protocol'] : null;
    }
}
