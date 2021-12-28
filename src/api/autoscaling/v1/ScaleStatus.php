<?php

namespace k8s\api\autoscaling\v1;

/**
 * ScaleStatus represents the current status of a scale subresource.
 */
class ScaleStatus extends \k8s\Resource
{
    /**
     * @var integer $replicas required
     * actual number of observed instances of the scaled object.
     */
    public $replicas;

    /**
     * @var string $selector
     * label query over pods that should match the replicas count. This is same as the label selector but in the string format to avoid introspection by clients. The string will be in the same format as the query-param syntax. More info about label selectors: http:\/\/kubernetes.io\/docs\/user-guide\/labels#label-selectors
     */
    public $selector;

    public function __construct($data)
    {
        $this->replicas = isset($data['replicas']) ? $data['replicas'] : null;
        $this->selector = isset($data['selector']) ? $data['selector'] : null;
    }
}
