<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;

/**
 * FlexVolume represents a generic volume resource that is provisioned\/attached using an exec based plugin.
 */
class FlexVolumeSource extends \k8s\Resource
{
    /**
     * @var string $driver required
     * Driver is the name of the driver to use for this volume.
     */
    public $driver;

    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". The default filesystem depends on FlexVolume script.
     */
    public $fsType;

    /**
     * @var object $options
     * Optional: Extra command options if any.
     */
    public $options;

    /**
     * @var boolean $readOnly
     * Optional: Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var LocalObjectReference $secretRef
     * Optional: SecretRef is reference to the secret object containing sensitive information to pass to the plugin scripts. This may be empty if no secret object is specified. If the secret object contains more than one secret, all secrets are passed to the plugin scripts.
     */
    public $secretRef;

    public function __construct($data)
    {
        $this->driver = isset($data['driver']) ? $data['driver'] : null;
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->options = isset($data['options']) ? $data['options'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new LocalObjectReference($data['secretRef']);
        }
    }
}
