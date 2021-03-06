<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\Affinity;
use k8s\api\core\v1\Container;
use k8s\api\core\v1\PodDNSConfig;
use k8s\api\core\v1\EphemeralContainer;
use k8s\api\core\v1\HostAlias;
use k8s\api\core\v1\LocalObjectReference;
use k8s\api\core\v1\PodReadinessGate;
use k8s\api\core\v1\PodSecurityContext;
use k8s\api\core\v1\Toleration;
use k8s\api\core\v1\TopologySpreadConstraint;
use k8s\api\core\v1\Volume;

/**
 * PodSpec is a description of a pod.
 */
class PodSpec extends \k8s\Resource
{
    /**
     * @var integer $activeDeadlineSeconds
     * Optional duration in seconds the pod may be active on the node relative to StartTime before the system will actively try to mark it failed and kill associated containers. Value must be a positive integer.
     */
    public $activeDeadlineSeconds;

    /**
     * @var Affinity $affinity
     * If specified, the pod's scheduling constraints
     */
    public $affinity;

    /**
     * @var boolean $automountServiceAccountToken
     * AutomountServiceAccountToken indicates whether a service account token should be automatically mounted.
     */
    public $automountServiceAccountToken;

    /**
     * @var Container[] $containers
     * List of containers belonging to the pod. Containers cannot currently be added or removed. There must be at least one container in a Pod. Cannot be updated.
     */
    public $containers;

    /**
     * @var PodDNSConfig $dnsConfig
     * Specifies the DNS parameters of a pod. Parameters specified here will be merged to the generated DNS configuration based on DNSPolicy.
     */
    public $dnsConfig;

    /**
     * @var string $dnsPolicy
     * Set DNS policy for the pod. Defaults to "ClusterFirst". Valid values are 'ClusterFirstWithHostNet', 'ClusterFirst', 'Default' or 'None'. DNS parameters given in DNSConfig will be merged with the policy selected with DNSPolicy. To have DNS options set along with hostNetwork, you have to specify DNS policy explicitly to 'ClusterFirstWithHostNet'.
     */
    public $dnsPolicy;

    /**
     * @var boolean $enableServiceLinks
     * EnableServiceLinks indicates whether information about services should be injected into pod's environment variables, matching the syntax of Docker links. Optional: Defaults to true.
     */
    public $enableServiceLinks;

    /**
     * @var EphemeralContainer[] $ephemeralContainers
     * List of ephemeral containers run in this pod. Ephemeral containers may be run in an existing pod to perform user-initiated actions such as debugging. This list cannot be specified when creating a pod, and it cannot be modified by updating the pod spec. In order to add an ephemeral container to an existing pod, use the pod's ephemeralcontainers subresource. This field is alpha-level and is only honored by servers that enable the EphemeralContainers feature.
     */
    public $ephemeralContainers;

    /**
     * @var HostAlias[] $hostAliases
     * HostAliases is an optional list of hosts and IPs that will be injected into the pod's hosts file if specified. This is only valid for non-hostNetwork pods.
     */
    public $hostAliases;

    /**
     * @var boolean $hostIPC
     * Use the host's ipc namespace. Optional: Default to false.
     */
    public $hostIPC;

    /**
     * @var boolean $hostNetwork
     * Host networking requested for this pod. Use the host's network namespace. If this option is set, the ports that will be used must be specified. Default to false.
     */
    public $hostNetwork;

    /**
     * @var boolean $hostPID
     * Use the host's pid namespace. Optional: Default to false.
     */
    public $hostPID;

    /**
     * @var string $hostname
     * Specifies the hostname of the Pod If not specified, the pod's hostname will be set to a system-defined value.
     */
    public $hostname;

    /**
     * @var LocalObjectReference[] $imagePullSecrets
     * ImagePullSecrets is an optional list of references to secrets in the same namespace to use for pulling any of the images used by this PodSpec. If specified, these secrets will be passed to individual puller implementations for them to use. For example, in the case of docker, only DockerConfig type secrets are honored. More info: https:\/\/kubernetes.io\/docs\/concepts\/containers\/images#specifying-imagepullsecrets-on-a-pod
     */
    public $imagePullSecrets;

    /**
     * @var Container[] $initContainers
     * List of initialization containers belonging to the pod. Init containers are executed in order prior to containers being started. If any init container fails, the pod is considered to have failed and is handled according to its restartPolicy. The name for an init container or normal container must be unique among all containers. Init containers may not have Lifecycle actions, Readiness probes, Liveness probes, or Startup probes. The resourceRequirements of an init container are taken into account during scheduling by finding the highest request\/limit for each resource type, and then using the max of of that value or the sum of the normal containers. Limits are applied to init containers in a similar fashion. Init containers cannot currently be added or removed. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/init-containers\/
     */
    public $initContainers;

    /**
     * @var string $nodeName
     * NodeName is a request to schedule this pod onto a specific node. If it is non-empty, the scheduler simply schedules this pod onto that node, assuming that it fits resource requirements.
     */
    public $nodeName;

