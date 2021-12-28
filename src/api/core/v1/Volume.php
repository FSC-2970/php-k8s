<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\AWSElasticBlockStoreVolumeSource;
use k8s\api\core\v1\AzureDiskVolumeSource;
use k8s\api\core\v1\AzureFileVolumeSource;
use k8s\api\core\v1\CephFSVolumeSource;
use k8s\api\core\v1\CinderVolumeSource;
use k8s\api\core\v1\ConfigMapVolumeSource;
use k8s\api\core\v1\CSIVolumeSource;
use k8s\api\core\v1\DownwardAPIVolumeSource;
use k8s\api\core\v1\EmptyDirVolumeSource;
use k8s\api\core\v1\EphemeralVolumeSource;
use k8s\api\core\v1\FCVolumeSource;
use k8s\api\core\v1\FlexVolumeSource;
use k8s\api\core\v1\FlockerVolumeSource;
use k8s\api\core\v1\GCEPersistentDiskVolumeSource;
use k8s\api\core\v1\GitRepoVolumeSource;
use k8s\api\core\v1\GlusterfsVolumeSource;
use k8s\api\core\v1\HostPathVolumeSource;
use k8s\api\core\v1\ISCSIVolumeSource;
use k8s\api\core\v1\NFSVolumeSource;
use k8s\api\core\v1\PersistentVolumeClaimVolumeSource;
use k8s\api\core\v1\PhotonPersistentDiskVolumeSource;
use k8s\api\core\v1\PortworxVolumeSource;
use k8s\api\core\v1\ProjectedVolumeSource;
use k8s\api\core\v1\QuobyteVolumeSource;
use k8s\api\core\v1\RBDVolumeSource;
use k8s\api\core\v1\ScaleIOVolumeSource;
use k8s\api\core\v1\SecretVolumeSource;
use k8s\api\core\v1\StorageOSVolumeSource;
use k8s\api\core\v1\VsphereVirtualDiskVolumeSource;

/**
 * Volume represents a named volume in a pod that may be accessed by any container in the pod.
 */
class Volume extends \k8s\Resource
{
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
     * @var AzureFileVolumeSource $azureFile
     * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
     */
    public $azureFile;

    /**
     * @var CephFSVolumeSource $cephfs
     * CephFS represents a Ceph FS mount on the host that shares a pod's lifetime
     */
    public $cephfs;

    /**
     * @var CinderVolumeSource $cinder
     * Cinder represents a cinder volume attached and mounted on kubelets host machine. More info: https:\/\/examples.k8s.io\/mysql-cinder-pd\/README.md
     */
    public $cinder;

    /**
     * @var ConfigMapVolumeSource $configMap
     * ConfigMap represents a configMap that should populate this volume
     */
    public $configMap;

    /**
     * @var CSIVolumeSource $csi
     * CSI (Container Storage Interface) represents ephemeral storage that is handled by certain external CSI drivers (Beta feature).
     */
    public $csi;

    /**
     * @var DownwardAPIVolumeSource $downwardAPI
     * DownwardAPI represents downward API about the pod that should populate this volume
     */
    public $downwardAPI;

    /**
     * @var EmptyDirVolumeSource $emptyDir
     * EmptyDir represents a temporary directory that shares a pod's lifetime. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#emptydir
     */
    public $emptyDir;

    /**
     * @var EphemeralVolumeSource $ephemeral
     * Ephemeral represents a volume that is handled by a cluster storage driver. The volume's lifecycle is tied to the pod that defines it - it will be created before the pod starts, and deleted when the pod is removed.
     * 
     * Use this if: a) the volume is only needed while the pod runs, b) features of normal volumes like restoring from snapshot or capacity
     *    tracking are needed,
     * c) the storage driver is specified through a storage class, and d) the storage driver supports dynamic volume provisioning through
     *    a PersistentVolumeClaim (see EphemeralVolumeSource for more
     *    information on the connection between this volume type
     *    and PersistentVolumeClaim).
     * 
     * Use PersistentVolumeClaim or one of the vendor-specific APIs for volumes that persist for longer than the lifecycle of an individual pod.
     * 
     * Use CSI for light-weight local ephemeral volumes if the CSI driver is meant to be used that way - see the documentation of the driver for more information.
     * 
     * A pod can use both types of ephemeral volumes and persistent volumes at the same time.
     * 
     * This is a beta feature and only available when the GenericEphemeralVolume feature gate is enabled.
     */
    public $ephemeral;

