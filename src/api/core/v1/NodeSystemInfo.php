<?php

namespace k8s\api\core\v1;

/**
 * NodeSystemInfo is a set of ids\/uuids to uniquely identify the node.
 */
class NodeSystemInfo extends \k8s\Resource
{
    /**
     * @var string $architecture required
     * The Architecture reported by the node
     */
    public $architecture;

    /**
     * @var string $bootID required
     * Boot ID reported by the node.
     */
    public $bootID;

    /**
     * @var string $containerRuntimeVersion required
     * ContainerRuntime Version reported by the node through runtime remote API (e.g. docker:\/\/1.5.0).
     */
    public $containerRuntimeVersion;

    /**
     * @var string $kernelVersion required
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     */
    public $kernelVersion;

    /**
     * @var string $kubeProxyVersion required
     * KubeProxy Version reported by the node.
     */
    public $kubeProxyVersion;

    /**
     * @var string $kubeletVersion required
     * Kubelet Version reported by the node.
     */
    public $kubeletVersion;

    /**
     * @var string $machineID required
     * MachineID reported by the node. For unique machine identification in the cluster this field is preferred. Learn more from man(5) machine-id: http:\/\/man7.org\/linux\/man-pages\/man5\/machine-id.5.html
     */
    public $machineID;

    /**
     * @var string $operatingSystem required
     * The Operating System reported by the node
     */
    public $operatingSystem;

    /**
     * @var string $osImage required
     * OS Image reported by the node from \/etc\/os-release (e.g. Debian GNU\/Linux 7 (wheezy)).
     */
    public $osImage;

    /**
     * @var string $systemUUID required
     * SystemUUID reported by the node. For unique machine identification MachineID is preferred. This field is specific to Red Hat hosts https:\/\/access.redhat.com\/documentation\/en-us\/red_hat_subscription_management\/1\/html\/rhsm\/uuid
     */
    public $systemUUID;

    public function __construct($data)
    {
        $this->architecture = isset($data['architecture']) ? $data['architecture'] : null;
        $this->bootID = isset($data['bootID']) ? $data['bootID'] : null;
        $this->containerRuntimeVersion = isset($data['containerRuntimeVersion']) ? $data['containerRuntimeVersion'] : null;
        $this->kernelVersion = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->kubeProxyVersion = isset($data['kubeProxyVersion']) ? $data['kubeProxyVersion'] : null;
        $this->kubeletVersion = isset($data['kubeletVersion']) ? $data['kubeletVersion'] : null;
        $this->machineID = isset($data['machineID']) ? $data['machineID'] : null;
        $this->operatingSystem = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->osImage = isset($data['osImage']) ? $data['osImage'] : null;
        $this->systemUUID = isset($data['systemUUID']) ? $data['systemUUID'] : null;
    }
}
