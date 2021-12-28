<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\PortStatus;

/**
 * LoadBalancerIngress represents the status of a load-balancer ingress point: traffic intended for the service should be sent to an ingress point.
 */
class LoadBalancerIngress extends \k8s\Resource
{
    /**
     * @var string $hostname
     * Hostname is set for load-balancer ingress points that are DNS based (typically AWS load-balancers)
     */
    public $hostname;

    /**
     * @var string $ip
     * IP is set for load-balancer ingress points that are IP based (typically GCE or OpenStack load-balancers)
     */
    public $ip;

    /**
     * @var PortStatus[] $ports
     * Ports is a list of records of service ports If used, every port defined in the service should have an entry in it
     */
    public $ports;

    public function __construct($data)
    {
        $this->hostname = $data['hostname'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->ports = array_map(function ($a) {
            return new PortStatus($a);
        }, $data['ports'] ?? []);
    }
}
