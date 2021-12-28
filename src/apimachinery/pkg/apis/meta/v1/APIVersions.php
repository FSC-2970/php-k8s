<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\ServerAddressByClientCIDR;

/**
 * APIVersions lists the versions that are available, to allow clients to discover the API at \/api, which is the root path of the legacy v1 API.
 */
class APIVersions extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ServerAddressByClientCIDR[] $serverAddressByClientCIDRs
     * a map of client CIDR to server address that is serving this group. This is to help clients reach servers in the most network-efficient way possible. Clients can use the appropriate server address as per the CIDR that they match. In case of multiple matches, clients should use the longest matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For example: the master will return an internal IP CIDR only, if the client reaches the server using an internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in that order) to get the client IP.
     */
    public $serverAddressByClientCIDRs;

    /**
     * @var string $versions required
     * versions are the api versions that are available.
     */
    public $versions;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->serverAddressByClientCIDRs = array_map(function ($a) {
            return new ServerAddressByClientCIDR($a);
        }, $data['serverAddressByClientCIDRs'] ?? []);
        $this->versions = $data['versions'] ?? [];
    }
}
