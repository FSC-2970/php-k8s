<?php

namespace k8s\api\policy\v1beta1;

use k8s\api\policy\v1beta1\AllowedCSIDriver;
use k8s\api\policy\v1beta1\AllowedFlexVolume;
use k8s\api\policy\v1beta1\AllowedHostPath;
use k8s\api\policy\v1beta1\FSGroupStrategyOptions;
use k8s\api\policy\v1beta1\HostPortRange;
use k8s\api\policy\v1beta1\RunAsGroupStrategyOptions;
use k8s\api\policy\v1beta1\RunAsUserStrategyOptions;
use k8s\api\policy\v1beta1\RuntimeClassStrategyOptions;
use k8s\api\policy\v1beta1\SELinuxStrategyOptions;
use k8s\api\policy\v1beta1\SupplementalGroupsStrategyOptions;

/**
 * PodSecurityPolicySpec defines the policy enforced.
 */
class PodSecurityPolicySpec extends \k8s\Resource
{
    /**
     * @var boolean $allowPrivilegeEscalation
     * allowPrivilegeEscalation determines if a pod can request to allow privilege escalation. If unspecified, defaults to true.
     */
    public $allowPrivilegeEscalation;

    /**
     * @var AllowedCSIDriver[] $allowedCSIDrivers
     * AllowedCSIDrivers is an allowlist of inline CSI drivers that must be explicitly set to be embedded within a pod spec. An empty value indicates that any CSI driver can be used for inline ephemeral volumes. This is a beta field, and is only honored if the API server enables the CSIInlineVolume feature gate.
     */
    public $allowedCSIDrivers;

    /**
     * @var string $allowedCapabilities
     * allowedCapabilities is a list of capabilities that can be requested to add to the container. Capabilities in this field may be added at the pod author's discretion. You must not list a capability in both allowedCapabilities and requiredDropCapabilities.
     */
    public $allowedCapabilities;

    /**
     * @var AllowedFlexVolume[] $allowedFlexVolumes
     * allowedFlexVolumes is an allowlist of Flexvolumes.  Empty or nil indicates that all Flexvolumes may be used.  This parameter is effective only when the usage of the Flexvolumes is allowed in the "volumes" field.
     */
    public $allowedFlexVolumes;

    /**
     * @var AllowedHostPath[] $allowedHostPaths
     * allowedHostPaths is an allowlist of host paths. Empty indicates that all host paths may be used.
     */
    public $allowedHostPaths;

    /**
     * @var string $allowedProcMountTypes
     * AllowedProcMountTypes is an allowlist of allowed ProcMountTypes. Empty or nil indicates that only the DefaultProcMountType may be used. This requires the ProcMountType feature flag to be enabled.
     */
    public $allowedProcMountTypes;

    /**
     * @var string $allowedUnsafeSysctls
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls, defaults to none. Each entry is either a plain sysctl name or ends in "*" in which case it is considered as a prefix of allowed sysctls. Single * means all unsafe sysctls are allowed. Kubelet has to allowlist all allowed unsafe sysctls explicitly to avoid rejection.
     * 
     * Examples: e.g. "foo\/*" allows "foo\/bar", "foo\/baz", etc. e.g. "foo.*" allows "foo.bar", "foo.baz", etc.
     */
    public $allowedUnsafeSysctls;

    /**
     * @var string $defaultAddCapabilities
     * defaultAddCapabilities is the default set of capabilities that will be added to the container unless the pod spec specifically drops the capability.  You may not list a capability in both defaultAddCapabilities and requiredDropCapabilities. Capabilities added here are implicitly allowed, and need not be included in the allowedCapabilities list.
     */
    public $defaultAddCapabilities;

    /**
     * @var boolean $defaultAllowPrivilegeEscalation
     * defaultAllowPrivilegeEscalation controls the default setting for whether a process can gain more privileges than its parent process.
     */
    public $defaultAllowPrivilegeEscalation;

    /**
     * @var string $forbiddenSysctls
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to none. Each entry is either a plain sysctl name or ends in "*" in which case it is considered as a prefix of forbidden sysctls. Single * means all sysctls are forbidden.
     * 
     * Examples: e.g. "foo\/*" forbids "foo\/bar", "foo\/baz", etc. e.g. "foo.*" forbids "foo.bar", "foo.baz", etc.
     */
    public $forbiddenSysctls;

    /**
     * @var FSGroupStrategyOptions $fsGroup
     * fsGroup is the strategy that will dictate what fs group is used by the SecurityContext.
     */
    public $fsGroup;

    /**
     * @var boolean $hostIPC
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     */
    public $hostIPC;

    /**
     * @var boolean $hostNetwork
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod spec.
     */
    public $hostNetwork;

    /**
     * @var boolean $hostPID
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     */
    public $hostPID;

    /**
     * @var HostPortRange[] $hostPorts
     * hostPorts determines which host port ranges are allowed to be exposed.
     */
    public $hostPorts;

    /**
     * @var boolean $privileged
     * privileged determines if a pod can request to be run as privileged.
     */
    public $privileged;

