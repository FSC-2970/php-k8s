<?php

namespace k8s\api\core\v1;

/**
 * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
 */
class AzureDiskVolumeSource extends \k8s\Resource
{
    /**
     * @var string $cachingMode
     * Host Caching mode: None, Read Only, Read Write.
     */
    public $cachingMode;

    /**
     * @var string $diskName required
     * The Name of the data disk in the blob storage
     */
    public $diskName;

    /**
     * @var string $diskURI required
     * The URI the data disk in the blob storage
     */
    public $diskURI;

    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var string $kind
     * Expected values Shared: multiple blob disks per storage account  Dedicated: single blob disk per storage account  Managed: azure managed data disk (only in managed availability set). defaults to shared
     */
    public $kind;

    /**
     * @var boolean $readOnly
     * Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    public function __construct($data)
    {
        $this->cachingMode = $data['cachingMode'] ?? null;
        $this->diskName = $data['diskName'] ?? null;
        $this->diskURI = $data['diskURI'] ?? null;
        $this->fsType = $data['fsType'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
    }
}
