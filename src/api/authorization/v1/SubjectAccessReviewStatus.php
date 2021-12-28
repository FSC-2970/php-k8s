<?php

namespace k8s\api\authorization\v1;

/**
 * SubjectAccessReviewStatus
 */
class SubjectAccessReviewStatus extends \k8s\Resource
{
    /**
     * @var boolean $allowed required
     * Allowed is required. True if the action would be allowed, false otherwise.
     */
    public $allowed;

    /**
     * @var boolean $denied
     * Denied is optional. True if the action would be denied, otherwise false. If both allowed is false and denied is false, then the authorizer has no opinion on whether to authorize the action. Denied may not be true if Allowed is true.
     */
    public $denied;

    /**
     * @var string $evaluationError
     * EvaluationError is an indication that some error occurred during the authorization check. It is entirely possible to get an error and be able to continue determine authorization status in spite of it. For instance, RBAC can be missing a role, but enough roles are still present and bound to reason about the request.
     */
    public $evaluationError;

    /**
     * @var string $reason
     * Reason is optional.  It indicates why a request was allowed or denied.
     */
    public $reason;

    public function __construct($data)
    {
        $this->allowed = isset($data['allowed']) ? $data['allowed'] : null;
        $this->denied = isset($data['denied']) ? $data['denied'] : null;
        $this->evaluationError = isset($data['evaluationError']) ? $data['evaluationError'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
    }
}
