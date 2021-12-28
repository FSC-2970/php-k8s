<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\DeploymentCondition;

/**
 * DeploymentStatus is the most recently observed status of the Deployment.
 */
class DeploymentStatus extends \k8s\Resource
{
    /**
     * @var integer $availableReplicas
     * Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     */
    public $availableReplicas;

    /**
     * @var integer $collisionCount
     * Count of hash collisions for the Deployment. The Deployment controller uses this field as a collision avoidance mechanism when it needs to create the name for the newest ReplicaSet.
     */
    public $collisionCount;

    /**
     * @var DeploymentCondition[] $conditions
     * Represents the latest available observations of a deployment's current state.
     */
    public $conditions;

    /**
     * @var integer $observedGeneration
     * The generation observed by the deployment controller.
     */
    public $observedGeneration;

    /**
     * @var integer $readyReplicas
     * Total number of ready pods targeted by this deployment.
     */
    public $readyReplicas;

    /**
     * @var integer $replicas
     * Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     */
    public $replicas;

    /**
     * @var integer $unavailableReplicas
     * Total number of unavailable pods targeted by this deployment. This is the total number of pods that are still required for the deployment to have 100% available capacity. They may either be pods that are running but not yet available or pods that still have not been created.
     */
    public $unavailableReplicas;

    /**
     * @var integer $updatedReplicas
     * Total number of non-terminated pods targeted by this deployment that have the desired template spec.
     */
    public $updatedReplicas;

    public function __construct($data)
    {
        $this->availableReplicas = $data['availableReplicas'] ?? null;
        $this->collisionCount = $data['collisionCount'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new DeploymentCondition($a);
        }, $data['conditions'] ?? []);
        $this->observedGeneration = $data['observedGeneration'] ?? null;
        $this->readyReplicas = $data['readyReplicas'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
        $this->unavailableReplicas = $data['unavailableReplicas'] ?? null;
        $this->updatedReplicas = $data['updatedReplicas'] ?? null;
    }
}
