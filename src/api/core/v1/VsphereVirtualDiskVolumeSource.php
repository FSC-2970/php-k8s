<?php

namespace k8s\api\core\v1;

/**
 * Represents a vSphere volume resource.
 */
class VsphereVirtualDiskVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var string $storagePolicyID
     * Storage Policy Based Management (SPBM) profile ID associated with the StoragePolicyName.
     */
    public $storagePolicyID;

    /**
     * @var string $storagePolicyName
     * Storage Policy Based Management (SPBM) profile name.
     */
    public $storagePolicyName;

    /**
     * @var string $volumePath required
     * Path that identifies vSphere volume vmdk
     */
    public $volumePath;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->storagePolicyID = isset($data['storagePolicyID']) ? $data['storagePolicyID'] : null;
        $this->storagePolicyName = isset($data['storagePolicyName']) ? $data['storagePolicyName'] : null;
        $this->volumePath = isset($data['volumePath']) ? $data['volumePath'] : null;
    }
}
