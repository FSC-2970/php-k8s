<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\ReplicaSetCondition;

/**
 * ReplicaSetStatus represents the current status of a ReplicaSet.
 */
class ReplicaSetStatus extends \k8s\Resource
{
    /**
     * @var integer $availableReplicas
     * The number of available replicas (ready for at least minReadySeconds) for this replica set.
     */
    public $availableReplicas;

    /**
     * @var ReplicaSetCondition[] $conditions
     * Represents the latest available observations of a replica set's current state.
     */
    public $conditions;

    /**
     * @var integer $fullyLabeledReplicas
     * The number of pods that have labels matching the labels of the pod template of the replicaset.
     */
    public $fullyLabeledReplicas;

    /**
     * @var integer $observedGeneration
     * ObservedGeneration reflects the generation of the most recently observed ReplicaSet.
     */
    public $observedGeneration;

    /**
     * @var integer $readyReplicas
     * The number of ready replicas for this replica set.
     */
    public $readyReplicas;

    /**
     * @var integer $replicas required
     * Replicas is the most recently oberved number of replicas. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller\/#what-is-a-replicationcontroller
     */
    public $replicas;

    public function __construct($data)
    {
        $this->availableReplicas = $data['availableReplicas'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new ReplicaSetCondition($a);
        }, $data['conditions'] ?? []);
        $this->fullyLabeledReplicas = $data['fullyLabeledReplicas'] ?? null;
        $this->observedGeneration = $data['observedGeneration'] ?? null;
        $this->readyReplicas = $data['readyReplicas'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
    }
}
