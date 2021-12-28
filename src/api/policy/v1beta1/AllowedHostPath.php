<?php

namespace k8s\api\policy\v1beta1;

/**
 * AllowedHostPath defines the host volume conditions that will be enabled by a policy for pods to use. It requires the path prefix to be defined.
 */
class AllowedHostPath extends \k8s\Resource
{
    /**
     * @var string $pathPrefix
     * pathPrefix is the path prefix that the host volume must match. It does not support `*`. Trailing slashes are trimmed when validating the path prefix with a host path.
     * 
     * Examples: `\/foo` would allow `\/foo`, `\/foo\/` and `\/foo\/bar` `\/foo` would not allow `\/food` or `\/etc\/foo`
     */
    public $pathPrefix;

    /**
     * @var boolean $readOnly
     * when set to true, will allow host volumes matching the pathPrefix only if all volume mounts are readOnly.
     */
    public $readOnly;

    public function __construct($data)
    {
        $this->pathPrefix = $data['pathPrefix'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
    }
}
