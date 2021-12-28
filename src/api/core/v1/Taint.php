<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * The node this Taint is attached to has the "effect" on any pod that does not tolerate the Taint.
 */
class Taint extends \k8s\Resource
{
    /**
     * @var string $effect required
     * Required. The effect of the taint on pods that do not tolerate the taint. Valid effects are NoSchedule, PreferNoSchedule and NoExecute.
     */
    public $effect;

    /**
     * @var string $key required
     * Required. The taint key to be applied to a node.
     */
    public $key;

    /**
     * @var Time $timeAdded
     * TimeAdded represents the time at which the taint was added. It is only written for NoExecute taints.
     */
    public $timeAdded;

    /**
     * @var string $value
     * The taint value corresponding to the taint key.
     */
    public $value;

    public function __construct($data)
    {
        $this->effect = isset($data['effect']) ? $data['effect'] : null;
        $this->key = isset($data['key']) ? $data['key'] : null;
        if (isset($data['timeAdded'])) {
            $this->timeAdded = new Time($data['timeAdded']);
        }
        $this->value = isset($data['value']) ? $data['value'] : null;
    }
}
