<?php

namespace k8s\api\apps\v1;

/**
 * RollingUpdateStatefulSetStrategy is used to communicate parameter for RollingUpdateStatefulSetStrategyType.
 */
class RollingUpdateStatefulSetStrategy extends \k8s\Resource
{
    /**
     * @var integer $partition
     * Partition indicates the ordinal at which the StatefulSet should be partitioned. Default value is 0.
     */
    public $partition;

    public function __construct($data)
    {
        $this->partition = $data['partition'] ?? null;
    }
}
