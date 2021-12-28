<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ScopeSelector;

/**
 * ResourceQuotaSpec defines the desired hard limits to enforce for Quota.
 */
class ResourceQuotaSpec extends \k8s\Resource
{
    /**
     * @var object $hard
     * hard is the set of desired hard limits for each named resource. More info: https:\/\/kubernetes.io\/docs\/concepts\/policy\/resource-quotas\/
     */
    public $hard;

    /**
     * @var ScopeSelector $scopeSelector
     * scopeSelector is also a collection of filters like scopes that must match each object tracked by a quota but expressed using ScopeSelectorOperator in combination with possible values. For a resource to match, both scopes AND scopeSelector (if specified in spec), must be matched.
     */
    public $scopeSelector;

    /**
     * @var string $scopes
     * A collection of filters that must match each object tracked by a quota. If not specified, the quota matches all objects.
     */
    public $scopes;

    public function __construct($data)
    {
        $this->hard = $data['hard'] ?? null;
        if (isset($data['scopeSelector'])) {
            $this->scopeSelector = new ScopeSelector($data['scopeSelector']);
        }
        $this->scopes = $data['scopes'] ?? [];
    }
}