    /**
     * @var object $nodeSelector
     * NodeSelector is a selector which must be true for the pod to fit on a node. Selector which must match a node's labels for the pod to be scheduled on that node. More info: https:\/\/kubernetes.io\/docs\/concepts\/configuration\/assign-pod-node\/
     */
    public $nodeSelector;

    /**
     * @var object $overhead
     * Overhead represents the resource overhead associated with running a pod for a given RuntimeClass. This field will be autopopulated at admission time by the RuntimeClass admission controller. If the RuntimeClass admission controller is enabled, overhead must not be set in Pod create requests. The RuntimeClass admission controller will reject Pod create requests which have the overhead already set. If RuntimeClass is configured and selected in the PodSpec, Overhead will be set to the value defined in the corresponding RuntimeClass, otherwise it will remain unset and treated as zero. More info: https:\/\/git.k8s.io\/enhancements\/keps\/sig-node\/688-pod-overhead\/README.md This field is beta-level as of Kubernetes v1.18, and is only honored by servers that enable the PodOverhead feature.
     */
    public $overhead;

    /**
     * @var string $preemptionPolicy
     * PreemptionPolicy is the Policy for preempting pods with lower priority. One of Never, PreemptLowerPriority. Defaults to PreemptLowerPriority if unset. This field is beta-level, gated by the NonPreemptingPriority feature-gate.
     */
    public $preemptionPolicy;

    /**
     * @var integer $priority
     * The priority value. Various system components use this field to find the priority of the pod. When Priority Admission Controller is enabled, it prevents users from setting this field. The admission controller populates this field from PriorityClassName. The higher the value, the higher the priority.
     */
    public $priority;

    /**
     * @var string $priorityClassName
     * If specified, indicates the pod's priority. "system-node-critical" and "system-cluster-critical" are two special keywords which indicate the highest priorities with the former being the highest priority. Any other name must be defined by creating a PriorityClass object with that name. If not specified, the pod priority will be default or zero if there is no default.
     */
    public $priorityClassName;

    /**
     * @var PodReadinessGate[] $readinessGates
     * If specified, all readiness gates will be evaluated for pod readiness. A pod is ready when all its containers are ready AND all conditions specified in the readiness gates have status equal to "True" More info: https:\/\/git.k8s.io\/enhancements\/keps\/sig-network\/580-pod-readiness-gates
     */
    public $readinessGates;

    /**
     * @var string $restartPolicy
     * Restart policy for all containers within the pod. One of Always, OnFailure, Never. Default to Always. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle\/#restart-policy
     */
    public $restartPolicy;

    /**
     * @var string $runtimeClassName
     * RuntimeClassName refers to a RuntimeClass object in the node.k8s.io group, which should be used to run this pod.  If no RuntimeClass resource matches the named class, the pod will not be run. If unset or empty, the "legacy" RuntimeClass will be used, which is an implicit class with an empty definition that uses the default runtime handler. More info: https:\/\/git.k8s.io\/enhancements\/keps\/sig-node\/585-runtime-class This is a beta feature as of Kubernetes v1.14.
     */
    public $runtimeClassName;

    /**
     * @var string $schedulerName
     * If specified, the pod will be dispatched by specified scheduler. If not specified, the pod will be dispatched by default scheduler.
     */
    public $schedulerName;

    /**
     * @var PodSecurityContext $securityContext
     * SecurityContext holds pod-level security attributes and common container settings. Optional: Defaults to empty.  See type description for default values of each field.
     */
    public $securityContext;

    /**
     * @var string $serviceAccount
     * DeprecatedServiceAccount is a depreciated alias for ServiceAccountName. Deprecated: Use serviceAccountName instead.
     */
    public $serviceAccount;

    /**
     * @var string $serviceAccountName
     * ServiceAccountName is the name of the ServiceAccount to use to run this pod. More info: https:\/\/kubernetes.io\/docs\/tasks\/configure-pod-container\/configure-service-account\/
     */
    public $serviceAccountName;

    /**
     * @var boolean $setHostnameAsFQDN
     * If true the pod's hostname will be configured as the pod's FQDN, rather than the leaf name (the default). In Linux containers, this means setting the FQDN in the hostname field of the kernel (the nodename field of struct utsname). In Windows containers, this means setting the registry value of hostname for the registry key HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters to FQDN. If a pod does not have FQDN, this has no effect. Default to false.
     */
    public $setHostnameAsFQDN;

    /**
     * @var boolean $shareProcessNamespace
     * Share a single process namespace between all of the containers in a pod. When this is set containers will be able to view and signal processes from other containers in the same pod, and the first process in each container will not be assigned PID 1. HostPID and ShareProcessNamespace cannot both be set. Optional: Default to false.
     */
    public $shareProcessNamespace;

