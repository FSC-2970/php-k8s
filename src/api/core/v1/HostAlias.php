<?php

namespace k8s\api\core\v1;

/**
 * HostAlias holds the mapping between IP and hostnames that will be injected as an entry in the pod's hosts file.
 */
class HostAlias extends \k8s\Resource
{
    /**
     * @var string $hostnames
     * Hostnames for the above IP address.
     */
    public $hostnames;

    /**
     * @var string $ip
     * IP address of the host file entry.
     */
    public $ip;

    public function __construct($data)
    {
        $this->hostnames = $data['hostnames'] ?? [];
        $this->ip = $data['ip'] ?? null;
    }
}
