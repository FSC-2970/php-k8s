<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\api\resource\Quantity;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\api\autoscaling\v2beta1\CrossVersionObjectReference;

/**
 * ObjectMetricStatus indicates the current value of a metric describing a kubernetes object (for example, hits-per-second on an Ingress object).
 */
class ObjectMetricStatus extends \k8s\Resource
{
    /**
     * @var Quantity $averageValue
     * averageValue is the current value of the average of the metric across all relevant pods (as a quantity)
     */
    public $averageValue;

    /**
     * @var Quantity $currentValue
     * currentValue is the current value of the metric (as a quantity).
     */
    public $currentValue;

    /**
     * @var string $metricName required
     * metricName is the name of the metric in question.
     */
    public $metricName;

    /**
     * @var LabelSelector $selector
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric When set in the ObjectMetricSource, it is passed as an additional parameter to the metrics server for more specific metrics scoping. When unset, just the metricName will be used to gather metrics.
     */
    public $selector;

    /**
     * @var CrossVersionObjectReference $target
     * target is the described Kubernetes object.
     */
    public $target;

    public function __construct($data)
    {
        if (isset($data['averageValue'])) {
            $this->averageValue = new Quantity($data['averageValue']);
        }
        if (isset($data['currentValue'])) {
            $this->currentValue = new Quantity($data['currentValue']);
        }
        $this->metricName = $data['metricName'] ?? null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        if (isset($data['target'])) {
            $this->target = new CrossVersionObjectReference($data['target']);
        }
    }
}
