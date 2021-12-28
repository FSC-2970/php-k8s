<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * ServerAddressByClientCIDR helps the client to determine the server address that they should use, depending on the clientCIDR that they match.
 */
class ServerAddressByClientCIDR extends \k8s\Resource
{
    /**
     * @var string $clientCIDR required
     * The CIDR with which clients can match their IP to figure out the server address that they should use.
     */
    public $clientCIDR;

    /**
     * @var string $serverAddress required
     * Address of this server, suitable for a client that matches the above CIDR. This can be a hostname, hostname:port, IP or IP:port.
     */
    public $serverAddress;

    public function __construct($data)
    {
        $this->clientCIDR = isset($data['clientCIDR']) ? $data['clientCIDR'] : null;
        $this->serverAddress = isset($data['serverAddress']) ? $data['serverAddress'] : null;
    }
}
