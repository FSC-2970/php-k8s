<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\Capabilities;
use k8s\api\core\v1\SELinuxOptions;
use k8s\api\core\v1\SeccompProfile;
use k8s\api\core\v1\WindowsSecurityContextOptions;

/**
 * SecurityContext holds security configuration that will be applied to a container. Some fields are present in both SecurityContext and PodSecurityContext.  When both are set, the values in SecurityContext take precedence.
 */
class SecurityContext extends \k8s\Resource
{
    /**
     * @var boolean $allowPrivilegeEscalation
     * AllowPrivilegeEscalation controls whether a process can gain more privileges than its parent process. This bool directly controls if the no_new_privs flag will be set on the container process. AllowPrivilegeEscalation is true always when the container is: 1) run as Privileged 2) has CAP_SYS_ADMIN
     */
    public $allowPrivilegeEscalation;

    /**
     * @var Capabilities $capabilities
     * The capabilities to add\/drop when running containers. Defaults to the default set of capabilities granted by the container runtime.
     */
    public $capabilities;

    /**
     * @var boolean $privileged
     * Run container in privileged mode. Processes in privileged containers are essentially equivalent to root on the host. Defaults to false.
     */
    public $privileged;

    /**
     * @var string $procMount
     * procMount denotes the type of proc mount to use for the containers. The default is DefaultProcMount which uses the container runtime defaults for readonly paths and masked paths. This requires the ProcMountType feature flag to be enabled.
     */
    public $procMount;

    /**
     * @var boolean $readOnlyRootFilesystem
     * Whether this container has a read-only root filesystem. Default is false.
     */
    public $readOnlyRootFilesystem;

    /**
     * @var integer $runAsGroup
     * The GID to run the entrypoint of the container process. Uses runtime default if unset. May also be set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsGroup;

    /**
     * @var boolean $runAsNonRoot
     * Indicates that the container must run as a non-root user. If true, the Kubelet will validate the image at runtime to ensure that it does not run as UID 0 (root) and fail to start the container if it does. If unset or false, no such validation will be performed. May also be set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsNonRoot;

    /**
     * @var integer $runAsUser
     * The UID to run the entrypoint of the container process. Defaults to user specified in image metadata if unspecified. May also be set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsUser;

    /**
     * @var SELinuxOptions $seLinuxOptions
     * The SELinux context to be applied to the container. If unspecified, the container runtime will allocate a random SELinux context for each container.  May also be set in PodSecurityContext.  If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $seLinuxOptions;

    /**
     * @var SeccompProfile $seccompProfile
     * The seccomp options to use by this container. If seccomp options are provided at both the pod & container level, the container options override the pod options.
     */
    public $seccompProfile;

    /**
     * @var WindowsSecurityContextOptions $windowsOptions
     * The Windows specific settings applied to all containers. If unspecified, the options from the PodSecurityContext will be used. If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $windowsOptions;

    public function __construct($data)
    {
        $this->allowPrivilegeEscalation = isset($data['allowPrivilegeEscalation']) ? $data['allowPrivilegeEscalation'] : null;
        if (isset($data['capabilities'])) {
            $this->capabilities = new Capabilities($data['capabilities']);
        }
        $this->privileged = isset($data['privileged']) ? $data['privileged'] : null;
        $this->procMount = isset($data['procMount']) ? $data['procMount'] : null;
        $this->readOnlyRootFilesystem = isset($data['readOnlyRootFilesystem']) ? $data['readOnlyRootFilesystem'] : null;
        $this->runAsGroup = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->runAsNonRoot = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->runAsUser = isset($data['runAsUser']) ? $data['runAsUser'] : null;
        if (isset($data['seLinuxOptions'])) {
            $this->seLinuxOptions = new SELinuxOptions($data['seLinuxOptions']);
        }
        if (isset($data['seccompProfile'])) {
            $this->seccompProfile = new SeccompProfile($data['seccompProfile']);
        }
        if (isset($data['windowsOptions'])) {
            $this->windowsOptions = new WindowsSecurityContextOptions($data['windowsOptions']);
        }
    }
}
