<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\StatusDetails;
use k8s\apimachinery\pkg\apis\meta\v1\ListMeta;

/**
 * Status is a return value for calls that don't return other objects.
 */
class Status extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var integer $code
     * Suggested HTTP return code for this status, 0 if not set.
     */
    public $code;

    /**
     * @var StatusDetails $details
     * Extended data associated with the reason.  Each reason may define its own extended details. This field is optional and the data returned is not guaranteed to conform to any schema except that defined by the reason type.
     */
    public $details;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string $message
     * A human-readable description of the status of this operation.
     */
    public $message;

    /**
     * @var ListMeta $metadata
     * Standard list metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $metadata;

    /**
     * @var string $reason
     * A machine-readable description of why this operation is in the "Failure" status. If this value is empty there is no information available. A Reason clarifies an HTTP status code but does not override it.
     */
    public $reason;

    /**
     * @var string $status
     * Status of the operation. One of: "Success" or "Failure". More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#spec-and-status
     */
    public $status;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->code = isset($data['code']) ? $data['code'] : null;
        if (isset($data['details'])) {
            $this->details = new StatusDetails($data['details']);
        }
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ListMeta($data['metadata']);
        }
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
    }
}
