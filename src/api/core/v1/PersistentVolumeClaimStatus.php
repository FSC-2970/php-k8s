<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\PersistentVolumeClaimCondition;

/**
 * PersistentVolumeClaimStatus is the current status of a persistent volume claim.
 */
class PersistentVolumeClaimStatus extends \k8s\Resource
{
    /**
     * @var string $accessModes
     * AccessModes contains the actual access modes the volume backing the PVC has. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#access-modes-1
     */
    public $accessModes;

    /**
     * @var object $capacity
     * Represents the actual resources of the underlying volume.
     */
    public $capacity;

    /**
     * @var PersistentVolumeClaimCondition[] $conditions
     * Current Condition of persistent volume claim. If underlying persistent volume is being resized then the Condition will be set to 'ResizeStarted'.
     */
    public $conditions;

    /**
     * @var string $phase
     * Phase represents the current phase of PersistentVolumeClaim.
     */
    public $phase;

    public function __construct($data)
    {
        $this->accessModes = $data['accessModes'] ?? [];
        $this->capacity = $data['capacity'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new PersistentVolumeClaimCondition($a);
        }, $data['conditions'] ?? []);
        $this->phase = $data['phase'] ?? null;
    }
}
