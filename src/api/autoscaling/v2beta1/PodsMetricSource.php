<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * PodsMetricSource indicates how to scale on a metric describing each pod in the current scale target (for example, transactions-processed-per-second). The values will be averaged together before being compared to the target value.
 */
class PodsMetricSource extends \k8s\Resource
{
    /**
     * @var string $metricName required
     * metricName is the name of the metric in question
     */
    public $metricName;

    /**
     * @var LabelSelector $selector
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric When set, it is passed as an additional parameter to the metrics server for more specific metrics scoping When unset, just the metricName will be used to gather metrics.
     */
    public $selector;

    /**
     * @var Quantity $targetAverageValue
     * targetAverageValue is the target value of the average of the metric across all relevant pods (as a quantity)
     */
    public $targetAverageValue;

    public function __construct($data)
    {
        $this->metricName = isset($data['metricName']) ? $data['metricName'] : null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        if (isset($data['targetAverageValue'])) {
            $this->targetAverageValue = new Quantity($data['targetAverageValue']);
        }
    }
}
