<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\SecretReference;

/**
 * ISCSIPersistentVolumeSource represents an ISCSI disk. ISCSI volumes can only be mounted as read\/write once. ISCSI volumes support ownership management and SELinux relabeling.
 */
class ISCSIPersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var boolean $chapAuthDiscovery
     * whether support iSCSI Discovery CHAP authentication
     */
    public $chapAuthDiscovery;

    /**
     * @var boolean $chapAuthSession
     * whether support iSCSI Session CHAP authentication
     */
    public $chapAuthSession;

    /**
     * @var string $fsType
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#iscsi
     */
    public $fsType;

    /**
     * @var string $initiatorName
     * Custom iSCSI Initiator Name. If initiatorName is specified with iscsiInterface simultaneously, new iSCSI interface <target portal>:<volume name> will be created for the connection.
     */
    public $initiatorName;

    /**
     * @var string $iqn required
     * Target iSCSI Qualified Name.
     */
    public $iqn;

    /**
     * @var string $iscsiInterface
     * iSCSI Interface Name that uses an iSCSI transport. Defaults to 'default' (tcp).
     */
    public $iscsiInterface;

    /**
     * @var integer $lun required
     * iSCSI Target Lun number.
     */
    public $lun;

    /**
     * @var string $portals
     * iSCSI Target Portal List. The Portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260).
     */
    public $portals;

    /**
     * @var boolean $readOnly
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     */
    public $readOnly;

    /**
     * @var SecretReference $secretRef
     * CHAP Secret for iSCSI target and initiator authentication
     */
    public $secretRef;

    /**
     * @var string $targetPortal required
     * iSCSI Target Portal. The Portal is either an IP or ip_addr:port if the port is other than default (typically TCP ports 860 and 3260).
     */
    public $targetPortal;

    public function __construct($data)
    {
        $this->chapAuthDiscovery = isset($data['chapAuthDiscovery']) ? $data['chapAuthDiscovery'] : null;
        $this->chapAuthSession = isset($data['chapAuthSession']) ? $data['chapAuthSession'] : null;
        $this->fsType = isset($data['fsType']) ? $data['fsType'] : null;
        $this->initiatorName = isset($data['initiatorName']) ? $data['initiatorName'] : null;
        $this->iqn = isset($data['iqn']) ? $data['iqn'] : null;
        $this->iscsiInterface = isset($data['iscsiInterface']) ? $data['iscsiInterface'] : null;
        $this->lun = isset($data['lun']) ? $data['lun'] : null;
        $this->portals = isset($data['portals']) ? $data['portals'] : [];
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        if (isset($data['secretRef'])) {
            $this->secretRef = new SecretReference($data['secretRef']);
        }
        $this->targetPortal = isset($data['targetPortal']) ? $data['targetPortal'] : null;
    }
}
