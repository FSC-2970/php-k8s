<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * StatefulSetCondition describes the state of a statefulset at a certain point.
 */
class StatefulSetCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * Last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * A human readable message indicating details about the transition.
     */
    public $message;

    /**
     * @var string $reason
     * The reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status required
     * Status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string $type required
     * Type of statefulset condition.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastTransitionTime'])) {
            $this->lastTransitionTime = new Time($data['lastTransitionTime']);
        }
        $this->message = $data['message'] ?? null;
        $this->reason = $data['reason'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
