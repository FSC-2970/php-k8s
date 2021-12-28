<?php

namespace k8s\api\autoscaling\v1;

use k8s\api\autoscaling\v1\CrossVersionObjectReference;

/**
 * specification of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscalerSpec extends \k8s\Resource
{
    /**
     * @var integer $maxReplicas required
     * upper limit for the number of pods that can be set by the autoscaler; cannot be smaller than MinReplicas.
     */
    public $maxReplicas;

    /**
     * @var integer $minReplicas
     * minReplicas is the lower limit for the number of replicas to which the autoscaler can scale down.  It defaults to 1 pod.  minReplicas is allowed to be 0 if the alpha feature gate HPAScaleToZero is enabled and at least one Object or External metric is configured.  Scaling is active as long as at least one metric value is available.
     */
    public $minReplicas;

    /**
     * @var CrossVersionObjectReference $scaleTargetRef
     * reference to scaled resource; horizontal pod autoscaler will learn the current resource consumption and will set the desired number of pods by using its Scale subresource.
     */
    public $scaleTargetRef;

    /**
     * @var integer $targetCPUUtilizationPercentage
     * target average CPU utilization (represented as a percentage of requested CPU) over all the pods; if not specified the default autoscaling policy will be used.
     */
    public $targetCPUUtilizationPercentage;

    public function __construct($data)
    {
        $this->maxReplicas = isset($data['maxReplicas']) ? $data['maxReplicas'] : null;
        $this->minReplicas = isset($data['minReplicas']) ? $data['minReplicas'] : null;
        if (isset($data['scaleTargetRef'])) {
            $this->scaleTargetRef = new CrossVersionObjectReference($data['scaleTargetRef']);
        }
        $this->targetCPUUtilizationPercentage = isset($data['targetCPUUtilizationPercentage']) ? $data['targetCPUUtilizationPercentage'] : null;
    }
}
