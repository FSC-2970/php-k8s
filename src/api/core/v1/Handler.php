<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ExecAction;
use k8s\api\core\v1\HTTPGetAction;
use k8s\api\core\v1\TCPSocketAction;

/**
 * Handler defines a specific action that should be taken
 */
class Handler extends \k8s\Resource
{
    /**
     * @var ExecAction $exec
     * One and only one of the following should be specified. Exec specifies the action to take.
     */
    public $exec;

    /**
     * @var HTTPGetAction $httpGet
     * HTTPGet specifies the http request to perform.
     */
    public $httpGet;

    /**
     * @var TCPSocketAction $tcpSocket
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     */
    public $tcpSocket;

    public function __construct($data)
    {
        if (isset($data['exec'])) {
            $this->exec = new ExecAction($data['exec']);
        }
        if (isset($data['httpGet'])) {
            $this->httpGet = new HTTPGetAction($data['httpGet']);
        }
        if (isset($data['tcpSocket'])) {
            $this->tcpSocket = new TCPSocketAction($data['tcpSocket']);
        }
    }
}
