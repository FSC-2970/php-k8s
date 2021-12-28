<?php

namespace k8s\api\autoscaling\v2beta2;

/**
 * HPAScalingPolicy is a single policy which must hold true for a specified past interval.
 */
class HPAScalingPolicy extends \k8s\Resource
{
    /**
     * @var integer $periodSeconds required
     * PeriodSeconds specifies the window of time for which the policy should hold true. PeriodSeconds must be greater than zero and less than or equal to 1800 (30 min).
     */
    public $periodSeconds;

    /**
     * @var string $type required
     * Type is used to specify the scaling policy.
     */
    public $type;

    /**
     * @var integer $value required
     * Value contains the amount of change which is permitted by the policy. It must be greater than zero
     */
    public $value;

    public function __construct($data)
    {
        $this->periodSeconds = isset($data['periodSeconds']) ? $data['periodSeconds'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
        $this->value = isset($data['value']) ? $data['value'] : null;
    }
}
