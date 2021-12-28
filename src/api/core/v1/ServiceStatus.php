<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Condition;
use k8s\api\core\v1\LoadBalancerStatus;

/**
 * ServiceStatus represents the current status of a service.
 */
class ServiceStatus extends \k8s\Resource
{
    /**
     * @var Condition[] $conditions
     * Current service state
     */
    public $conditions;

    /**
     * @var LoadBalancerStatus $loadBalancer
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     */
    public $loadBalancer;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new Condition($a);
        }, $data['conditions'] ?? []);
        if (isset($data['loadBalancer'])) {
            $this->loadBalancer = new LoadBalancerStatus($data['loadBalancer']);
        }
    }
}