    /**
     * @var FCVolumeSource $fc
     * FC represents a Fibre Channel resource that is attached to a kubelet's host machine and then exposed to the pod.
     */
    public $fc;

    /**
     * @var FlexVolumeSource $flexVolume
     * FlexVolume represents a generic volume resource that is provisioned\/attached using an exec based plugin.
     */
    public $flexVolume;

    /**
     * @var FlockerVolumeSource $flocker
     * Flocker represents a Flocker volume attached to a kubelet's host machine. This depends on the Flocker control service being running
     */
    public $flocker;

    /**
     * @var GCEPersistentDiskVolumeSource $gcePersistentDisk
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet's host machine and then exposed to the pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#gcepersistentdisk
     */
    public $gcePersistentDisk;

    /**
     * @var GitRepoVolumeSource $gitRepo
     * GitRepo represents a git repository at a particular revision. DEPRECATED: GitRepo is deprecated. To provision a container with a git repo, mount an EmptyDir into an InitContainer that clones the repo using git, then mount the EmptyDir into the Pod's container.
     */
    public $gitRepo;

    /**
     * @var GlusterfsVolumeSource $glusterfs
     * Glusterfs represents a Glusterfs mount on the host that shares a pod's lifetime. More info: https:\/\/examples.k8s.io\/volumes\/glusterfs\/README.md
     */
    public $glusterfs;

    /**
     * @var HostPathVolumeSource $hostPath
     * HostPath represents a pre-existing file or directory on the host machine that is directly exposed to the container. This is generally used for system agents or other privileged things that are allowed to see the host machine. Most containers will NOT need this. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#hostpath
     */
    public $hostPath;

    /**
     * @var ISCSIVolumeSource $iscsi
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's host machine and then exposed to the pod. More info: https:\/\/examples.k8s.io\/volumes\/iscsi\/README.md
     */
    public $iscsi;

    /**
     * @var string $name required
     * Volume's name. Must be a DNS_LABEL and unique within the pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#names
     */
    public $name;

    /**
     * @var NFSVolumeSource $nfs
     * NFS represents an NFS mount on the host that shares a pod's lifetime More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#nfs
     */
    public $nfs;

    /**
     * @var PersistentVolumeClaimVolumeSource $persistentVolumeClaim
     * PersistentVolumeClaimVolumeSource represents a reference to a PersistentVolumeClaim in the same namespace. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#persistentvolumeclaims
     */
    public $persistentVolumeClaim;

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
     * @var ProjectedVolumeSource $projected
     * Items for all in one resources secrets, configmaps, and downward API
     */
    public $projected;

    /**
     * @var QuobyteVolumeSource $quobyte
     * Quobyte represents a Quobyte mount on the host that shares a pod's lifetime
     */
    public $quobyte;

    /**
     * @var RBDVolumeSource $rbd
     * RBD represents a Rados Block Device mount on the host that shares a pod's lifetime. More info: https:\/\/examples.k8s.io\/volumes\/rbd\/README.md
     */
    public $rbd;

    /**
     * @var ScaleIOVolumeSource $scaleIO
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes.
     */
    public $scaleIO;

    /**
     * @var SecretVolumeSource $secret
     * Secret represents a secret that should populate this volume. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes#secret
     */
    public $secret;

    /**
     * @var StorageOSVolumeSource $storageos
     * StorageOS represents a StorageOS volume attached and mounted on Kubernetes nodes.
     */
    public $storageos;

    /**
     * @var VsphereVirtualDiskVolumeSource $vsphereVolume
     * VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine
     */
    public $vsphereVolume;

