<?php

namespace k8s\api\core\v1;

/**
 * ResourceQuotaStatus defines the enforced hard limits and observed use.
 */
class ResourceQuotaStatus extends \k8s\Resource
{
    /**
     * @var object $hard
     * Hard is the set of enforced hard limits for each named resource. More info: https:\/\/kubernetes.io\/docs\/concepts\/policy\/resource-quotas\/
     */
    public $hard;

    /**
     * @var object $used
     * Used is the current observed total usage of the resource in the namespace.
     */
    public $used;

    public function __construct($data)
    {
        $this->hard = $data['hard'] ?? null;
        $this->used = $data['used'] ?? null;
    }
}
