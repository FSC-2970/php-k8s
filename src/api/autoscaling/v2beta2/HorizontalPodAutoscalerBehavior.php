<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\HPAScalingRules;

/**
 * HorizontalPodAutoscalerBehavior configures the scaling behavior of the target in both Up and Down directions (scaleUp and scaleDown fields respectively).
 */
class HorizontalPodAutoscalerBehavior extends \k8s\Resource
{
    /**
     * @var HPAScalingRules $scaleDown
     * scaleDown is scaling policy for scaling Down. If not set, the default value is to allow to scale down to minReplicas pods, with a 300 second stabilization window (i.e., the highest recommendation for the last 300sec is used).
     */
    public $scaleDown;

    /**
     * @var HPAScalingRules $scaleUp
     * scaleUp is scaling policy for scaling Up. If not set, the default value is the higher of:
     *   * increase no more than 4 pods per 60 seconds
     *   * double the number of pods per 60 seconds
     * No stabilization is used.
     */
    public $scaleUp;

    public function __construct($data)
    {
        if (isset($data['scaleDown'])) {
            $this->scaleDown = new HPAScalingRules($data['scaleDown']);
        }
        if (isset($data['scaleUp'])) {
            $this->scaleUp = new HPAScalingRules($data['scaleUp']);
        }
    }
}
