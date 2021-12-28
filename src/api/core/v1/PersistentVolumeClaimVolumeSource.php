<?php

namespace k8s\api\core\v1;

/**
 * PersistentVolumeClaimVolumeSource references the user's PVC in the same namespace. This volume finds the bound PV and mounts that volume for the pod. A PersistentVolumeClaimVolumeSource is, essentially, a wrapper around another type of volume that is owned by someone else (the system).
 */
class PersistentVolumeClaimVolumeSource extends \k8s\Resource
{
    /**
     * @var string $claimName required
     * ClaimName is the name of a PersistentVolumeClaim in the same namespace as the pod using this volume. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#persistentvolumeclaims
     */
    public $claimName;

    /**
     * @var boolean $readOnly
     * Will force the ReadOnly setting in VolumeMounts. Default false.
     */
    public $readOnly;

    public function __construct($data)
    {
        $this->claimName = $data['claimName'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
    }
}
