<?php

namespace k8s\api\core\v1;

/**
 * LimitRangeItem defines a min\/max usage limit for any resource that matches on kind.
 */
class LimitRangeItem extends \k8s\Resource
{
    /**
     * @var object $default
     * Default resource requirement limit value by resource name if resource limit is omitted.
     */
    public $default;

    /**
     * @var object $defaultRequest
     * DefaultRequest is the default resource requirement request value by resource name if resource request is omitted.
     */
    public $defaultRequest;

    /**
     * @var object $max
     * Max usage constraints on this kind by resource name.
     */
    public $max;

    /**
     * @var object $maxLimitRequestRatio
     * MaxLimitRequestRatio if specified, the named resource must have a request and limit that are both non-zero where limit divided by request is less than or equal to the enumerated value; this represents the max burst for the named resource.
     */
    public $maxLimitRequestRatio;

    /**
     * @var object $min
     * Min usage constraints on this kind by resource name.
     */
    public $min;

    /**
     * @var string $type required
     * Type of resource that this limit applies to.
     */
    public $type;

    public function __construct($data)
    {
        $this->default = $data['default'] ?? null;
        $this->defaultRequest = $data['defaultRequest'] ?? null;
        $this->max = $data['max'] ?? null;
        $this->maxLimitRequestRatio = $data['maxLimitRequestRatio'] ?? null;
        $this->min = $data['min'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
