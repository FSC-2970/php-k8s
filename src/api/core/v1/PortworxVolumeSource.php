<?php

namespace k8s\api\core\v1;

/**
 * PortworxVolumeSource represents a Portworx volume resource.
 */
class PortworxVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * FSType represents the filesystem type to mount Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var boolean $readOnly
     * Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var string $volumeID required
     * VolumeID uniquely identifies a Portworx volume
     */
    public $volumeID;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->volumeID = isset($data['volumeID']) ? $data['volumeID'] : null;
    }
}
