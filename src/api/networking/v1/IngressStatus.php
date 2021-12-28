<?php

namespace k8s\api\networking\v1;

use k8s\api\core\v1\LoadBalancerStatus;

/**
 * IngressStatus describe the current state of the Ingress.
 */
class IngressStatus extends \k8s\Resource
{
    /**
     * @var LoadBalancerStatus $loadBalancer
     * LoadBalancer contains the current status of the load-balancer.
     */
    public $loadBalancer;

    public function __construct($data)
    {
        if (isset($data['loadBalancer'])) {
            $this->loadBalancer = new LoadBalancerStatus($data['loadBalancer']);
        }
    }
}
