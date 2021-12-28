<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\apimachinery\pkg\api\resource\Quantity;

/**
 * ResourceMetricStatus indicates the current value of a resource metric known to Kubernetes, as specified in requests and limits, describing each pod in the current scale target (e.g. CPU or memory).  Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.
 */
class ResourceMetricStatus extends \k8s\Resource
{
    /**
     * @var integer $currentAverageUtilization
     * currentAverageUtilization is the current value of the average of the resource metric across all relevant pods, represented as a percentage of the requested value of the resource for the pods.  It will only be present if `targetAverageValue` was set in the corresponding metric specification.
     */
    public $currentAverageUtilization;

    /**
     * @var Quantity $currentAverageValue
     * currentAverageValue is the current value of the average of the resource metric across all relevant pods, as a raw value (instead of as a percentage of the request), similar to the "pods" metric source type. It will always be set, regardless of the corresponding metric specification.
     */
    public $currentAverageValue;

    /**
     * @var string $name required
     * name is the name of the resource in question.
     */
    public $name;

    public function __construct($data)
    {
        $this->currentAverageUtilization = isset($data['currentAverageUtilization']) ? $data['currentAverageUtilization'] : null;
        if (isset($data['currentAverageValue'])) {
            $this->currentAverageValue = new Quantity($data['currentAverageValue']);
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
