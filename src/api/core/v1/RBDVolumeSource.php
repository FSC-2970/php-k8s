<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;

/**
 * Represents a Rados Block Device mount that lasts the lifetime of a pod. RBD volumes support ownership management and SELinux relabeling.
 */
class RBDVolumeSource extends \k8s\Resource
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
     * @var LocalObjectReference $secretRef
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
        $this->fsType = $data['fsType'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->keyring = $data['keyring'] ?? null;
        $this->monitors = $data['monitors'] ?? [];
        $this->pool = $data['pool'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new LocalObjectReference($data['secretRef']);
        }
        $this->user = $data['user'] ?? null;
    }
}
