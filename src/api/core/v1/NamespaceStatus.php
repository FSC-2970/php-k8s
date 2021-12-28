<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NamespaceCondition;

/**
 * NamespaceStatus is information about the current status of a Namespace.
 */
class NamespaceStatus extends \k8s\Resource
{
    /**
     * @var NamespaceCondition[] $conditions
     * Represents the latest available observations of a namespace's current state.
     */
    public $conditions;

    /**
     * @var string $phase
     * Phase is the current lifecycle phase of the namespace. More info: https:\/\/kubernetes.io\/docs\/tasks\/administer-cluster\/namespaces\/
     */
    public $phase;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new NamespaceCondition($a);
        }, isset($data['conditions']) ? $data['conditions'] : []);
        $this->phase = isset($data['phase']) ? $data['phase'] : null;
    }
}
