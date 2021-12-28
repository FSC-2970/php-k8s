<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * PriorityLevelConfigurationCondition defines the condition of priority level.
 */
class PriorityLevelConfigurationCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * `lastTransitionTime` is the last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * `message` is a human-readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string $reason
     * `reason` is a unique, one-word, CamelCase reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status
     * `status` is the status of the condition. Can be True, False, Unknown. Required.
     */
    public $status;

    /**
     * @var string $type
     * `type` is the type of the condition. Required.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastTransitionTime'])) {
            $this->lastTransitionTime = new Time($data['lastTransitionTime']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
