<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;

/**
 * Represents a StorageOS persistent volume resource.
 */
class StorageOSVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public $fsType;

    /**
     * @var boolean $readOnly
     * Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var LocalObjectReference $secretRef
     * SecretRef specifies the secret to use for obtaining the StorageOS API credentials.  If not specified, default values will be attempted.
     */
    public $secretRef;

    /**
     * @var string $volumeName
     * VolumeName is the human-readable name of the StorageOS volume.  Volume names are only unique within a namespace.
     */
    public $volumeName;

    /**
     * @var string $volumeNamespace
     * VolumeNamespace specifies the scope of the volume within StorageOS.  If no namespace is specified then the Pod's namespace will be used.  This allows the Kubernetes name scoping to be mirrored within StorageOS for tighter integration. Set VolumeName to any name to override the default behaviour. Set to "default" if you are not using namespaces within StorageOS. Namespaces that do not pre-exist within StorageOS will be created.
     */
    public $volumeNamespace;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new LocalObjectReference($data['secretRef']);
        }
        $this->volumeName = isset($data['volumeName']) ? $data['volumeName'] : null;
        $this->volumeNamespace = isset($data['volumeNamespace']) ? $data['volumeNamespace'] : null;
    }
}
