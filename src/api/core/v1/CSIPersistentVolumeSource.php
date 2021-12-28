<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\SecretReference;

/**
 * Represents storage that is managed by an external CSI volume driver (Beta feature)
 */
class CSIPersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var SecretReference $controllerExpandSecretRef
     * ControllerExpandSecretRef is a reference to the secret object containing sensitive information to pass to the CSI driver to complete the CSI ControllerExpandVolume call. This is an alpha field and requires enabling ExpandCSIVolumes feature gate. This field is optional, and may be empty if no secret is required. If the secret object contains more than one secret, all secrets are passed.
     */
    public $controllerExpandSecretRef;

    /**
     * @var SecretReference $controllerPublishSecretRef
     * ControllerPublishSecretRef is a reference to the secret object containing sensitive information to pass to the CSI driver to complete the CSI ControllerPublishVolume and ControllerUnpublishVolume calls. This field is optional, and may be empty if no secret is required. If the secret object contains more than one secret, all secrets are passed.
     */
    public $controllerPublishSecretRef;

    /**
     * @var string $driver required
     * Driver is the name of the driver to use for this volume. Required.
     */
    public $driver;

    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs".
     */
    public $fsType;

    /**
     * @var SecretReference $nodePublishSecretRef
     * NodePublishSecretRef is a reference to the secret object containing sensitive information to pass to the CSI driver to complete the CSI NodePublishVolume and NodeUnpublishVolume calls. This field is optional, and may be empty if no secret is required. If the secret object contains more than one secret, all secrets are passed.
     */
    public $nodePublishSecretRef;

    /**
     * @var SecretReference $nodeStageSecretRef
     * NodeStageSecretRef is a reference to the secret object containing sensitive information to pass to the CSI driver to complete the CSI NodeStageVolume and NodeStageVolume and NodeUnstageVolume calls. This field is optional, and may be empty if no secret is required. If the secret object contains more than one secret, all secrets are passed.
     */
    public $nodeStageSecretRef;

    /**
     * @var boolean $readOnly
     * Optional: The value to pass to ControllerPublishVolumeRequest. Defaults to false (read\/write).
     */
    public $readOnly;

    /**
     * @var object $volumeAttributes
     * Attributes of the volume to publish.
     */
    public $volumeAttributes;

    /**
     * @var string $volumeHandle required
     * VolumeHandle is the unique volume name returned by the CSI volume plugin’s CreateVolume to refer to the volume on all subsequent calls. Required.
     */
    public $volumeHandle;

    public function __construct($data)
    {
        if (isset($data['controllerExpandSecretRef'])) {
            $this->controllerExpandSecretRef = new SecretReference($data['controllerExpandSecretRef']);
        }
        if (isset($data['controllerPublishSecretRef'])) {
            $this->controllerPublishSecretRef = new SecretReference($data['controllerPublishSecretRef']);
        }
        $this->driver = $data['driver'] ?? null;
        $this->fsType = $data['fsType'] ?? null;
        if (isset($data['nodePublishSecretRef'])) {
            $this->nodePublishSecretRef = new SecretReference($data['nodePublishSecretRef']);
        }
        if (isset($data['nodeStageSecretRef'])) {
            $this->nodeStageSecretRef = new SecretReference($data['nodeStageSecretRef']);
        }
        $this->readOnly = $data['readOnly'] ?? null;
        $this->volumeAttributes = $data['volumeAttributes'] ?? null;
        $this->volumeHandle = $data['volumeHandle'] ?? null;
    }
}
