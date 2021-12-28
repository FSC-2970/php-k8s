<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\api\apps\v1\DeploymentStrategy;
use k8s\api\core\v1\PodTemplateSpec;

/**
 * DeploymentSpec is the specification of the desired behavior of the Deployment.
 */
class DeploymentSpec extends \k8s\Resource
{
    /**
     * @var integer $minReadySeconds
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     */
    public $minReadySeconds;

    /**
     * @var boolean $paused
     * Indicates that the deployment is paused.
     */
    public $paused;

    /**
     * @var integer $progressDeadlineSeconds
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed. The deployment controller will continue to process failed deployments and a condition with a ProgressDeadlineExceeded reason will be surfaced in the deployment status. Note that progress will not be estimated during the time a deployment is paused. Defaults to 600s.
     */
    public $progressDeadlineSeconds;

    /**
     * @var integer $replicas
     * Number of desired pods. This is a pointer to distinguish between explicit zero and not specified. Defaults to 1.
     */
    public $replicas;

    /**
     * @var integer $revisionHistoryLimit
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to distinguish between explicit zero and not specified. Defaults to 10.
     */
    public $revisionHistoryLimit;

    /**
     * @var LabelSelector $selector
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones affected by this deployment. It must match the pod template's labels.
     */
    public $selector;

    /**
     * @var DeploymentStrategy $strategy
     * The deployment strategy to use to replace existing pods with new ones.
     */
    public $strategy;

    /**
     * @var PodTemplateSpec $template
     * Template describes the pods that will be created.
     */
    public $template;

    public function __construct($data)
    {
        $this->minReadySeconds = $data['minReadySeconds'] ?? null;
        $this->paused = $data['paused'] ?? null;
        $this->progressDeadlineSeconds = $data['progressDeadlineSeconds'] ?? null;
        $this->replicas = $data['replicas'] ?? null;
        $this->revisionHistoryLimit = $data['revisionHistoryLimit'] ?? null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        if (isset($data['strategy'])) {
            $this->strategy = new DeploymentStrategy($data['strategy']);
        }
        if (isset($data['template'])) {
            $this->template = new PodTemplateSpec($data['template']);
        }
    }
}
