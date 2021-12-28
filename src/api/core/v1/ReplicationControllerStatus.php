<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ReplicationControllerCondition;

/**
 * ReplicationControllerStatus represents the current status of a replication controller.
 */
class ReplicationControllerStatus extends \k8s\Resource
{
    /**
     * @var integer $availableReplicas
     * The number of available replicas (ready for at least minReadySeconds) for this replication controller.
     */
    public $availableReplicas;

    /**
     * @var ReplicationControllerCondition[] $conditions
     * Represents the latest available observations of a replication controller's current state.
     */
    public $conditions;

    /**
     * @var integer $fullyLabeledReplicas
     * The number of pods that have labels matching the labels of the pod template of the replication controller.
     */
    public $fullyLabeledReplicas;

    /**
     * @var integer $observedGeneration
     * ObservedGeneration reflects the generation of the most recently observed replication controller.
     */
    public $observedGeneration;

    /**
     * @var integer $readyReplicas
     * The number of ready replicas for this replication controller.
     */
    public $readyReplicas;

    /**
     * @var integer $replicas required
     * Replicas is the most recently oberved number of replicas. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller#what-is-a-replicationcontroller
     */
    public $replicas;

    public function __construct($data)
    {
        $this->availableReplicas = isset($data['availableReplicas']) ? $data['availableReplicas'] : null;
        $this->conditions = array_map(function ($a) {
            return new ReplicationControllerCondition($a);
        }, isset($data['conditions']) ? $data['conditions'] : []);
        $this->fullyLabeledReplicas = isset($data['fullyLabeledReplicas']) ? $data['fullyLabeledReplicas'] : null;
        $this->observedGeneration = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->readyReplicas = isset($data['readyReplicas']) ? $data['readyReplicas'] : null;
        $this->replicas = isset($data['replicas']) ? $data['replicas'] : null;
    }
}
