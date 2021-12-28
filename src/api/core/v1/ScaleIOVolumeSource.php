<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\LocalObjectReference;

/**
 * ScaleIOVolumeSource represents a persistent ScaleIO volume
 */
class ScaleIOVolumeSource extends \k8s\Resource
{
    /**
     * @var string $fsType
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex. "ext4", "xfs", "ntfs". Default is "xfs".
     */
    public $fsType;

    /**
     * @var string $gateway required
     * The host address of the ScaleIO API Gateway.
     */
    public $gateway;

    /**
     * @var string $protectionDomain
     * The name of the ScaleIO Protection Domain for the configured storage.
     */
    public $protectionDomain;

    /**
     * @var boolean $readOnly
     * Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var LocalObjectReference $secretRef
     * SecretRef references to the secret for ScaleIO user and other sensitive information. If this is not provided, Login operation will fail.
     */
    public $secretRef;

    /**
     * @var boolean $sslEnabled
     * Flag to enable\/disable SSL communication with Gateway, default false
     */
    public $sslEnabled;

    /**
     * @var string $storageMode
     * Indicates whether the storage for a volume should be ThickProvisioned or ThinProvisioned. Default is ThinProvisioned.
     */
    public $storageMode;

    /**
     * @var string $storagePool
     * The ScaleIO Storage Pool associated with the protection domain.
     */
    public $storagePool;

    /**
     * @var string $system required
     * The name of the storage system as configured in ScaleIO.
     */
    public $system;

    /**
     * @var string $volumeName
     * The name of a volume already created in the ScaleIO system that is associated with this volume source.
     */
    public $volumeName;

    public function __construct($data)
    {
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->gateway = isset($data['gateway']) ? $data['gateway'] : null;
        $this->protectionDomain = isset($data['protectionDomain']) ? $data['protectionDomain'] : null;
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new LocalObjectReference($data['secretRef']);
        }
        $this->sslEnabled = isset($data['sslEnabled']) ? $data['sslEnabled'] : null;
        $this->storageMode = isset($data['storageMode']) ? $data['storageMode'] : null;
        $this->storagePool = isset($data['storagePool']) ? $data['storagePool'] : null;
        $this->system = isset($data['system']) ? $data['system'] : null;
        $this->volumeName = isset($data['volumeName']) ? $data['volumeName'] : null;
    }
}
