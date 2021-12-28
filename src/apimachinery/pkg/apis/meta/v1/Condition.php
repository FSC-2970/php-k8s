<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * Condition contains details for one aspect of the current state of this API Resource.
 */
class Condition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * lastTransitionTime is the last time the condition transitioned from one status to another. This should be when the underlying condition changed.  If that is not known, then using the time when the API field changed is acceptable.
     */
    public $lastTransitionTime;

    /**
     * @var string $message required
     * message is a human readable message indicating details about the transition. This may be an empty string.
     */
    public $message;

    /**
     * @var integer $observedGeneration
     * observedGeneration represents the .metadata.generation that the condition was set based upon. For instance, if .metadata.generation is currently 12, but the .status.conditions[x].observedGeneration is 9, the condition is out of date with respect to the current state of the instance.
     */
    public $observedGeneration;

    /**
     * @var string $reason required
     * reason contains a programmatic identifier indicating the reason for the condition's last transition. Producers of specific condition types may define expected values and meanings for this field, and whether the values are considered a guaranteed API. The value should be a CamelCase string. This field may not be empty.
     */
    public $reason;

    /**
     * @var string $status required
     * status of the condition, one of True, False, Unknown.
     */
    public $status;

    /**
     * @var string $type required
     * type of condition in CamelCase or in foo.example.com\/CamelCase.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['lastTransitionTime'])) {
            $this->lastTransitionTime = new Time($data['lastTransitionTime']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->observedGeneration = isset($data['observedGeneration']) ? $data['observedGeneration'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
