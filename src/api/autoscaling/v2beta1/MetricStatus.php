<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\api\autoscaling\v2beta1\ContainerResourceMetricStatus;
use k8s\api\autoscaling\v2beta1\ExternalMetricStatus;
use k8s\api\autoscaling\v2beta1\ObjectMetricStatus;
use k8s\api\autoscaling\v2beta1\PodsMetricStatus;
use k8s\api\autoscaling\v2beta1\ResourceMetricStatus;

/**
 * MetricStatus describes the last-read state of a single metric.
 */
class MetricStatus extends \k8s\Resource
{
    /**
     * @var ContainerResourceMetricStatus $containerResource
     * container resource refers to a resource metric (such as those specified in requests and limits) known to Kubernetes describing a single container in each pod in the current scale target (e.g. CPU or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.
     */
    public $containerResource;

    /**
     * @var ExternalMetricStatus $external
     * external refers to a global metric that is not associated with any Kubernetes object. It allows autoscaling based on information coming from components running outside of cluster (for example length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster).
     */
    public $external;

    /**
     * @var ObjectMetricStatus $object
     * object refers to a metric describing a single kubernetes object (for example, hits-per-second on an Ingress object).
     */
    public $object;

    /**
     * @var PodsMetricStatus $pods
     * pods refers to a metric describing each pod in the current scale target (for example, transactions-processed-per-second).  The values will be averaged together before being compared to the target value.
     */
    public $pods;

    /**
     * @var ResourceMetricStatus $resource
     * resource refers to a resource metric (such as those specified in requests and limits) known to Kubernetes describing each pod in the current scale target (e.g. CPU or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.
     */
    public $resource;

    /**
     * @var string $type required
     * type is the type of metric source.  It will be one of "ContainerResource", "External", "Object", "Pods" or "Resource", each corresponds to a matching field in the object. Note: "ContainerResource" type is available on when the feature-gate HPAContainerMetrics is enabled
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['containerResource'])) {
            $this->containerResource = new ContainerResourceMetricStatus($data['containerResource']);
        }
        if (isset($data['external'])) {
            $this->external = new ExternalMetricStatus($data['external']);
        }
        if (isset($data['object'])) {
            $this->object = new ObjectMetricStatus($data['object']);
        }
        if (isset($data['pods'])) {
            $this->pods = new PodsMetricStatus($data['pods']);
        }
        if (isset($data['resource'])) {
            $this->resource = new ResourceMetricStatus($data['resource']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
