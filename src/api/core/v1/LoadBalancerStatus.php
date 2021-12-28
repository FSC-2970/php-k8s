<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LoadBalancerIngress;

/**
 * LoadBalancerStatus represents the status of a load-balancer.
 */
class LoadBalancerStatus extends \k8s\Resource
{
    /**
     * @var LoadBalancerIngress[] $ingress
     * Ingress is a list containing ingress points for the load-balancer. Traffic intended for the service should be sent to these ingress points.
     */
    public $ingress;

    public function __construct($data)
    {
        $this->ingress = array_map(function ($a) {
            return new LoadBalancerIngress($a);
        }, isset($data['ingress']) ? $data['ingress'] : []);
    }
}
