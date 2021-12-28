<?php

namespace k8s\api\core\v1;

/**
 * SeccompProfile defines a pod\/container's seccomp profile settings. Only one profile source may be set.
 */
class SeccompProfile extends \k8s\Resource
{
    /**
     * @var string $localhostProfile
     * localhostProfile indicates a profile defined in a file on the node should be used. The profile must be preconfigured on the node to work. Must be a descending path, relative to the kubelet's configured seccomp profile location. Must only be set if type is "Localhost".
     */
    public $localhostProfile;

    /**
     * @var string $type required
     * type indicates which kind of seccomp profile will be applied. Valid options are:
     * 
     * Localhost - a profile defined in a file on the node should be used. RuntimeDefault - the container runtime default profile should be used. Unconfined - no profile should be applied.
     */
    public $type;

    public function __construct($data)
    {
        $this->localhostProfile = isset($data['localhostProfile']) ? $data['localhostProfile'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
