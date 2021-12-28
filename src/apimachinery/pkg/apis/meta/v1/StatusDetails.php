<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\StatusCause;

/**
 * StatusDetails is a set of additional properties that MAY be set by the server to provide additional information about a response. The Reason field of a Status object defines what attributes will be set. Clients must ignore fields that do not match the defined type of each attribute, and should assume that any attribute may be empty, invalid, or under defined.
 */
class StatusDetails extends \k8s\Resource
{
    /**
     * @var StatusCause[] $causes
     * The Causes array includes more details associated with the StatusReason failure. Not all StatusReasons may provide detailed causes.
     */
    public $causes;

    /**
     * @var string $group
     * The group attribute of the resource associated with the status StatusReason.
     */
    public $group;

    /**
     * @var string $kind
     * The kind attribute of the resource associated with the status StatusReason. On some operations may differ from the requested resource Kind. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string $name
     * The name attribute of the resource associated with the status StatusReason (when there is a single name which can be described).
     */
    public $name;

    /**
     * @var integer $retryAfterSeconds
     * If specified, the time in seconds before the operation should be retried. Some errors may indicate the client must take an alternate action - for those errors this field may indicate how long to wait before taking the alternate action.
     */
    public $retryAfterSeconds;

    /**
     * @var string $uid
     * UID of the resource. (when there is a single resource which can be described). More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#uids
     */
    public $uid;

    public function __construct($data)
    {
        $this->causes = array_map(function ($a) {
            return new StatusCause($a);
        }, isset($data['causes']) ? $data['causes'] : []);
        $this->group = isset($data['group']) ? $data['group'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->retryAfterSeconds = isset($data['retryAfterSeconds']) ? $data['retryAfterSeconds'] : null;
        $this->uid = isset($data['uid']) ? $data['uid'] : null;
    }
}
