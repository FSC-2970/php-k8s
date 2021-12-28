<?php

namespace k8s\api\policy\v1beta1;

use k8s\api\policy\v1beta1\IDRange;

/**
 * RunAsGroupStrategyOptions defines the strategy type and any options used to create the strategy.
 */
class RunAsGroupStrategyOptions extends \k8s\Resource
{
    /**
     * @var IDRange[] $ranges
     * ranges are the allowed ranges of gids that may be used. If you would like to force a single gid then supply a single range with the same start and end. Required for MustRunAs.
     */
    public $ranges;

    /**
     * @var string $rule required
     * rule is the strategy that will dictate the allowable RunAsGroup values that may be set.
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
