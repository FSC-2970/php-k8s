<?php

namespace k8s\api\storage\v1;

/**
 * VolumeNodeResources is a set of resource limits for scheduling of volumes.
 */
class VolumeNodeResources extends \k8s\Resource
{
    /**
     * @var integer $count
     * Maximum number of unique volumes managed by the CSI driver that can be used on a node. A volume that is both attached and mounted on a node is considered to be used once, not twice. The same rule applies for a unique volume that is shared among multiple pods on the same node. If this field is not specified, then the supported number of volumes on this node is unbounded.
     */
    public $count;

    public function __construct($data)
    {
        $this->count = isset($data['count']) ? $data['count'] : null;
    }
}
