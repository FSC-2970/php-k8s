<?php

namespace k8s\api\apps\v1;

use k8s\api\apps\v1\DaemonSetCondition;

/**
 * DaemonSetStatus represents the current status of a daemon set.
 */
class DaemonSetStatus extends \k8s\Resource
{
    /**
     * @var integer $collisionCount
     * Count of hash collisions for the DaemonSet. The DaemonSet controller uses this field as a collision avoidance mechanism when it needs to create the name for the newest ControllerRevision.
     */
    public $collisionCount;

    /**
     * @var DaemonSetCondition[] $conditions
     * Represents the latest available observations of a DaemonSet's current state.
     */
    public $conditions;

    /**
     * @var integer $currentNumberScheduled required
     * The number of nodes that are running at least 1 daemon pod and are supposed to run the daemon pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/daemonset\/
     */
    public $currentNumberScheduled;

    /**
     * @var integer $desiredNumberScheduled required
     * The total number of nodes that should be running the daemon pod (including nodes correctly running the daemon pod). More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/daemonset\/
     */
    public $desiredNumberScheduled;

    /**
     * @var integer $numberAvailable
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod running and available (ready for at least spec.minReadySeconds)
     */
    public $numberAvailable;

    /**
     * @var integer $numberMisscheduled required
     * The number of nodes that are running the daemon pod, but are not supposed to run the daemon pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/daemonset\/
     */
    public $numberMisscheduled;

    /**
     * @var integer $numberReady required
     * The number of nodes that should be running the daemon pod and have one or more of the daemon pod running and ready.
     */
    public $numberReady;

    /**
     * @var integer $numberUnavailable
     * The number of nodes that should be running the daemon pod and have none of the daemon pod running and available (ready for at least spec.minReadySeconds)
     */
    public $numberUnavailable;

    /**
     * @var integer $observedGeneration
     * The most recent generation observed by the daemon set controller.
     */
    public $observedGeneration;

    /**
     * @var integer $updatedNumberScheduled
     * The total number of nodes that are running updated daemon pod
     */
    public $updatedNumberScheduled;

    public function __construct($data)
    {
        $this->collisionCount = $data['collisionCount'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new DaemonSetCondition($a);
        }, $data['conditions'] ?? []);
        $this->currentNumberScheduled = $data['currentNumberScheduled'] ?? null;
        $this->desiredNumberScheduled = $data['desiredNumberScheduled'] ?? null;
        $this->numberAvailable = $data['numberAvailable'] ?? null;
        $this->numberMisscheduled = $data['numberMisscheduled'] ?? null;
        $this->numberReady = $data['numberReady'] ?? null;
        $this->numberUnavailable = $data['numberUnavailable'] ?? null;
        $this->observedGeneration = $data['observedGeneration'] ?? null;
        $this->updatedNumberScheduled = $data['updatedNumberScheduled'] ?? null;
    }
}
