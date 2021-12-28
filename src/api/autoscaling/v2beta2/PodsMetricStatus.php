<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricValueStatus;
use k8s\api\autoscaling\v2beta2\MetricIdentifier;

/**
 * PodsMetricStatus indicates the current value of a metric describing each pod in the current scale target (for example, transactions-processed-per-second).
 */
class PodsMetricStatus extends \k8s\Resource
{
    /**
     * @var MetricValueStatus $current
     * current contains the current value for the given metric
     */
    public $current;

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
        if (isset($data['metric'])) {
            $this->metric = new MetricIdentifier($data['metric']);
        }
    }
}
