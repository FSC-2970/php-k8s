<?php

namespace k8s\api\core\v1;

/**
 * Represents a host path mapped into a pod. Host path volumes do not support ownership management or SELinux relabeling.
 */
class HostPathVolumeSource extends \k8s\Resource
{
    /**
     * @var string $path required
     * Path of the directory on the host. If the path is a symlink, it will follow the link to the real path. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#hostpath
     */
    public $path;

    /**
     * @var string $type
     * Type for HostPath Volume Defaults to "" More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#hostpath
     */
    public $type;

    public function __construct($data)
    {
        $this->path = isset($data['path']) ? $data['path'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
    }
}
