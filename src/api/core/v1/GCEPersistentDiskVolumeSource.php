<?php

namespace k8s\api\core\v1;

/**
 * Represents a Persistent Disk resource in Google Compute Engine.
 * 
 * A GCE PD must exist before mounting to a container. The disk must also be in the same GCE project and zone as the kubelet. A GCE PD can only be mounted as read\/write once or read-only many times. GCE PDs support ownership management and SELinux relabeling.
 */
class GCEPersistentDiskVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $fsType;

    /**
     * @var integer $partition
     * The partition in the volume that you want to mount. If omitted, the default is to mount by volume name. Examples: For volume \/dev\/sda1, you specify the partition as "1". Similarly, the volume partition for \/dev\/sda is "0" (or you can leave the property empty). More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $partition;

    /**
     * @var string $pdName required
     * Unique name of the PD resource in GCE. Used to identify the disk in GCE. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $pdName;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $readOnly;

    public function __construct($data)
    {
        $this->fsType = $data['fsType'] ?? null;
        $this->partition = $data['partition'] ?? null;
        $this->pdName = $data['pdName'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
    }
}
