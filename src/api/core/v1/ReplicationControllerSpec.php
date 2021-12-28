<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\PodTemplateSpec;

/**
 * ReplicationControllerSpec is the specification of a replication controller.
 */
class ReplicationControllerSpec extends \k8s\Resource
{
    /**
     * @var integer $minReadySeconds
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     */
    public $minReadySeconds;

    /**
     * @var integer $replicas
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero and unspecified. Defaults to 1. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller#what-is-a-replicationcontroller
     */
    public $replicas;

    /**
     * @var object $selector
     * Selector is a label query over pods that should match the Replicas count. If Selector is empty, it is defaulted to the labels present on the Pod template. Label keys and values that must match in order to be controlled by this replication controller, if empty defaulted to labels on Pod template. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/labels\/#label-selectors
     */
    public $selector;

    /**
     * @var PodTemplateSpec $template
     * Template is the object that describes the pod that will be created if insufficient replicas are detected. This takes precedence over a TemplateRef. More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller#pod-template
     */
    public $template;

    public function __construct($data)
    {
        $this->minReadySeconds = $data['minReadySeconds'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
        $this->selector = $data['selector'] ?? null;
        if (isset($data['template'])) {
            $this->template = new PodTemplateSpec($data['template']);
        }
    }
}
