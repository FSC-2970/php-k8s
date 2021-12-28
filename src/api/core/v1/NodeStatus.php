<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeAddress;
use k8s\api\core\v1\NodeCondition;
use k8s\api\core\v1\NodeConfigStatus;
use k8s\api\core\v1\NodeDaemonEndpoints;
use k8s\api\core\v1\ContainerImage;
use k8s\api\core\v1\NodeSystemInfo;
use k8s\api\core\v1\AttachedVolume;

/**
 * NodeStatus is information about the current status of a node.
 */
class NodeStatus extends \k8s\Resource
{
    /**
     * @var NodeAddress[] $addresses
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info: https:\/\/kubernetes.io\/docs\/concepts\/nodes\/node\/#addresses Note: This field is declared as mergeable, but the merge key is not sufficiently unique, which can cause data corruption when it is merged. Callers should instead use a full-replacement patch. See http:\/\/pr.k8s.io\/79391 for an example.
     */
    public $addresses;

    /**
     * @var object $allocatable
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to Capacity.
     */
    public $allocatable;

    /**
     * @var object $capacity
     * Capacity represents the total resources of a node. More info: https:\/\/kubernetes.io\/docs\/concepts\/storage\/persistent-volumes#capacity
     */
    public $capacity;

    /**
     * @var NodeCondition[] $conditions
     * Conditions is an array of current observed node conditions. More info: https:\/\/kubernetes.io\/docs\/concepts\/nodes\/node\/#condition
     */
    public $conditions;

    /**
     * @var NodeConfigStatus $config
     * Status of the config assigned to the node via the dynamic Kubelet config feature.
     */
    public $config;

    /**
     * @var NodeDaemonEndpoints $daemonEndpoints
     * Endpoints of daemons running on the Node.
     */
    public $daemonEndpoints;

    /**
     * @var ContainerImage[] $images
     * List of container images on this node
     */
    public $images;

    /**
     * @var NodeSystemInfo $nodeInfo
     * Set of ids\/uuids to uniquely identify the node. More info: https:\/\/kubernetes.io\/docs\/concepts\/nodes\/node\/#info
     */
    public $nodeInfo;

    /**
     * @var string $phase
     * NodePhase is the recently observed lifecycle phase of the node. More info: https:\/\/kubernetes.io\/docs\/concepts\/nodes\/node\/#phase The field is never populated, and now is deprecated.
     */
    public $phase;

    /**
     * @var AttachedVolume[] $volumesAttached
     * List of volumes that are attached to the node.
     */
    public $volumesAttached;

    /**
     * @var string $volumesInUse
     * List of attachable volumes in use (mounted) by the node.
     */
    public $volumesInUse;

    public function __construct($data)
    {
        $this->addresses = array_map(function ($a) {
            return new NodeAddress($a);
        }, $data['addresses'] ?? []);
        $this->allocatable = $data['allocatable'] ?? null;
        $this->capacity = $data['capacity'] ?? null;
        $this->conditions = array_map(function ($a) {
            return new NodeCondition($a);
        }, $data['conditions'] ?? []);
        if (isset($data['config'])) {
            $this->config = new NodeConfigStatus($data['config']);
        }
        if (isset($data['daemonEndpoints'])) {
            $this->daemonEndpoints = new NodeDaemonEndpoints($data['daemonEndpoints']);
        }
        $this->images = array_map(function ($a) {
            return new ContainerImage($a);
        }, $data['images'] ?? []);
        if (isset($data['nodeInfo'])) {
            $this->nodeInfo = new NodeSystemInfo($data['nodeInfo']);
        }
        $this->phase = $data['phase'] ?? null;
        $this->volumesAttached = array_map(function ($a) {
            return new AttachedVolume($a);
        }, $data['volumesAttached'] ?? []);
        $this->volumesInUse = $data['volumesInUse'] ?? [];
    }
}
