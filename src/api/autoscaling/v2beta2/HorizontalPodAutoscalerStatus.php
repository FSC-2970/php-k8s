<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\HorizontalPodAutoscalerCondition;
use k8s\api\autoscaling\v2beta2\MetricStatus;
use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * HorizontalPodAutoscalerStatus describes the current status of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscalerStatus extends \k8s\Resource
{
    /**
     * @var HorizontalPodAutoscalerCondition[] $conditions
     * conditions is the set of conditions required for this autoscaler to scale its target, and indicates whether or not those conditions are met.
     */
    public $conditions;

    /**
     * @var MetricStatus[] $currentMetrics
     * currentMetrics is the last read state of the metrics used by this autoscaler.
     */
    public $currentMetrics;

    /**
     * @var integer $currentReplicas required
     * currentReplicas is current number of replicas of pods managed by this autoscaler, as last seen by the autoscaler.
     */
    public $currentReplicas;

    /**
     * @var integer $desiredReplicas required
     * desiredReplicas is the desired number of replicas of pods managed by this autoscaler, as last calculated by the autoscaler.
     */
    public $desiredReplicas;

    /**
     * @var Time $lastScaleTime
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of pods, used by the autoscaler to control how often the number of pods is changed.
     */
    public $lastScaleTime;

    /**
     * @var integer $observedGeneration
     * observedGeneration is the most recent generation observed by this autoscaler.
     */
    public $observedGeneration;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new HorizontalPodAutoscalerCondition($a);
        }, $data['conditions'] ?? []);
        $this->currentMetrics = array_map(function ($a) {
            return new MetricStatus($a);
        }, $data['currentMetrics'] ?? []);
        $this->currentReplicas = $data['currentReplicas'] ?? null;
        $this->desiredReplicas = $data['desiredReplicas'] ?? null;
        if (isset($data['lastScaleTime'])) {
            $this->lastScaleTime = new Time($data['lastScaleTime']);
        }
        $this->observedGeneration = $data['observedGeneration'] ?? null;
    }
}
