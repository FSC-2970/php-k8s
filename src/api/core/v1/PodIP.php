<?php

namespace k8s\api\core\v1;

/**
 * IP address information for entries in the (plural) PodIPs field. Each entry includes:
 *    IP: An IP address allocated to the pod. Routable at least within the cluster.
 */
class PodIP extends \k8s\Resource
{
    /**
     * @var string $ip
     * ip is an IP address (IPv4 or IPv6) assigned to the pod
     */
    public $ip;

    public function __construct($data)
    {
        $this->ip = isset($data['ip']) ? $data['ip'] : null;
    }
}
