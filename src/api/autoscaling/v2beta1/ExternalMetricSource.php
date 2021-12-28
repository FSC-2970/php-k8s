<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * ExternalMetricSource indicates how to scale on a metric not associated with any Kubernetes object (for example length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster). Exactly one "target" type should be set.
 */
class ExternalMetricSource extends \k8s\Resource
{
    /**
     * @var string $metricName required
     * metricName is the name of the metric in question.
     */
    public $metricName;

    /**
     * @var LabelSelector $metricSelector
     * metricSelector is used to identify a specific time series within a given metric.
     */
    public $metricSelector;

    /**
     * @var Quantity $targetAverageValue
     * targetAverageValue is the target per-pod value of global metric (as a quantity). Mutually exclusive with TargetValue.
     */
    public $targetAverageValue;

    /**
     * @var Quantity $targetValue
     * targetValue is the target value of the metric (as a quantity). Mutually exclusive with TargetAverageValue.
     */
    public $targetValue;

    public function __construct($data)
    {
        $this->metricName = isset($data['metricName']) ? $data['metricName'] : null;
        if (isset($data['metricSelector'])) {
            $this->metricSelector = new LabelSelector($data['metricSelector']);
        }
        if (isset($data['targetAverageValue'])) {
            $this->targetAverageValue = new Quantity($data['targetAverageValue']);
        }
        if (isset($data['targetValue'])) {
            $this->targetValue = new Quantity($data['targetValue']);
        }
    }
}
