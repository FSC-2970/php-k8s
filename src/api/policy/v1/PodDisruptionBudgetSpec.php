<?php

namespace k8s\api\policy\v1;

use k8s\apimachinery\pkg\util\intstr\IntOrString;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * PodDisruptionBudgetSpec is a description of a PodDisruptionBudget.
 */
class PodDisruptionBudgetSpec extends \k8s\Resource
{
    /**
     * @var IntOrString $maxUnavailable
     * An eviction is allowed if at most "maxUnavailable" pods selected by "selector" are unavailable after the eviction, i.e. even in absence of the evicted pod. For example, one can prevent all voluntary evictions by specifying 0. This is a mutually exclusive setting with "minAvailable".
     */
    public $maxUnavailable;

    /**
     * @var IntOrString $minAvailable
     * An eviction is allowed if at least "minAvailable" pods selected by "selector" will still be available after the eviction, i.e. even in the absence of the evicted pod.  So for example you can prevent all voluntary evictions by specifying "100%".
     */
    public $minAvailable;

    /**
     * @var LabelSelector $selector
     * Label query over pods whose evictions are managed by the disruption budget. A null selector will match no pods, while an empty ({}) selector will select all pods within the namespace.
     */
    public $selector;

    public function __construct($data)
    {
        if (isset($data['maxUnavailable'])) {
            $this->maxUnavailable = new IntOrString($data['maxUnavailable']);
        }
        if (isset($data['minAvailable'])) {
            $this->minAvailable = new IntOrString($data['minAvailable']);
        }
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
    }
}
