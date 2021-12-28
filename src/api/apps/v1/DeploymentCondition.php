<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * DeploymentCondition describes the state of a deployment at a certain point.
 */
class DeploymentCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * Last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var Time $lastUpdateTime
     * The last time this condition was updated.
     */
    public $lastUpdateTime;

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
     * Type of deployment condition.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastTransitionTime'])) {
            $this->lastTransitionTime = new Time($data['lastTransitionTime']);
        }
        if (isset($data['lastUpdateTime'])) {
            $this->lastUpdateTime = new Time($data['lastUpdateTime']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
