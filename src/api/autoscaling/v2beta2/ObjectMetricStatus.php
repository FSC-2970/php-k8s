<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricValueStatus;
use k8s\api\autoscaling\v2beta2\CrossVersionObjectReference;
use k8s\api\autoscaling\v2beta2\MetricIdentifier;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus extends \k8s\Resource
{
    /**
     * @var MetricValueStatus $current
     * current contains the current value for the given metric
     */
    public $current;

    /**
     * @var CrossVersionObjectReference $describedObject
     */
    public $describedObject;

    /**
     * @var MetricIdentifier $metric
     * metric identifies the target metric by name and selector
     */
    public $metric;

    public function __construct($data)
    {
        if (isset($data['current'])) {
            $this->current = new MetricValueStatus($data['current']);
        }
        if (isset($data['describedObject'])) {
            $this->describedObject = new CrossVersionObjectReference($data['describedObject']);
        }
        if (isset($data['metric'])) {
            $this->metric = new MetricIdentifier($data['metric']);
        }
    }
}
