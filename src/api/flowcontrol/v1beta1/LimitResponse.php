<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\QueuingConfiguration;

/**
 * LimitResponse defines how to handle requests that can not be executed right now.
 */
class LimitResponse extends \k8s\Resource
{
    /**
     * @var QueuingConfiguration $queuing
     * `queuing` holds the configuration parameters for queuing. This field may be non-empty only if `type` is `"Queue"`.
     */
    public $queuing;

    /**
     * @var string $type required
     * `type` is "Queue" or "Reject". "Queue" means that requests that can not be executed upon arrival are held in a queue until they can be executed or a queuing limit is reached. "Reject" means that requests that can not be executed upon arrival are rejected. Required.
     */
    public $type;

    public function __construct($data)
    {
        if (isset($data['queuing'])) {
            $this->queuing = new QueuingConfiguration($data['queuing']);
        }
        $this->type = $data['type'] ?? null;
    }
}
