<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * HorizontalPodAutoscalerCondition describes the state of a HorizontalPodAutoscaler at a certain point.
 */
class HorizontalPodAutoscalerCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * lastTransitionTime is the last time the condition transitioned from one status to another
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * message is a human-readable explanation containing details about the transition
     */
    public $message;

    /**
     * @var string $reason
     * reason is the reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status required
     * status is the status of the condition (True, False, Unknown)
     */
    public $status;

    /**
     * @var string $type required
     * type describes the current condition
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
