<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricValueStatus;

/**
 * ResourceMetricStatus indicates the current value of a resource metric known to Kubernetes, as specified in requests and limits, describing each pod in the current scale target (e.g. CPU or memory).  Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.
 */
class ResourceMetricStatus extends \k8s\Resource
{
    /**
     * @var MetricValueStatus $current
     * current contains the current value for the given metric
     */
    public $current;

    /**
     * @var string $name required
     * Name is the name of the resource in question.
     */
    public $name;

    public function __construct($data)
    {
        if (isset($data['current'])) {
            $this->current = new MetricValueStatus($data['current']);
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
