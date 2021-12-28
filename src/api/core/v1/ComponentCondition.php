<?php

namespace k8s\api\core\v1;

/**
 * Information about the condition of a component.
 */
class ComponentCondition extends \k8s\Resource
{
    /**
     * @var string $error
     * Condition error code for a component. For example, a health check error code.
     */
    public $error;

    /**
     * @var string $message
     * Message about the condition for a component. For example, information about a health check.
     */
    public $message;

    /**
     * @var string $status required
     * Status of the condition for a component. Valid values for "Healthy": "True", "False", or "Unknown".
     */
    public $status;

    /**
     * @var string $type required
     * Type of condition for a component. Valid value: "Healthy"
     */
    public $type;

    public function __construct($data)
    {
        $this->error = isset($data['error']) ? $data['error'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
