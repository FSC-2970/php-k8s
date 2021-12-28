<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * NodeCondition contains condition information for a node.
 */
class NodeCondition extends \k8s\Resource
{
    /**
     * @var Time $lastHeartbeatTime
     * Last time we got an update on a given condition.
     */
    public $lastHeartbeatTime;

    /**
     * @var Time $lastTransitionTime
     * Last time the condition transit from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * Human readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string $reason
     * (brief) reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status required
     * Status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string $type required
     * Type of node condition.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastHeartbeatTime'])) {
            $this->lastHeartbeatTime = new Time($data['lastHeartbeatTime']);
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
