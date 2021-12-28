<?php

namespace k8s\api\policy\v1beta1;

use k8s\api\core\v1\SELinuxOptions;

/**
 * SELinuxStrategyOptions defines the strategy type and any options used to create the strategy.
 */
class SELinuxStrategyOptions extends \k8s\Resource
{
    /**
     * @var string $rule required
     * rule is the strategy that will dictate the allowable labels that may be set.
     */
    public $rule;

    /**
     * @var SELinuxOptions $seLinuxOptions
     * seLinuxOptions required to run as; required for MustRunAs More info: https:\/\/kubernetes.io\/docs\/tasks\/configure-pod-container\/security-context\/
     */
    public $seLinuxOptions;

    public function __construct($data)
    {
        $this->rule = $data['rule'] ?? null;
        if (isset($data['seLinuxOptions'])) {
            $this->seLinuxOptions = new SELinuxOptions($data['seLinuxOptions']);
        }
    }
}
