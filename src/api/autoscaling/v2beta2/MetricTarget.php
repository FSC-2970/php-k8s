<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * MetricTarget defines the target value, average value, or average utilization of a specific metric
 */
class MetricTarget extends \k8s\Resource
{
    /**
     * @var integer $averageUtilization
     * averageUtilization is the target value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods. Currently only valid for Resource metric source type
     */
    public $averageUtilization;

    /**
     * @var Quantity $averageValue
     * averageValue is the target value of the average of the metric across all relevant pods (as a quantity)
     */
    public $averageValue;

    /**
     * @var string $type required
     * type represents whether the metric type is Utilization, Value, or AverageValue
     */
    public $type;

    /**
     * @var Quantity $value
     * value is the target value of the metric (as a quantity).
     */
    public $value;

    public function __construct($data)
    {
        $this->averageUtilization = $data['averageUtilization'] ?? null;
        if (isset($data['averageValue'])) {
            $this->averageValue = new Quantity($data['averageValue']);
        }
        $this->type = $data['type'] ?? null;
        if (isset($data['value'])) {
            $this->value = new Quantity($data['value']);
        }
    }
}
