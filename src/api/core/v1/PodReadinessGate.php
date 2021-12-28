<?php

namespace k8s\api\core\v1;

/**
 * PodReadinessGate contains the reference to a pod condition
 */
class PodReadinessGate extends \k8s\Resource
{
    /**
     * @var string $conditionType required
     * ConditionType refers to a condition in the pod's condition list with matching type.
     */
    public $conditionType;

    public function __construct($data)
    {
        $this->conditionType = isset($data['conditionType']) ? $data['conditionType'] : null;
    }
}
