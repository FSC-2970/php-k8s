<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\SecretReference;

/**
 * Represents a Ceph Filesystem mount that lasts the lifetime of a pod Cephfs volumes do not support ownership management or SELinux relabeling.
 */
class CephFSPersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var string $monitors required
     * Required: Monitors is a collection of Ceph monitors More info: https:\/\/examples.k8s.io\/volumes\/cephfs\/README.md#how-to-use-it
     */
    public $monitors;

    /**
     * @var string $path
     * Optional: Used as the mounted root, rather than the full Ceph tree, default is \/
     */
    public $path;

    /**
     * @var boolean $readOnly
     * Optional: Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts. More info: https:\/\/examples.k8s.io\/volumes\/cephfs\/README.md#how-to-use-it
     */
    public $readOnly;

    /**
     * @var string $secretFile
     * Optional: SecretFile is the path to key ring for User, default is \/etc\/ceph\/user.secret More info: https:\/\/examples.k8s.io\/volumes\/cephfs\/README.md#how-to-use-it
     */
    public $secretFile;

    /**
     * @var SecretReference $secretRef
     * Optional: SecretRef is reference to the authentication secret for User, default is empty. More info: https:\/\/examples.k8s.io\/volumes\/cephfs\/README.md#how-to-use-it
     */
    public $secretRef;

    /**
     * @var string $user
     * Optional: User is the rados user name, default is admin More info: https:\/\/examples.k8s.io\/volumes\/cephfs\/README.md#how-to-use-it
     */
    public $user;

    public function __construct($data)
    {
        $this->monitors = $data['monitors'] ?? [];
        $this->path = $data['path'] ?? null;
        $this->readOnly = $data['readOnly'] ?? null;
        $this->secretFile = $data['secretFile'] ?? null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new SecretReference($data['secretRef']);
        }
        $this->user = $data['user'] ?? null;
    }
}
