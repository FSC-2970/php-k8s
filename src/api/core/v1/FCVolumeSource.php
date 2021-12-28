<?php

namespace k8s\api\core\v1;

/**
 * Represents a Fibre Channel volume. Fibre Channel volumes can only be mounted as read\/write once. Fibre Channel volumes support ownership management and SELinux relabeling.
 */
class FCVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var integer $lun
     * Optional: FC target lun number
     */
    public $lun;

    /**
     * @var boolean $readOnly
     * Optional: Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var string $targetWWNs
     * Optional: FC target worldwide names (WWNs)
     */
    public $targetWWNs;

    /**
     * @var string $wwids
     * Optional: FC volume world wide identifiers (wwids) Either wwids or combination of targetWWNs and lun must be set, but not both simultaneously.
     */
    public $wwids;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->lun = isset($data['lun']) ? $data['lun'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->targetWWNs = isset($data['targetWWNs']) ? $data['targetWWNs'] : [];
        $this->wwids = isset($data['wwids']) ? $data['wwids'] : [];
    }
}
