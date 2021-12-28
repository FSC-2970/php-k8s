<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricIdentifier;
use k8s\api\autoscaling\v2beta2\MetricTarget;

/**
 * ExternalMetricSource indicates how to scale on a metric not associated with any Kubernetes object (for example length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster).
 */
class ExternalMetricSource extends \k8s\Resource
{
    /**
     * @var MetricIdentifier $metric
     * metric identifies the target metric by name and selector
     */
    public $metric;

    /**
     * @var MetricTarget $target
     * target specifies the target value for the given metric
     */
    public $target;

    public function __construct($data)
    {
        if (isset($data['metric'])) {
            $this->metric = new MetricIdentifier($data['metric']);
        }
        if (isset($data['target'])) {
            $this->target = new MetricTarget($data['target']);
        }
    }
}
