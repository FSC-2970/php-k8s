<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationCondition;

/**
 * PriorityLevelConfigurationStatus represents the current state of a "request-priority".
 */
class PriorityLevelConfigurationStatus extends \k8s\Resource
{
    /**
     * @var PriorityLevelConfigurationCondition[] $conditions
     * `conditions` is the current state of "request-priority".
     */
    public $conditions;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new PriorityLevelConfigurationCondition($a);
        }, isset($data['conditions']) ? $data['conditions'] : []);
    }
}
