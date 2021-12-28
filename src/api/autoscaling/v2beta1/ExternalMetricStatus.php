<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\api\resource\Quantity;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * ExternalMetricStatus indicates the current value of a global metric not associated with any Kubernetes object.
 */
class ExternalMetricStatus extends \k8s\Resource
{
    /**
     * @var Quantity $currentAverageValue
     * currentAverageValue is the current value of metric averaged over autoscaled pods.
     */
    public $currentAverageValue;

    /**
     * @var Quantity $currentValue
     * currentValue is the current value of the metric (as a quantity)
     */
    public $currentValue;

    /**
     * @var string $metricName required
     * metricName is the name of a metric used for autoscaling in metric system.
     */
    public $metricName;

    /**
     * @var LabelSelector $metricSelector
     * metricSelector is used to identify a specific time series within a given metric.
     */
    public $metricSelector;

    public function __construct($data)
    {
        if (isset($data['currentAverageValue'])) {
            $this->currentAverageValue = new Quantity($data['currentAverageValue']);
        }
        if (isset($data['currentValue'])) {
            $this->currentValue = new Quantity($data['currentValue']);
        }
        $this->metricName = isset($data['metricName']) ? $data['metricName'] : null;
        if (isset($data['metricSelector'])) {
            $this->metricSelector = new LabelSelector($data['metricSelector']);
        }
    }
}
