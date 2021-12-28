<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\AWSElasticBlockStoreVolumeSource;
use k8s\api\core\v1\AzureDiskVolumeSource;
use k8s\api\core\v1\AzureFilePersistentVolumeSource;
use k8s\api\core\v1\CephFSPersistentVolumeSource;
use k8s\api\core\v1\CinderPersistentVolumeSource;
use k8s\api\core\v1\ObjectReference;
use k8s\api\core\v1\CSIPersistentVolumeSource;
use k8s\api\core\v1\FCVolumeSource;
use k8s\api\core\v1\FlexPersistentVolumeSource;
use k8s\api\core\v1\FlockerVolumeSource;
use k8s\api\core\v1\GCEPersistentDiskVolumeSource;
use k8s\api\core\v1\GlusterfsPersistentVolumeSource;
use k8s\api\core\v1\HostPathVolumeSource;
use k8s\api\core\v1\ISCSIPersistentVolumeSource;
use k8s\api\core\v1\LocalVolumeSource;
use k8s\api\core\v1\NFSVolumeSource;
use k8s\api\core\v1\VolumeNodeAffinity;
use k8s\api\core\v1\PhotonPersistentDiskVolumeSource;
use k8s\api\core\v1\PortworxVolumeSource;
use k8s\api\core\v1\QuobyteVolumeSource;
use k8s\api\core\v1\RBDPersistentVolumeSource;
use k8s\api\core\v1\ScaleIOPersistentVolumeSource;
use k8s\api\core\v1\StorageOSPersistentVolumeSource;
use k8s\api\core\v1\VsphereVirtualDiskVolumeSource;

/**
 * PersistentVolumeSpec is the specification of a persistent volume.
 */
class PersistentVolumeSpec extends \k8s\Resource
{
    /**
     * @var string $accessModes
     * AccessModes contains all ways the volume can be mounted. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#access-modes
     */
    public $accessModes;

    /**
     * @var AWSElasticBlockStoreVolumeSource $awsElasticBlockStore
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to a kubelet's host machine and then exposed to the pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#awselasticblockstore
     */
    public $awsElasticBlockStore;

    /**
     * @var AzureDiskVolumeSource $azureDisk
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
     */
    public $azureDisk;

    /**
     * @var AzureFilePersistentVolumeSource $azureFile
     * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
     */
    public $azureFile;

    /**
     * @var object $capacity
     * A description of the persistent volume's resources and capacity. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#capacity
     */
    public $capacity;

    /**
     * @var CephFSPersistentVolumeSource $cephfs
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     */
    public $cephfs;

    /**
     * @var CinderPersistentVolumeSource $cinder
     * Cinder represents a cinder volume attached and mounted on kubelets host machine. More info: https:\/\/examples.k8s.io\/mysql-cinder-pd\/README.md
     */
    public $cinder;

    /**
     * @var ObjectReference $claimRef
     * ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim. Expected to be non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#binding
     */
    public $claimRef;

    /**
     * @var CSIPersistentVolumeSource $csi
     * CSI represents storage that is handled by an external CSI driver (Beta feature).
     */
    public $csi;

    /**
     * @var FCVolumeSource $fc
     * FC represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed to the pod.
     */
    public $fc;

    /**
     * @var FlexPersistentVolumeSource $flexVolume
     * FlexVolume represents a generic volume resource that is provisioned\/attached using an exec based plugin.
     */
    public $flexVolume;

    /**
     * @var FlockerVolumeSource $flocker
     * Flocker represents a Flocker volume attached to a kubelet's host machine and exposed to the pod for its usage. This depends on the Flocker control service being running
     */
    public $flocker;

    /**
     * @var GCEPersistentDiskVolumeSource $gcePersistentDisk
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and then exposed to the pod. Provisioned by an admin. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $gcePersistentDisk;

    /**
     * @var GlusterfsPersistentVolumeSource $glusterfs
     * Glusterfs represents a Glusterfs volume that is attached to a host and exposed to the pod. Provisioned by an admin. More info: https:\/\/examples.k8s.io\/volumes\/glusterfs\/README.md
     */
    public $glusterfs;

    /**
     * @var HostPathVolumeSource $hostPath
     * HostPath represents a directory on the host. Provisioned by a developer or tester. This is useful for single-node development and testing only! On-host storage is not supported in any way and WILL NOT WORK in a multi-node cluster. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#hostpath
     */
    public $hostPath;

    /**
     * @var ISCSIPersistentVolumeSource $iscsi
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host machine and then exposed to the pod. Provisioned by an admin.
     */
    public $iscsi;

    /**
     * @var LocalVolumeSource $local
     * Local represents directly-attached storage with node affinity
     */
    public $local;

    /**
     * @var string $mountOptions
     * A list of mount options, e.g. ["ro", "soft"]. Not validated - mount will simply fail if one is invalid. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes\/#mount-options
     */
    public $mountOptions;

    /**
     * @var NFSVolumeSource $nfs
     * NFS represents an NFS mount on the host. Provisioned by an admin. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#nfs
     */
    public $nfs;

    /**
     * @var VolumeNodeAffinity $nodeAffinity
     * NodeAffinity defines constraints that limit what nodes this volume can be accessed from. This field influences the scheduling of pods that use this volume.
     */
    public $nodeAffinity;

    /**
     * @var string $persistentVolumeReclaimPolicy
     * What happens to a persistent volume when released from its claim. Valid options are Retain (default for manually created PersistentVolumes), Delete (default for dynamically provisioned PersistentVolumes), and Recycle (deprecated). Recycle must be supported by the volume plugin underlying this PersistentVolume. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#reclaiming
     */
    public $persistentVolumeReclaimPolicy;

