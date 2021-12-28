<?php

namespace k8s\api\core\v1;

/**
 * ResourceRequirements describes the compute resource requirements.
 */
class ResourceRequirements extends \k8s\Resource
{
    /**
     * @var object $limits
     * Limits describes the maximum amount of compute resources allowed. More info: https:\/\/kubernetes.io\/docs\/concepts\/configuration\/manage-resources-containers\/
     */
    public $limits;

    /**
     * @var object $requests
     * Requests describes the minimum amount of compute resources required. If Requests is omitted for a container, it defaults to Limits if that is explicitly specified, otherwise to an implementation-defined value. More info: https:\/\/kubernetes.io\/docs\/concepts\/configuration\/manage-resources-containers\/
     */
    public $requests;

    public function __construct($data)
    {
        $this->limits = $data['limits'] ?? null;
        $this->requests = $data['requests'] ?? null;
    }
}
