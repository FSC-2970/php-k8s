<?php

namespace k8s\api\core\v1;

/**
 * PersistentVolumeStatus is the current status of a persistent volume.
 */
class PersistentVolumeStatus extends \k8s\Resource
{
    /**
     * @var string $message
     * A human-readable message indicating details about why the volume is in this state.
     */
    public $message;

    /**
     * @var string $phase
     * Phase indicates if a volume is available, bound to a claim, or released by a claim. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#phase
     */
    public $phase;

    /**
     * @var string $reason
     * Reason is a brief CamelCase string that describes any failure and is meant for machine parsing and tidy display in the CLI.
     */
    public $reason;

    public function __construct($data)
    {
        $this->message = $data['message'] ?? null;
        $this->phase = $data['phase'] ?? null;
        $this->reason = $data['reason'] ?? null;
    }
}
