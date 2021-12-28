<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * MetricValueStatus holds the current value for a metric
 */
class MetricValueStatus extends \k8s\Resource
{
    /**
     * @var integer $averageUtilization
     * currentAverageUtilization is the current value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods.
     */
    public $averageUtilization;

    /**
     * @var Quantity $averageValue
     * averageValue is the current value of the average of the metric across all relevant pods (as a quantity)
     */
    public $averageValue;

    /**
     * @var Quantity $value
     * value is the current value of the metric (as a quantity).
     */
    public $value;

    public function __construct($data)
    {
        $this->averageUtilization = $data['averageUtilization'] ?? null;
        if (isset($data['averageValue'])) {
            $this->averageValue = new Quantity($data['averageValue']);
        }
        if (isset($data['value'])) {
            $this->value = new Quantity($data['value']);
        }
    }
}
