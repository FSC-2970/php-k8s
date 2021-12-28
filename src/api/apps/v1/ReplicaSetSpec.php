<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\api\core\v1\PodTemplateSpec;

/**
 * ReplicaSetSpec is the specification of a ReplicaSet.
 */
class ReplicaSetSpec extends \k8s\Resource
{
    /**
     * @var integer $minReadySeconds
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     */
    public $minReadySeconds;

    /**
     * @var integer $replicas
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero and unspecified. Defaults to 1. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller\/#what-is-a-replicationcontroller
     */
    public $replicas;

    /**
     * @var LabelSelector $selector
     * Selector is a label query over pods that should match the replica count. Label keys and values that must match in order to be controlled by this replica set. It must match the pod template's labels. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/labels\/#label-selectors
     */
    public $selector;

    /**
     * @var PodTemplateSpec $template
     * Template is the object that describes the pod that will be created if insufficient replicas are detected. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller#pod-template
     */
    public $template;

    public function __construct($data)
    {
        $this->minReadySeconds = $data['minReadySeconds'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        if (isset($data['template'])) {
            $this->template = new PodTemplateSpec($data['template']);
        }
    }
}
