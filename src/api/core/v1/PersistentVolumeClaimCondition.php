<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * PersistentVolumeClaimCondition contails details about state of pvc
 */
class PersistentVolumeClaimCondition extends \k8s\Resource
{
    /**
     * @var Time $lastProbeTime
     * Last time we probed the condition.
     */
    public $lastProbeTime;

    /**
     * @var Time $lastTransitionTime
     * Last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * Human-readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string $reason
     * Unique, this should be a short, machine understandable string that gives the reason for condition's last transition. If it reports "ResizeStarted" that means the underlying persistent volume is being resized.
     */
    public $reason;

    /**
     * @var string $status required
     */
    public $status;

    /**
     * @var string $type required
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastProbeTime'])) {
            $this->lastProbeTime = new Time($data['lastProbeTime']);
        }
        if (isset($data['lastTransitionTime'])) {
            $this->lastTransitionTime = new Time($data['lastTransitionTime']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
