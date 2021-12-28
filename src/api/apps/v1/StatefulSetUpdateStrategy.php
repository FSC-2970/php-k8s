<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\RollingUpdateStatefulSetStrategy;

/**
 * StatefulSetUpdateStrategy indicates the strategy that the StatefulSet controller will use to perform updates. It includes any additional parameters necessary to perform the update for the indicated strategy.
 */
class StatefulSetUpdateStrategy extends \k8s\Resource
{
    /**
     * @var RollingUpdateStatefulSetStrategy $rollingUpdate
     * RollingUpdate is used to communicate parameters when Type is RollingUpdateStatefulSetStrategyType.
     */
    public $rollingUpdate;

    /**
     * @var string $type
     * Type indicates the type of the StatefulSetUpdateStrategy. Default is RollingUpdate.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['rollingUpdate'])) {
            $this->rollingUpdate = new RollingUpdateStatefulSetStrategy($data['rollingUpdate']);
        }
        $this->type = $data['type'] ?? null;
    }
}
