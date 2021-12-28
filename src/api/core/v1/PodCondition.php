<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * PodCondition contains details for the current condition of this pod.
 */
class PodCondition extends \k8s\Resource
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
     * Unique, one-word, CamelCase reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status required
     * Status is the status of the condition. Can be True, False, Unknown. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#pod-conditions
     */
    public $status;

    /**
     * @var string $type required
     * Type is the type of the condition. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#pod-conditions
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
