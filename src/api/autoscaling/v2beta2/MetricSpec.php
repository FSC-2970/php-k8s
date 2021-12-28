<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\ContainerResourceMetricSource;
use k8s\api\autoscaling\v2beta2\ExternalMetricSource;
use k8s\api\autoscaling\v2beta2\ObjectMetricSource;
use k8s\api\autoscaling\v2beta2\PodsMetricSource;
use k8s\api\autoscaling\v2beta2\ResourceMetricSource;

/**
 * MetricSpec specifies how to scale based on a single metric (only `type` and one other matching field should be set at once).
 */
class MetricSpec extends \k8s\Resource
{
    /**
     * @var ContainerResourceMetricSource $containerResource
     * container resource refers to a resource metric (such as those specified in requests and limits) known to Kubernetes describing a single container in each pod of the current scale target (e.g. CPU or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source. This is an alpha feature and can be enabled by the HPAContainerMetrics feature flag.
     */
    public $containerResource;

    /**
     * @var ExternalMetricSource $external
     * external refers to a global metric that is not associated with any Kubernetes object. It allows autoscaling based on information coming from components running outside of cluster (for example length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster).
     */
    public $external;

    /**
     * @var ObjectMetricSource $object
     * object refers to a metric describing a single kubernetes object (for example, hits-per-second on an Ingress object).
     */
    public $object;

    /**
     * @var PodsMetricSource $pods
     * pods refers to a metric describing each pod in the current scale target (for example, transactions-processed-per-second).  The values will be averaged together before being compared to the target value.
     */
    public $pods;

    /**
     * @var ResourceMetricSource $resource
     * resource refers to a resource metric (such as those specified in requests and limits) known to Kubernetes describing each pod in the current scale target (e.g. CPU or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the "pods" source.
     */
    public $resource;

    /**
     * @var string $type required
     * type is the type of metric source.  It should be one of "ContainerResource", "External", "Object", "Pods" or "Resource", each mapping to a matching field in the object. Note: "ContainerResource" type is available on when the feature-gate HPAContainerMetrics is enabled
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['containerResource'])) {
            $this->containerResource = new ContainerResourceMetricSource($data['containerResource']);
        }
        if (isset($data['external'])) {
            $this->external = new ExternalMetricSource($data['external']);
        }
        if (isset($data['object'])) {
            $this->object = new ObjectMetricSource($data['object']);
        }
        if (isset($data['pods'])) {
            $this->pods = new PodsMetricSource($data['pods']);
        }
        if (isset($data['resource'])) {
            $this->resource = new ResourceMetricSource($data['resource']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
