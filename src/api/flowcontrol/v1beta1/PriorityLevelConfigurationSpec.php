<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\LimitedPriorityLevelConfiguration;

/**
 * PriorityLevelConfigurationSpec specifies the configuration of a priority level.
 */
class PriorityLevelConfigurationSpec extends \k8s\Resource
{
    /**
     * @var LimitedPriorityLevelConfiguration $limited
     * `limited` specifies how requests are handled for a Limited priority level. This field must be non-empty if and only if `type` is `"Limited"`.
     */
    public $limited;

    /**
     * @var string $type required
     * `type` indicates whether this priority level is subject to limitation on request execution.  A value of `"Exempt"` means that requests of this priority level are not subject to a limit (and thus are never queued) and do not detract from the capacity made available to other priority levels.  A value of `"Limited"` means that (a) requests of this priority level _are_ subject to limits and (b) some of the server's limited capacity is made available exclusively to this priority level. Required.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['limited'])) {
            $this->limited = new LimitedPriorityLevelConfiguration($data['limited']);
        }
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
