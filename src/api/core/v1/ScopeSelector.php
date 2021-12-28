<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ScopedResourceSelectorRequirement;

/**
 * A scope selector represents the AND of the selectors represented by the scoped-resource selector requirements.
 */
class ScopeSelector extends \k8s\Resource
{
    /**
     * @var ScopedResourceSelectorRequirement[] $matchExpressions
     * A list of scope selector requirements by scope of the resources.
     */
    public $matchExpressions;

    public function __construct($data)
    {
        $this->matchExpressions = array_map(function ($a) {
            return new ScopedResourceSelectorRequirement($a);
        }, isset($data['matchExpressions']) ? $data['matchExpressions'] : []);
    }
}