    /**
     * @var PhotonPersistentDiskVolumeSource $photonPersistentDisk
     * PhotonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets host machine
     */
    public $photonPersistentDisk;

    /**
     * @var PortworxVolumeSource $portworxVolume
     * PortworxVolume represents a portworx volume attached and mounted on kubelets host machine
     */
    public $portworxVolume;

    /**
     * @var QuobyteVolumeSource $quobyte
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     */
    public $quobyte;

    /**
     * @var RBDPersistentVolumeSource $rbd
     * RBD represents a Rados Block Device mount on the host that shares a pod's lifetime. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md
     */
    public $rbd;

    /**
     * @var ScaleIOPersistentVolumeSource $scaleIO
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     */
    public $scaleIO;

    /**
     * @var string $storageClassName
     * Name of StorageClass to which this persistent volume belongs. Empty value means that this volume does not belong to any StorageClass.
     */
    public $storageClassName;

    /**
     * @var StorageOSPersistentVolumeSource $storageos
     * StorageOS represents a StorageOS volume that is attached to the kubelet's host machine and mounted into the pod More info: https:\/\/examples.k8s.io\/volumes\/storageos\/README.md
     */
    public $storageos;

    /**
     * @var string $volumeMode
     * volumeMode defines if a volume is intended to be used with a formatted filesystem or to remain in raw block state. Value of Filesystem is implied when not included in spec.
     */
    public $volumeMode;

    /**
     * @var VsphereVirtualDiskVolumeSource $vsphereVolume
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     */
    public $vsphereVolume;

    public function __construct($data)
    {
        $this->accessModes = $data['accessModes'] ?? [];
        if (isset($data['awsElasticBlockStore'])) {
            $this->awsElasticBlockStore = new AWSElasticBlockStoreVolumeSource($data['awsElasticBlockStore']);
        }
        if (isset($data['azureDisk'])) {
            $this->azureDisk = new AzureDiskVolumeSource($data['azureDisk']);
        }
        if (isset($data['azureFile'])) {
            $this->azureFile = new AzureFilePersistentVolumeSource($data['azureFile']);
        }
        $this->capacity = $data['capacity'] ?? null;
        if (isset($data['cephfs'])) {
            $this->cephfs = new CephFSPersistentVolumeSource($data['cephfs']);
        }
        if (isset($data['cinder'])) {
            $this->cinder = new CinderPersistentVolumeSource($data['cinder']);
        }
        if (isset($data['claimRef'])) {
            $this->claimRef = new ObjectReference($data['claimRef']);
        }
        if (isset($data['csi'])) {
            $this->csi = new CSIPersistentVolumeSource($data['csi']);
        }
        if (isset($data['fc'])) {
            $this->fc = new FCVolumeSource($data['fc']);
        }
        if (isset($data['flexVolume'])) {
            $this->flexVolume = new FlexPersistentVolumeSource($data['flexVolume']);
        }
        if (isset($data['flocker'])) {
            $this->flocker = new FlockerVolumeSource($data['flocker']);
        }
        if (isset($data['gcePersistentDisk'])) {
            $this->gcePersistentDisk = new GCEPersistentDiskVolumeSource($data['gcePersistentDisk']);
        }
        if (isset($data['glusterfs'])) {
            $this->glusterfs = new GlusterfsPersistentVolumeSource($data['glusterfs']);
        }
        if (isset($data['hostPath'])) {
            $this->hostPath = new HostPathVolumeSource($data['hostPath']);
        }
        if (isset($data['iscsi'])) {
            $this->iscsi = new ISCSIPersistentVolumeSource($data['iscsi']);
        }
        if (isset($data['local'])) {
            $this->local = new LocalVolumeSource($data['local']);
        }
        $this->mountOptions = $data['mountOptions'] ?? [];
        if (isset($data['nfs'])) {
            $this->nfs = new NFSVolumeSource($data['nfs']);
        }
        if (isset($data['nodeAffinity'])) {
            $this->nodeAffinity = new VolumeNodeAffinity($data['nodeAffinity']);
        }
        $this->persistentVolumeReclaimPolicy = $data['persistentVolumeReclaimPolicy'] ?? null;
        if (isset($data['photonPersistentDisk'])) {
            $this->photonPersistentDisk = new PhotonPersistentDiskVolumeSource($data['photonPersistentDisk']);
        }
        if (isset($data['portworxVolume'])) {
            $this->portworxVolume = new PortworxVolumeSource($data['portworxVolume']);
        }
        if (isset($data['quobyte'])) {
            $this->quobyte = new QuobyteVolumeSource($data['quobyte']);
        }
        if (isset($data['rbd'])) {
            $this->rbd = new RBDPersistentVolumeSource($data['rbd']);
        }
        if (isset($data['scaleIO'])) {
            $this->scaleIO = new ScaleIOPersistentVolumeSource($data['scaleIO']);
        }
        $this->storageClassName = $data['storageClassName'] ?? null;
        if (isset($data['storageos'])) {
            $this->storageos = new StorageOSPersistentVolumeSource($data['storageos']);
        }
        $this->volumeMode = $data['volumeMode'] ?? null;
        if (isset($data['vsphereVolume'])) {
            $this->vsphereVolume = new VsphereVirtualDiskVolumeSource($data['vsphereVolume']);
        }
    }
}
