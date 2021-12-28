<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\FlowSchemaCondition;

/**
 * FlowSchemaStatus represents the current state of a FlowSchema.
 */
class FlowSchemaStatus extends \k8s\Resource
{
    /**
     * @var FlowSchemaCondition[] $conditions
     * `conditions` is a list of the current states of FlowSchema.
     */
    public $conditions;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new FlowSchemaCondition($a);
        }, isset($data['conditions']) ? $data['conditions'] : []);
    }
}
