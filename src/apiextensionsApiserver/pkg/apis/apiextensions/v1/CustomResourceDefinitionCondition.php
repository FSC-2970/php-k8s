<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * CustomResourceDefinitionCondition contains details for the current condition of this pod.
 */
class CustomResourceDefinitionCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * lastTransitionTime last time the condition transitioned from one status to another.
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     * message is a human-readable message indicating details about last transition.
     */
    public $message;

    /**
     * @var string $reason
     * reason is a unique, one-word, CamelCase reason for the condition's last transition.
     */
    public $reason;

    /**
     * @var string $status required
     * status is the status of the condition. Can be True, False, Unknown.
     */
    public $status;

    /**
     * @var string $type required
     * type is the type of the condition. Types include Established, NamesAccepted and Terminating.
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
