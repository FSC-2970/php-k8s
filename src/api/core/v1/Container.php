<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\EnvVar;
use k8s\api\core\v1\EnvFromSource;
use k8s\api\core\v1\Lifecycle;
use k8s\api\core\v1\Probe;
use k8s\api\core\v1\ContainerPort;
use k8s\api\core\v1\ResourceRequirements;
use k8s\api\core\v1\SecurityContext;
use k8s\api\core\v1\VolumeDevice;
use k8s\api\core\v1\VolumeMount;

/**
 * A single application container that you want to run within a pod.
 */
class Container extends \k8s\Resource
{
    /**
     * @var string $args
     * Arguments to the entrypoint. The docker image's CMD is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. Double $$ are reduced to a single $, which allows for escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the string literal "$(VAR_NAME)". Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/tasks\/inject-data-application\/define-command-argument-container\/#running-a-command-in-a-shell
     */
    public $args;

    /**
     * @var string $command
     * Entrypoint array. Not executed within a shell. The docker image's ENTRYPOINT is used if this is not provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be resolved, the reference in the input string will be unchanged. Double $$ are reduced to a single $, which allows for escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the string literal "$(VAR_NAME)". Escaped references will never be expanded, regardless of whether the variable exists or not. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/tasks\/inject-data-application\/define-command-argument-container\/#running-a-command-in-a-shell
     */
    public $command;

    /**
     * @var EnvVar[] $env
     * List of environment variables to set in the container. Cannot be updated.
     */
    public $env;

    /**
     * @var EnvFromSource[] $envFrom
     * List of sources to populate environment variables in the container. The keys defined within a source must be a C_IDENTIFIER. All invalid keys will be reported as an event when the container is starting. When a key exists in multiple sources, the value associated with the last source will take precedence. Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
     */
    public $envFrom;

    /**
     * @var string $image
     * Docker image name. More info: https:\/\/kubernetes.io\/docs\/concepts\/containers\/images This field is optional to allow higher level config management to default or override container images in workload controllers like Deployments and StatefulSets.
     */
    public $image;

    /**
     * @var string $imagePullPolicy
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/containers\/images#updating-images
     */
    public $imagePullPolicy;

    /**
     * @var Lifecycle $lifecycle
     * Actions that the management system should take in response to container lifecycle events. Cannot be updated.
     */
    public $lifecycle;

    /**
     * @var Probe $livenessProbe
     * Periodic probe of container liveness. Container will be restarted if the probe fails. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#container-probes
     */
    public $livenessProbe;

    /**
     * @var string $name required
     * Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name (DNS_LABEL). Cannot be updated.
     */
    public $name;

    /**
     * @var ContainerPort[] $ports
     * List of ports to expose from the container. Exposing a port here gives the system additional information about the network connections a container uses, but is primarily informational. Not specifying a port here DOES NOT prevent that port from being exposed. Any port which is listening on the default "0.0.0.0" address inside a container will be accessible from the network. Cannot be updated.
     */
    public $ports;

    /**
     * @var Probe $readinessProbe
     * Periodic probe of container service readiness. Container will be removed from service endpoints if the probe fails. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#container-probes
     */
    public $readinessProbe;

    /**
     * @var ResourceRequirements $resources
     * Compute Resources required by this container. Cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/configuration\/manage-resources-containers\/
     */
    public $resources;

    /**
     * @var SecurityContext $securityContext
     * SecurityContext defines the security options the container should be run with. If set, the fields of SecurityContext override the equivalent fields of PodSecurityContext. More info: https:\/\/kubernetes.io\/docs\/tasks\/configure-pod-container\/security-context\/
     */
    public $securityContext;

    /**
     * @var Probe $startupProbe
     * StartupProbe indicates that the Pod has successfully initialized. If specified, no other probes are executed until this completes successfully. If this probe fails, the Pod will be restarted, just as if the livenessProbe failed. This can be used to provide different probe parameters at the beginning of a Pod's lifecycle, when it might take a long time to load data or warm a cache, than during steady-state operation. This cannot be updated. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#container-probes
     */
    public $startupProbe;

    /**
     * @var boolean $stdin
     * Whether this container should allocate a buffer for stdin in the container runtime. If this is not set, reads from stdin in the container will always result in EOF. Default is false.
     */
    public $stdin;

