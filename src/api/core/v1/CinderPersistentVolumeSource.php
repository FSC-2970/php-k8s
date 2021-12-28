<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\SecretReference;

/**
 * Represents a cinder volume resource in Openstack. A Cinder volume must exist before mounting to a container. The volume must also be in the same region as the kubelet. Cinder volumes support ownership management and SELinux relabeling.
 */
class CinderPersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: https:\/\/examples.k8s.io\/mysql-cinder-pd\/README.md
     */
    public $fsType;

    /**
     * @var boolean $readOnly
     * Optional: Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. More info: https:\/\/examples.k8s.io\/mysql-cinder-pd\/README.md
     */
    public $readOnly;

    /**
     * @var SecretReference $secretRef
     * Optional: points to a secret object containing parameters used to connect to OpenStack.
     */
    public $secretRef;

    /**
     * @var string $volumeID required
     * volume id used to identify the volume in cinder. More info: https:\/\/examples.k8s.io\/mysql-cinder-pd\/README.md
     */
    public $volumeID;

    public function __construct($data)
    {
        $this->fsType = $data['fsType'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new SecretReference($data['secretRef']);
        }
        $this->volumeID = $data['volumeID'] ?? null;
    }
}
