<?php

namespace k8s\api\core\v1;

/**
 * Represents a Photon Controller persistent disk resource.
 */
class PhotonPersistentDiskVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var string $pdID required
     * ID that identifies Photon Controller persistent disk
     */
    public $pdID;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->pdID = isset($data['pdID']) ? $data['pdID'] : null;
    }
}
