<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\api\core\v1\PodTemplateSpec;
use k8s\api\apps\v1\DaemonSetUpdateStrategy;

/**
 * DaemonSetSpec is the specification of a daemon set.
 */
class DaemonSetSpec extends \k8s\Resource
{
    /**
     * @var integer $minReadySeconds
     * The minimum number of seconds for which a newly created DaemonSet pod should be ready without any of its container crashing, for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready).
     */
    public $minReadySeconds;

    /**
     * @var integer $revisionHistoryLimit
     * The number of old history to retain to allow rollback. This is a pointer to distinguish between explicit zero and not specified. Defaults to 10.
     */
    public $revisionHistoryLimit;

    /**
     * @var LabelSelector $selector
     * A label query over pods that are managed by the daemon set. Must match in order to be controlled. It must match the pod template's labels. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/labels\/#label-selectors
     */
    public $selector;

    /**
     * @var PodTemplateSpec $template
     * An object that describes the pod that will be created. The DaemonSet will create exactly one copy of this pod on every node that matches the template's node selector (or on every node if no node selector is specified). More info: https:\/\/kubernetes.io\/docs\/concepts\/workloads\/controllers\/replicationcontroller#pod-template
     */
    public $template;

    /**
     * @var DaemonSetUpdateStrategy $updateStrategy
     * An update strategy to replace existing DaemonSet pods with new pods.
     */
    public $updateStrategy;

    public function __construct($data)
    {
        $this->minReadySeconds = $data['minReadySeconds'] ?? null;
        $this->revisionHistoryLimit = $data['revisionHistoryLimit'] ?? null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        if (isset($data['template'])) {
            $this->template = new PodTemplateSpec($data['template']);
        }
        if (isset($data['updateStrategy'])) {
            $this->updateStrategy = new DaemonSetUpdateStrategy($data['updateStrategy']);
        }
    }
}
