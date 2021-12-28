<?php

namespace k8s\api\policy\v1beta1;

use k8s\api\policy\v1beta1\IDRange;

/**
 * FSGroupStrategyOptions defines the strategy type and options used to create the strategy.
 */
class FSGroupStrategyOptions extends \k8s\Resource
{
    /**
     * @var IDRange[] $ranges
     * ranges are the allowed ranges of fs groups.  If you would like to force a single fs group then supply a single range with the same start and end. Required for MustRunAs.
     */
    public $ranges;

    /**
     * @var string $rule
     * rule is the strategy that will dictate what FSGroup is used in the SecurityContext.
     */
    public $rule;

    public function __construct($data)
    {
        $this->ranges = array_map(function ($a) {
            return new IDRange($a);
        }, isset($data['ranges']) ? $data['ranges'] : []);
        $this->rule = isset($data['rule']) ? $data['rule'] : null;
    }
}
