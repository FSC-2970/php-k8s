<?php

namespace k8s\api\autoscaling\v2beta1;

use k8s\api\autoscaling\v2beta1\MetricSpec;
use k8s\api\autoscaling\v2beta1\CrossVersionObjectReference;

/**
 * HorizontalPodAutoscalerSpec describes the desired functionality of the HorizontalPodAutoscaler.
 */
class HorizontalPodAutoscalerSpec extends \k8s\Resource
{
    /**
     * @var integer $maxReplicas required
     * maxReplicas is the upper limit for the number of replicas to which the autoscaler can scale up. It cannot be less that minReplicas.
     */
    public $maxReplicas;

    /**
     * @var MetricSpec[] $metrics
     * metrics contains the specifications for which to use to calculate the desired replica count (the maximum replica count across all metrics will be used).  The desired replica count is calculated multiplying the ratio between the target value and the current value by the current number of pods.  Ergo, metrics used must decrease as the pod count is increased, and vice-versa.  See the individual metric source types for more information about how each type of metric must respond.
     */
    public $metrics;

    /**
     * @var integer $minReplicas
     * minReplicas is the lower limit for the number of replicas to which the autoscaler can scale down.  It defaults to 1 pod.  minReplicas is allowed to be 0 if the alpha feature gate HPAScaleToZero is enabled and at least one Object or External metric is configured.  Scaling is active as long as at least one metric value is available.
     */
    public $minReplicas;

    /**
     * @var CrossVersionObjectReference $scaleTargetRef
     * scaleTargetRef points to the target resource to scale, and is used to the pods for which metrics should be collected, as well as to actually change the replica count.
     */
    public $scaleTargetRef;

    public function __construct($data)
    {
        $this->maxReplicas = $data['maxReplicas'] ?? null;
        $this->metrics = array_map(function ($a) {
            return new MetricSpec($a);
        }, $data['metrics'] ?? []);
        $this->minReplicas = $data['minReplicas'] ?? null;
        if (isset($data['scaleTargetRef'])) {
            $this->scaleTargetRef = new CrossVersionObjectReference($data['scaleTargetRef']);
        }
    }
}
