<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\StatefulSetCondition;

/**
 * StatefulSetStatus represents the current state of a StatefulSet.
 */
class StatefulSetStatus extends \k8s\Resource
{
    /**
     * @var integer $availableReplicas
     * Total number of available pods (ready for at least minReadySeconds) targeted by this statefulset. This is an alpha field and requires enabling StatefulSetMinReadySeconds feature gate. Remove omitempty when graduating to beta
     */
    public $availableReplicas;

    /**
     * @var integer $collisionCount
     * collisionCount is the count of hash collisions for the StatefulSet. The StatefulSet controller uses this field as a collision avoidance mechanism when it needs to create the name for the newest ControllerRevision.
     */
    public $collisionCount;

    /**
     * @var StatefulSetCondition[] $conditions
     * Represents the latest available observations of a statefulset's current state.
     */
    public $conditions;

    /**
     * @var integer $currentReplicas
     * currentReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet version indicated by currentRevision.
     */
    public $currentReplicas;

    /**
     * @var string $currentRevision
     * currentRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the sequence [0,currentReplicas).
     */
    public $currentRevision;

    /**
     * @var integer $observedGeneration
     * observedGeneration is the most recent generation observed for this StatefulSet. It corresponds to the StatefulSet's generation, which is updated on mutation by the API Server.
     */
    public $observedGeneration;

    /**
     * @var integer $readyReplicas
     * readyReplicas is the number of Pods created by the StatefulSet controller that have a Ready Condition.
     */
    public $readyReplicas;

    /**
     * @var integer $replicas required
     * replicas is the number of Pods created by the StatefulSet controller.
     */
    public $replicas;

    /**
     * @var string $updateRevision
     * updateRevision, if not empty, indicates the version of the StatefulSet used to generate Pods in the sequence [replicas-updatedReplicas,replicas)
     */
    public $updateRevision;

    /**
     * @var integer $updatedReplicas
     * updatedReplicas is the number of Pods created by the StatefulSet controller from the StatefulSet version indicated by updateRevision.
     */
    public $updatedReplicas;

    public function __construct($data)
    {
        $this->availableReplicas = $data['availableReplicas'] ?? null;
        $this->collisionCount = $data['collisionCount'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new StatefulSetCondition($a);
        }, $data['conditions'] ?? []);
        $this->currentReplicas = $data['currentReplicas'] ?? null;
        $this->currentRevision = $data['currentRevision'] ?? null;
        $this->observedGeneration = $data['observedGeneration'] ?? null;
        $this->readyReplicas = $data['readyReplicas'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
        $this->updateRevision = $data['updateRevision'] ?? null;
        $this->updatedReplicas = $data['updatedReplicas'] ?? null;
    }
}
