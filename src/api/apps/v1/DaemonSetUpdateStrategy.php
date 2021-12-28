<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\RollingUpdateDaemonSet;

/**
 * DaemonSetUpdateStrategy is a struct used to control the update strategy for a DaemonSet.
 */
class DaemonSetUpdateStrategy extends \k8s\Resource
{
    /**
     * @var RollingUpdateDaemonSet $rollingUpdate
     * Rolling update config params. Present only if type = "RollingUpdate".
     */
    public $rollingUpdate;

    /**
     * @var string $type
     * Type of daemon set update. Can be "RollingUpdate" or "OnDelete". Default is RollingUpdate.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['rollingUpdate'])) {
            $this->rollingUpdate = new RollingUpdateDaemonSet($data['rollingUpdate']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