    /**
     * @var string $subdomain
     * If specified, the fully qualified Pod hostname will be "<hostname>.<subdomain>.<pod namespace>.svc.<cluster domain>". If not specified, the pod will not have a domainname at all.
     */
    public $subdomain;

    /**
     * @var integer $terminationGracePeriodSeconds
     * Optional duration in seconds the pod needs to terminate gracefully. May be decreased in delete request. Value must be non-negative integer. The value zero indicates stop immediately via the kill signal (no opportunity to shut down). If this value is nil, the default grace period will be used instead. The grace period is the duration in seconds after the processes running in the pod are sent a termination signal and the time when the processes are forcibly halted with a kill signal. Set this value longer than the expected cleanup time for your process. Defaults to 30 seconds.
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var Toleration[] $tolerations
     * If specified, the pod's tolerations.
     */
    public $tolerations;

    /**
     * @var TopologySpreadConstraint[] $topologySpreadConstraints
     * TopologySpreadConstraints describes how a group of pods ought to spread across topology domains. Scheduler will schedule pods in a way which abides by the constraints. All topologySpreadConstraints are ANDed.
     */
    public $topologySpreadConstraints;

    /**
     * @var Volume[] $volumes
     * List of volumes that can be mounted by containers belonging to the pod. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/volumes
     */
    public $volumes;

    public function __construct($data)
    {
        $this->activeDeadlineSeconds = isset($data['activeDeadlineSeconds']) ? $data['activeDeadlineSeconds'] : null;
        if (isset($data['affinity'])) {
            $this->affinity = new Affinity($data['affinity']);
        }
        $this->automountServiceAccountToken = isset($data['automountServiceAccountToken']) ? $data['automountServiceAccountToken'] : null;
        $this->containers = array_map(function ($a) {
            return new Container($a);
        }, isset($data['containers']) ? $data['containers'] : []);
        if (isset($data['dnsConfig'])) {
            $this->dnsConfig = new PodDNSConfig($data['dnsConfig']);
        }
        $this->dnsPolicy = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->enableServiceLinks = isset($data['enableServiceLinks']) ? $data['enableServiceLinks'] : null;
        $this->ephemeralContainers = array_map(function ($a) {
            return new EphemeralContainer($a);
        }, isset($data['ephemeralContainers']) ? $data['ephemeralContainers'] : []);
        $this->hostAliases = array_map(function ($a) {
            return new HostAlias($a);
        }, isset($data['hostAliases']) ? $data['hostAliases'] : []);
        $this->hostIPC = isset($data['hostIPC']) ? $data['hostIPC'] : null;
        $this->hostNetwork = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->hostPID = isset($data['hostPID']) ? $data['hostPID'] : null;
        $this->hostname = isset($data['hostname']) ? $data['hostname'] : null;
        $this->imagePullSecrets = array_map(function ($a) {
            return new LocalObjectReference($a);
        }, isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : []);
        $this->initContainers = array_map(function ($a) {
            return new Container($a);
        }, isset($data['initContainers']) ? $data['initContainers'] : []);
        $this->nodeName = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->nodeSelector = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->overhead = isset($data['overhead']) ? $data['overhead'] : null;
        $this->preemptionPolicy = isset($data['preemptionPolicy']) ? $data['preemptionPolicy'] : null;
        $this->priority = isset($data['priority']) ? $data['priority'] : null;
        $this->priorityClassName = isset($data['priorityClassName']) ? $data['priorityClassName'] : null;
        $this->readinessGates = array_map(function ($a) {
            return new PodReadinessGate($a);
        }, isset($data['readinessGates']) ? $data['readinessGates'] : []);
        $this->restartPolicy = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->runtimeClassName = isset($data['runtimeClassName']) ? $data['runtimeClassName'] : null;
        $this->schedulerName = isset($data['schedulerName']) ? $data['schedulerName'] : null;
        if (isset($data['securityContext'])) {
            $this->securityContext = new PodSecurityContext($data['securityContext']);
        }
        $this->serviceAccount = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->serviceAccountName = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->setHostnameAsFQDN = isset($data['setHostnameAsFQDN']) ? $data['setHostnameAsFQDN'] : null;
        $this->shareProcessNamespace = isset($data['shareProcessNamespace']) ? $data['shareProcessNamespace'] : null;
        $this->subdomain = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->terminationGracePeriodSeconds = isset($data['terminationGracePeriodSeconds']) ? $data['terminationGracePeriodSeconds'] : null;
        $this->tolerations = array_map(function ($a) {
            return new Toleration($a);
        }, isset($data['tolerations']) ? $data['tolerations'] : []);
        $this->topologySpreadConstraints = array_map(function ($a) {
            return new TopologySpreadConstraint($a);
        }, isset($data['topologySpreadConstraints']) ? $data['topologySpreadConstraints'] : []);
        $this->volumes = array_map(function ($a) {
            return new Volume($a);
        }, isset($data['volumes']) ? $data['volumes'] : []);
    }
}
