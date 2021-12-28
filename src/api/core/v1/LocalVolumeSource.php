<?php

namespace k8s\api\core\v1;

/**
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. It applies only when the Path is a block device. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The default value is to auto-select a fileystem if unspecified.
     */
    public $fsType;

    /**
     * @var string $path required
     * The full path to the volume on the node. It can be either a directory or block device (disk, partition, ...).
     */
    public $path;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->path = isset($data['path']) ? $data['path'] : null;
    }
}