    /**
     * @var boolean $readOnlyRootFilesystem
     * readOnlyRootFilesystem when set to true will force containers to run with a read only root file system.  If the container specifically requests to run with a non-read only root file system the PSP should deny the pod. If set to false the container may run with a read only root file system if it wishes but it will not be forced to.
     */
    public $readOnlyRootFilesystem;

    /**
     * @var string $requiredDropCapabilities
     * requiredDropCapabilities are the capabilities that will be dropped from the container.  These are required to be dropped and cannot be added.
     */
    public $requiredDropCapabilities;

    /**
     * @var RunAsGroupStrategyOptions $runAsGroup
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup values that may be set. If this field is omitted, the pod's RunAsGroup can take any value. This field requires the RunAsGroup feature gate to be enabled.
     */
    public $runAsGroup;

    /**
     * @var RunAsUserStrategyOptions $runAsUser
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that may be set.
     */
    public $runAsUser;

    /**
     * @var RuntimeClassStrategyOptions $runtimeClass
     * runtimeClass is the strategy that will dictate the allowable RuntimeClasses for a pod. If this field is omitted, the pod's runtimeClassName field is unrestricted. Enforcement of this field depends on the RuntimeClass feature gate being enabled.
     */
    public $runtimeClass;

    /**
     * @var SELinuxStrategyOptions $seLinux
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     */
    public $seLinux;

    /**
     * @var SupplementalGroupsStrategyOptions $supplementalGroups
     * supplementalGroups is the strategy that will dictate what supplemental groups are used by the SecurityContext.
     */
    public $supplementalGroups;

    /**
     * @var string $volumes
     * volumes is an allowlist of volume plugins. Empty indicates that no volumes may be used. To allow all volumes you may use '*'.
     */
    public $volumes;

    public function __construct($data)
    {
        $this->allowPrivilegeEscalation = isset($data['allowPrivilegeEscalation']) ? $data['allowPrivilegeEscalation'] : null;
        $this->allowedCSIDrivers = array_map(function ($a) {
            return new AllowedCSIDriver($a);
        }, isset($data['allowedCSIDrivers']) ? $data['allowedCSIDrivers'] : []);
        $this->allowedCapabilities = isset($data['allowedCapabilities']) ? $data['allowedCapabilities'] : [];
        $this->allowedFlexVolumes = array_map(function ($a) {
            return new AllowedFlexVolume($a);
        }, isset($data['allowedFlexVolumes']) ? $data['allowedFlexVolumes'] : []);
        $this->allowedHostPaths = array_map(function ($a) {
            return new AllowedHostPath($a);
        }, isset($data['allowedHostPaths']) ? $data['allowedHostPaths'] : []);
        $this->allowedProcMountTypes = isset($data['allowedProcMountTypes']) ? $data['allowedProcMountTypes'] : [];
        $this->allowedUnsafeSysctls = isset($data['allowedUnsafeSysctls']) ? $data['allowedUnsafeSysctls'] : [];
        $this->defaultAddCapabilities = isset($data['defaultAddCapabilities']) ? $data['defaultAddCapabilities'] : [];
        $this->defaultAllowPrivilegeEscalation = isset($data['defaultAllowPrivilegeEscalation']) ? $data['defaultAllowPrivilegeEscalation'] : null;
        $this->forbiddenSysctls = isset($data['forbiddenSysctls']) ? $data['forbiddenSysctls'] : [];
        if (isset($data['fsGroup'])) {
            $this->fsGroup = new FSGroupStrategyOptions($data['fsGroup']);
        }
        $this->hostIPC = isset($data['hostIPC']) ? $data['hostIPC'] : null;
        $this->hostNetwork = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->hostPID = isset($data['hostPID']) ? $data['hostPID'] : null;
        $this->hostPorts = array_map(function ($a) {
            return new HostPortRange($a);
        }, isset($data['hostPorts']) ? $data['hostPorts'] : []);
        $this->privileged = isset($data['privileged']) ? $data['privileged'] : null;
        $this->readOnlyRootFilesystem = isset($data['readOnlyRootFilesystem']) ? $data['readOnlyRootFilesystem'] : null;
        $this->requiredDropCapabilities = isset($data['requiredDropCapabilities']) ? $data['requiredDropCapabilities'] : [];
        if (isset($data['runAsGroup'])) {
            $this->runAsGroup = new RunAsGroupStrategyOptions($data['runAsGroup']);
        }
        if (isset($data['runAsUser'])) {
            $this->runAsUser = new RunAsUserStrategyOptions($data['runAsUser']);
        }
        if (isset($data['runtimeClass'])) {
            $this->runtimeClass = new RuntimeClassStrategyOptions($data['runtimeClass']);
        }
        if (isset($data['seLinux'])) {
            $this->seLinux = new SELinuxStrategyOptions($data['seLinux']);
        }
        if (isset($data['supplementalGroups'])) {
            $this->supplementalGroups = new SupplementalGroupsStrategyOptions($data['supplementalGroups']);
        }
        $this->volumes = isset($data['volumes']) ? $data['volumes'] : [];
    }
}
