<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ExecAction;
use k8s\api\core\v1\HTTPGetAction;
use k8s\api\core\v1\TCPSocketAction;

/**
 * Probe describes a health check to be performed against a container to determine whether it is alive or ready to receive traffic.
 */
class Probe extends \k8s\Resource
{
    /**
     * @var ExecAction $exec
     * One and only one of the following should be specified. Exec specifies the action to take.
     */
    public $exec;

    /**
     * @var integer $failureThreshold
     * Minimum consecutive failures for the probe to be considered failed after having succeeded. Defaults to 3. Minimum value is 1.
     */
    public $failureThreshold;

    /**
     * @var HTTPGetAction $httpGet
     * HTTPGet specifies the http request to perform.
     */
    public $httpGet;

    /**
     * @var integer $initialDelaySeconds
     * Number of seconds after the container has started before liveness probes are initiated. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#container-probes
     */
    public $initialDelaySeconds;

    /**
     * @var integer $periodSeconds
     * How often (in seconds) to perform the probe. Default to 10 seconds. Minimum value is 1.
     */
    public $periodSeconds;

    /**
     * @var integer $successThreshold
     * Minimum consecutive successes for the probe to be considered successful after having failed. Defaults to 1. Must be 1 for liveness and startup. Minimum value is 1.
     */
    public $successThreshold;

    /**
     * @var TCPSocketAction $tcpSocket
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     */
    public $tcpSocket;

    /**
     * @var integer $terminationGracePeriodSeconds
     * Optional duration in seconds the pod needs to terminate gracefully upon probe failure. The grace period is the duration in seconds after the processes running in the pod are sent a termination signal and the time when the processes are forcibly halted with a kill signal. Set this value longer than the expected cleanup time for your process. If this value is nil, the pod's terminationGracePeriodSeconds will be used. Otherwise, this value overrides the value provided by the pod spec. Value must be non-negative integer. The value zero indicates stop immediately via the kill signal (no opportunity to shut down). This is a beta field and requires enabling ProbeTerminationGracePeriod feature gate. Minimum value is 1. spec.terminationGracePeriodSeconds is used if unset.
     */
    public $terminationGracePeriodSeconds;

    /**
     * @var integer $timeoutSeconds
     * Number of seconds after which the probe times out. Defaults to 1 second. Minimum value is 1. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/pods\/pod-lifecycle#container-probes
     */
    public $timeoutSeconds;

    public function __construct($data)
    {
        if (isset($data['exec'])) {
            $this->exec = new ExecAction($data['exec']);
        }
        $this->failureThreshold = $data['failureThreshold'] ?? null;
        if (isset($data['httpGet'])) {
            $this->httpGet = new HTTPGetAction($data['httpGet']);
        }
        $this->initialDelaySeconds = $data['initialDelaySeconds'] ?? null;
        $this->periodSeconds = $data['periodSeconds'] ?? null;
        $this->successThreshold = $data['successThreshold'] ?? null;
        if (isset($data['tcpSocket'])) {
            $this->tcpSocket = new TCPSocketAction($data['tcpSocket']);
        }
        $this->terminationGracePeriodSeconds = $data['terminationGracePeriodSeconds'] ?? null;
        $this->timeoutSeconds = $data['timeoutSeconds'] ?? null;
    }
}
