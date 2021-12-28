<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\RollingUpdateDeployment;

/**
 * DeploymentStrategy describes how to replace existing pods with new ones.
 */
class DeploymentStrategy extends \k8s\Resource
{
    /**
     * @var RollingUpdateDeployment $rollingUpdate
     * Rolling update config params. Present only if DeploymentStrategyType = RollingUpdate.
     */
    public $rollingUpdate;

    /**
     * @var string $type
     * Type of deployment. Can be "Recreate" or "RollingUpdate". Default is RollingUpdate.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['rollingUpdate'])) {
            $this->rollingUpdate = new RollingUpdateDeployment($data['rollingUpdate']);
        }
        $this->type = $data['type'] ?? null;
    }
}
