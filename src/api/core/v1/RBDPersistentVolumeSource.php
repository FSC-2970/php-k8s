<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\SecretReference;

/**
 * Represents a Rados Block Device mount that lasts the lifetime of a pod. RBD volumes support ownership management and SELinux relabeling.
 */
class RBDPersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#rbd
     */
    public $fsType;

    /**
     * @var string $image required
     * The rados image name. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $image;

    /**
     * @var string $keyring
     * Keyring is the path to key ring for RBDUser. Default is \/etc\/ceph\/keyring. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $keyring;

    /**
     * @var string $monitors required
     * A collection of Ceph monitors. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $monitors;

    /**
     * @var string $pool
     * The rados pool name. Default is rbd. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $pool;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $readOnly;

    /**
     * @var SecretReference $secretRef
     * SecretRef is name of the authentication secret for RBDUser. If provided overrides keyring. Default is nil. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $secretRef;

    /**
     * @var string $user
     * The rados user name. Default is admin. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md#how-to-use-it
     */
    public $user;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->image = isset($data['image']) ? $data['image'] : null;
        $this->keyring = isset($data['keyring']) ? $data['keyring'] : null;
        $this->monitors = isset($data['monitors']) ? $data['monitors'] : [];
        $this->pool = isset($data['pool']) ? $data['pool'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new SecretReference($data['secretRef']);
        }
        $this->user = isset($data['user']) ? $data['user'] : null;
    }
}
