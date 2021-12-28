<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\MetricTarget;

/**
 * ResourceMetricSource indicates how to scale on a resource metric known to Kubernetes, as specified in requests and limits, describing each pod in the current scale target (e.g. CPU or memory).  The values will be averaged together before being compared to the target.  Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.  Only one "target" type should be set.
 */
class ResourceMetricSource extends \k8s\Resource
{
    /**
     * @var string $name required
     * name is the name of the resource in question.
     */
    public $name;

    /**
     * @var MetricTarget $target
     * target specifies the target value for the given metric
     */
    public $target;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        if (isset($data['target'])) {
            $this->target = new MetricTarget($data['target']);
        }
    }
}
