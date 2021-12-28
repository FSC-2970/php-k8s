<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\CrossVersionObjectReference;
use k8s\api\autoscaling\v2beta2\MetricIdentifier;
use k8s\api\autoscaling\v2beta2\MetricTarget;

/**
 * ObjectMetricSource indicates how to scale on a metric describing a kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricSource extends \k8s\Resource
{
    /**
     * @var CrossVersionObjectReference $describedObject
     */
    public $describedObject;

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
        if (isset($data['describedObject'])) {
            $this->describedObject = new CrossVersionObjectReference($data['describedObject']);
        }
        if (isset($data['metric'])) {
            $this->metric = new MetricIdentifier($data['metric']);
        }
        if (isset($data['target'])) {
            $this->target = new MetricTarget($data['target']);
        }
    }
}
