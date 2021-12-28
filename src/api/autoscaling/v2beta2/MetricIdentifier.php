<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * MetricIdentifier defines the name and optionally selector for a metric
 */
class MetricIdentifier extends \k8s\Resource
{
    /**
     * @var string $name required
     * name is the name of the given metric
     */
    public $name;

    /**
     * @var LabelSelector $selector
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric When set, it is passed as an additional parameter to the metrics server for more specific metrics scoping. When unset, just the metricName will be used to gather metrics.
     */
    public $selector;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
    }
}
