<?php

namespace k8s\api\autoscaling\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * current status of a horizontal pod autoscaler
 */
class HorizontalPodAutoscalerStatus extends \k8s\Resource
{
    /**
     * @var integer $currentCPUUtilizationPercentage
     * current average CPU utilization over all pods, represented as a percentage of requested CPU, e.g. 70 means that an average pod is using now 70% of its requested CPU.
     */
    public $currentCPUUtilizationPercentage;

    /**
     * @var integer $currentReplicas required
     * current number of replicas of pods managed by this autoscaler.
     */
    public $currentReplicas;

    /**
     * @var integer $desiredReplicas required
     * desired number of replicas of pods managed by this autoscaler.
     */
    public $desiredReplicas;

    /**
     * @var Time $lastScaleTime
     * last time the HorizontalPodAutoscaler scaled the number of pods; used by the autoscaler to control how often the number of pods is changed.
     */
    public $lastScaleTime;

    /**
     * @var integer $observedGeneration
     * most recent generation observed by this autoscaler.
     */
    public $observedGeneration;

    public function __construct($data)
    {
        $this->currentCPUUtilizationPercentage = $data['currentCPUUtilizationPercentage'] ?? null;
        $this->currentReplicas = $data['currentReplicas'] ?? null;
        $this->desiredReplicas = $data['desiredReplicas'] ?? null;
        if (isset($data['lastScaleTime'])) {
            $this->lastScaleTime = new Time($data['lastScaleTime']);
        }
        $this->observedGeneration = $data['observedGeneration'] ?? null;
    }
}