    /**
     * @var boolean $stdinOnce
     * Whether the container runtime should close the stdin channel after it has been opened by a single attach. When stdin is true the stdin stream will remain open across multiple attach sessions. If stdinOnce is set to true, stdin is opened on container start, is empty until the first client attaches to stdin, and then remains open and accepts data until the client disconnects, at which time stdin is closed and remains closed until the container is restarted. If this flag is false, a container processes that reads from stdin will never receive an EOF. Default is false
     */
    public $stdinOnce;

    /**
     * @var string $terminationMessagePath
     * Optional: Path at which the file to which the container's termination message will be written is mounted into the container's filesystem. Message written is intended to be brief final status, such as an assertion failure message. Will be truncated by the node if greater than 4096 bytes. The total message length across all containers will be limited to 12kb. Defaults to \/dev\/termination-log. Cannot be updated.
     */
    public $terminationMessagePath;

    /**
     * @var string $terminationMessagePolicy
     * Indicate how the termination message should be populated. File will use the contents of terminationMessagePath to populate the container status message on both success and failure. FallbackToLogsOnError will use the last chunk of container log output if the termination message file is empty and the container exited with an error. The log output is limited to 2048 bytes or 80 lines, whichever is smaller. Defaults to File. Cannot be updated.
     */
    public $terminationMessagePolicy;

    /**
     * @var boolean $tty
     * Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default is false.
     */
    public $tty;

    /**
     * @var VolumeDevice[] $volumeDevices
     * volumeDevices is the list of block devices to be used by the container.
     */
    public $volumeDevices;

    /**
     * @var VolumeMount[] $volumeMounts
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
     */
    public $volumeMounts;

    /**
     * @var string $workingDir
     * Container's working directory. If not specified, the container runtime's default will be used, which might be configured in the container image. Cannot be updated.
     */
    public $workingDir;

    public function __construct($data)
    {
        $this->args = isset($data['args']) ? $data['args'] : [];
        $this->command = isset($data['command']) ? $data['command'] : [];
        $this->env = array_map(function ($a) {
            return new EnvVar($a);
        }, isset($data['env']) ? $data['env'] : []);
        $this->envFrom = array_map(function ($a) {
            return new EnvFromSource($a);
        }, isset($data['envFrom']) ? $data['envFrom'] : []);
        $this->image = isset($data['image']) ? $data['image'] : null;
        $this->imagePullPolicy = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        if (isset($data['lifecycle'])) {
            $this->lifecycle = new Lifecycle($data['lifecycle']);
        }
        if (isset($data['livenessProbe'])) {
            $this->livenessProbe = new Probe($data['livenessProbe']);
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->ports = array_map(function ($a) {
            return new ContainerPort($a);
        }, isset($data['ports']) ? $data['ports'] : []);
        if (isset($data['readinessProbe'])) {
            $this->readinessProbe = new Probe($data['readinessProbe']);
        }
        if (isset($data['resources'])) {
            $this->resources = new ResourceRequirements($data['resources']);
        }
        if (isset($data['securityContext'])) {
            $this->securityContext = new SecurityContext($data['securityContext']);
        }
        if (isset($data['startupProbe'])) {
            $this->startupProbe = new Probe($data['startupProbe']);
        }
        $this->stdin = isset($data['stdin']) ? $data['stdin'] : null;
        $this->stdinOnce = isset($data['stdinOnce']) ? $data['stdinOnce'] : null;
        $this->terminationMessagePath = isset($data['terminationMessagePath']) ? $data['terminationMessagePath'] : null;
        $this->terminationMessagePolicy = isset($data['terminationMessagePolicy']) ? $data['terminationMessagePolicy'] : null;
        $this->tty = isset($data['tty']) ? $data['tty'] : null;
        $this->volumeDevices = array_map(function ($a) {
            return new VolumeDevice($a);
        }, isset($data['volumeDevices']) ? $data['volumeDevices'] : []);
        $this->volumeMounts = array_map(function ($a) {
            return new VolumeMount($a);
        }, isset($data['volumeMounts']) ? $data['volumeMounts'] : []);
        $this->workingDir = isset($data['workingDir']) ? $data['workingDir'] : null;
    }
}
