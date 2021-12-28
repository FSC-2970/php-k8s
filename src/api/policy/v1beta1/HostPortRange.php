<?php

namespace k8s\api\policy\v1beta1;

/**
 * HostPortRange defines a range of host ports that will be enabled by a policy for pods to use.  It requires both the start and end to be defined.
 */
class HostPortRange extends \k8s\Resource
{
    /**
     * @var integer $max required
     * max is the end of the range, inclusive.
     */
    public $max;

    /**
     * @var integer $min required
     * min is the start of the range, inclusive.
     */
    public $min;

    public function __construct($data)
    {
        $this->max = $data['max'] ?? null;
        $this->min = $data['min'] ?? null;
    }
}
