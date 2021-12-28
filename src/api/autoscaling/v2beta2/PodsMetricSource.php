<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricIdentifier;
use k8s\api\autoscaling\v2beta2\MetricTarget;

/**
 * PodsMetricSource indicates how to scale on a metric describing each pod in the current scale target (for example, transactions-processed-per-second). The values will be averaged together before being compared to the target value.
 */
class PodsMetricSource extends \k8s\Resource
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
