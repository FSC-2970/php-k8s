<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * NamespaceCondition contains details about state of namespace.
 */
class NamespaceCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     */
    public $lastTransitionTime;

    /**
     * @var string $message
     */
    public $message;

    /**
     * @var string $reason
     */
    public $reason;

    /**
     * @var string $status required
     * Status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string $type required
     * Type of namespace controller condition.
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
