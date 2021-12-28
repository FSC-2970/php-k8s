<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;

/**
 * Represents a source location of a volume to mount, managed by an external CSI driver
 */
class CSIVolumeSource extends \k8s\Resource
{
    /**
     * @var string $driver required
     * Driver is the name of the CSI driver that handles this volume. Consult with your admin for the correct name as registered in the cluster.
     */
    public $driver;

    /**
     * @var string $fsType
     * Filesystem type to mount. Ex. "ext4", "xfs", "ntfs". If not provided, the empty value is passed to the associated CSI driver which will determine the default filesystem to apply.
     */
    public $fsType;

    /**
     * @var LocalObjectReference $nodePublishSecretRef
     * NodePublishSecretRef is a reference to the secret object containing sensitive information to pass to the CSI driver to complete the CSI NodePublishVolume and NodeUnpublishVolume calls. This field is optional, and  may be empty if no secret is required. If the secret object contains more than one secret, all secret references are passed.
     */
    public $nodePublishSecretRef;

    /**
     * @var boolean $readOnly
     * Specifies a read-only configuration for the volume. Defaults to false (read\/write).
     */
    public $readOnly;

    /**
     * @var object $volumeAttributes
     * VolumeAttributes stores driver-specific properties that are passed to the CSI driver. Consult your driver's documentation for supported values.
     */
    public $volumeAttributes;

    public function __construct($data)
    {
        $this->driver = $data['driver'] ?? null;
        $this->fsType = $data['fsType'] ?? null;
        if (isset($data['nodePublishSecretRef'])) {
            $this->nodePublishSecretRef = new LocalObjectReference($data['nodePublishSecretRef']);
        }
        $this->readOnly = $data['readOnly'] ?? null;
        $this->volumeAttributes = $data['volumeAttributes'] ?? null;
    }
}
