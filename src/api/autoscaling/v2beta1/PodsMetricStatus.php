<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\api\resource\Quantity;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * PodsMetricStatus indicates the current value of a metric describing each pod in the current scale target (for example, transactions-processed-per-second).
 */
class PodsMetricStatus extends \k8s\Resource
{
    /**
     * @var Quantity $currentAverageValue
     * currentAverageValue is the current value of the average of the metric across all relevant pods (as a quantity)
     */
    public $currentAverageValue;

    /**
     * @var string $metricName required
     * metricName is the name of the metric in question
     */
    public $metricName;

    /**
     * @var LabelSelector $selector
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric When set in the PodsMetricSource, it is passed as an additional parameter to the metrics server for more specific metrics scoping. When unset, just the metricName will be used to gather metrics.
     */
    public $selector;

    public function __construct($data)
    {
        if (isset($data['currentAverageValue'])) {
            $this->currentAverageValue = new Quantity($data['currentAverageValue']);
        }
        $this->metricName = $data['metricName'] ?? null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
    }
}