    public function __construct($data)
    {
        if (isset($data['awsElasticBlockStore'])) {
            $this->awsElasticBlockStore = new AWSElasticBlockStoreVolumeSource($data['awsElasticBlockStore']);
        }
        if (isset($data['azureDisk'])) {
            $this->azureDisk = new AzureDiskVolumeSource($data['azureDisk']);
        }
        if (isset($data['azureFile'])) {
            $this->azureFile = new AzureFileVolumeSource($data['azureFile']);
        }
        if (isset($data['cephfs'])) {
            $this->cephfs = new CephFSVolumeSource($data['cephfs']);
        }
        if (isset($data['cinder'])) {
            $this->cinder = new CinderVolumeSource($data['cinder']);
        }
        if (isset($data['configMap'])) {
            $this->configMap = new ConfigMapVolumeSource($data['configMap']);
        }
        if (isset($data['csi'])) {
            $this->csi = new CSIVolumeSource($data['csi']);
        }
        if (isset($data['downwardAPI'])) {
            $this->downwardAPI = new DownwardAPIVolumeSource($data['downwardAPI']);
        }
        if (isset($data['emptyDir'])) {
            $this->emptyDir = new EmptyDirVolumeSource($data['emptyDir']);
        }
        if (isset($data['ephemeral'])) {
            $this->ephemeral = new EphemeralVolumeSource($data['ephemeral']);
        }
        if (isset($data['fc'])) {
            $this->fc = new FCVolumeSource($data['fc']);
        }
        if (isset($data['flexVolume'])) {
            $this->flexVolume = new FlexVolumeSource($data['flexVolume']);
        }
        if (isset($data['flocker'])) {
            $this->flocker = new FlockerVolumeSource($data['flocker']);
        }
        if (isset($data['gcePersistentDisk'])) {
            $this->gcePersistentDisk = new GCEPersistentDiskVolumeSource($data['gcePersistentDisk']);
        }
        if (isset($data['gitRepo'])) {
            $this->gitRepo = new GitRepoVolumeSource($data['gitRepo']);
        }
        if (isset($data['glusterfs'])) {
            $this->glusterfs = new GlusterfsVolumeSource($data['glusterfs']);
        }
        if (isset($data['hostPath'])) {
            $this->hostPath = new HostPathVolumeSource($data['hostPath']);
        }
        if (isset($data['iscsi'])) {
            $this->iscsi = new ISCSIVolumeSource($data['iscsi']);
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
        if (isset($data['nfs'])) {
            $this->nfs = new NFSVolumeSource($data['nfs']);
        }
        if (isset($data['persistentVolumeClaim'])) {
            $this->persistentVolumeClaim = new PersistentVolumeClaimVolumeSource($data['persistentVolumeClaim']);
        }
        if (isset($data['photonPersistentDisk'])) {
            $this->photonPersistentDisk = new PhotonPersistentDiskVolumeSource($data['photonPersistentDisk']);
        }
        if (isset($data['portworxVolume'])) {
            $this->portworxVolume = new PortworxVolumeSource($data['portworxVolume']);
        }
        if (isset($data['projected'])) {
            $this->projected = new ProjectedVolumeSource($data['projected']);
        }
        if (isset($data['quobyte'])) {
            $this->quobyte = new QuobyteVolumeSource($data['quobyte']);
        }
        if (isset($data['rbd'])) {
            $this->rbd = new RBDVolumeSource($data['rbd']);
        }
        if (isset($data['scaleIO'])) {
            $this->scaleIO = new ScaleIOVolumeSource($data['scaleIO']);
        }
        if (isset($data['secret'])) {
            $this->secret = new SecretVolumeSource($data['secret']);
        }
        if (isset($data['storageos'])) {
            $this->storageos = new StorageOSVolumeSource($data['storageos']);
        }
        if (isset($data['vsphereVolume'])) {
            $this->vsphereVolume = new VsphereVirtualDiskVolumeSource($data['vsphereVolume']);
        }
    }
}
