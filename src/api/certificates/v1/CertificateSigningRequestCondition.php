<?php

namespace k8s\api\certificates\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * CertificateSigningRequestCondition describes a condition of a CertificateSigningRequest object
 */
class CertificateSigningRequestCondition extends \k8s\Resource
{
    /**
     * @var Time $lastTransitionTime
     * lastTransitionTime is the time the condition last transitioned from one status to another. If unset, when a new condition type is added or an existing condition's status is changed, the server defaults this to the current time.
     */
    public $lastTransitionTime;

    /**
     * @var Time $lastUpdateTime
     * lastUpdateTime is the time of the last update to this condition
     */
    public $lastUpdateTime;

    /**
     * @var string $message
     * message contains a human readable message with details about the request state
     */
    public $message;

    /**
     * @var string $reason
     * reason indicates a brief reason for the request state
     */
    public $reason;

    /**
     * @var string $status required
     * status of the condition, one of True, False, Unknown. Approved, Denied, and Failed conditions may not be "False" or "Unknown".
     */
    public $status;

    /**
     * @var string $type required
     * type of the condition. Known conditions are "Approved", "Denied", and "Failed".
     * 
     * An "Approved" condition is added via the \/approval subresource, indicating the request was approved and should be issued by the signer.
     * 
     * A "Denied" condition is added via the \/approval subresource, indicating the request was denied and should not be issued by the signer.
     * 
     * A "Failed" condition is added via the \/status subresource, indicating the signer failed to issue the certificate.
     * 
     * Approved and Denied conditions are mutually exclusive. Approved, Denied, and Failed conditions cannot be removed once added.
     * 
     * Only one condition of a given type is allowed.
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
        $this->message = $data['message'] ?? null;
        $this->reason = $data['reason'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
