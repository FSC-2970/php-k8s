<?php

namespace k8s\api\policy\v1beta1;

use k8s\api\policy\v1beta1\IDRange;

/**
 * SupplementalGroupsStrategyOptions defines the strategy type and options used to create the strategy.
 */
class SupplementalGroupsStrategyOptions extends \k8s\Resource
{
    /**
     * @var IDRange[] $ranges
     * ranges are the allowed ranges of supplemental groups.  If you would like to force a single supplemental group then supply a single range with the same start and end. Required for MustRunAs.
     */
    public $ranges;

    /**
     * @var string $rule
     * rule is the strategy that will dictate what supplemental groups is used in the SecurityContext.
     */
    public $rule;

    public function __construct($data)
    {
        $this->ranges = array_map(function ($a) {
            return new IDRange($a);
        }, $data['ranges'] ?? []);
        $this->rule = $data['rule'] ?? null;
    }
}
