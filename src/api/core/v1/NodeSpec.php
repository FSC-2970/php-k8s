<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeConfigSource;
use k8s\api\core\v1\Taint;

/**
 * NodeSpec describes the attributes that a node is created with.
 */
class NodeSpec extends \k8s\Resource
{
    /**
     * @var NodeConfigSource $configSource
     * Deprecated. If specified, the source of the node's configuration. The DynamicKubeletConfig feature gate must be enabled for the Kubelet to use this field. This field is deprecated as of 1.22: https:\/\/git.k8s.io\/enhancements\/keps\/sig-node\/281-dynamic-kubelet-configuration
     */
    public $configSource;

    /**
     * @var string $externalID
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see: https:\/\/issues.k8s.io\/61966
     */
    public $externalID;

    /**
     * @var string $podCIDR
     * PodCIDR represents the pod IP range assigned to the node.
     */
    public $podCIDR;

    /**
     * @var string $podCIDRs
     * podCIDRs represents the IP ranges assigned to the node for usage by Pods on that node. If this field is specified, the 0th entry must match the podCIDR field. It may contain at most 1 value for each of IPv4 and IPv6.
     */
    public $podCIDRs;

    /**
     * @var string $providerID
     * ID of the node assigned by the cloud provider in the format: <ProviderName>:\/\/<ProviderSpecificNodeID>
     */
    public $providerID;

    /**
     * @var Taint[] $taints
     * If specified, the node's taints.
     */
    public $taints;

    /**
     * @var boolean $unschedulable
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info: https:\/\/kubernetes.io\/docs\/concepts\/nodes\/node\/#manual-node-administration
     */
    public $unschedulable;

    public function __construct($data)
    {
        if (isset($data['configSource'])) {
            $this->configSource = new NodeConfigSource($data['configSource']);
        }
        $this->externalID = isset($data['externalID']) ? $data['externalID'] : null;
        $this->podCIDR = isset($data['podCIDR']) ? $data['podCIDR'] : null;
        $this->podCIDRs = isset($data['podCIDRs']) ? $data['podCIDRs'] : [];
        $this->providerID = isset($data['providerID']) ? $data['providerID'] : null;
        $this->taints = array_map(function ($a) {
            return new Taint($a);
        }, isset($data['taints']) ? $data['taints'] : []);
        $this->unschedulable = isset($data['unschedulable']) ? $data['unschedulable'] : null;
    }
}
