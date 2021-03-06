<?php

namespace k8s\api\node\v1;

use k8s\api\core\v1\Toleration;

/**
 * Scheduling specifies the scheduling constraints for nodes supporting a RuntimeClass.
 */
class Scheduling extends \k8s\Resource
{
    /**
     * @var object $nodeSelector
     * nodeSelector lists labels that must be present on nodes that support this RuntimeClass. Pods using this RuntimeClass can only be scheduled to a node matched by this selector. The RuntimeClass nodeSelector is merged with a pod's existing nodeSelector. Any conflicts will cause the pod to be rejected in admission.
     */
    public $nodeSelector;

    /**
     * @var Toleration[] $tolerations
     * tolerations are appended (excluding duplicates) to pods running with this RuntimeClass during admission, effectively unioning the set of nodes tolerated by the pod and the RuntimeClass.
     */
    public $tolerations;

    public function __construct($data)
    {
        $this->nodeSelector = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->tolerations = array_map(function ($a) {
            return new Toleration($a);
        }, isset($data['tolerations']) ? $data['tolerations'] : []);
    }
}
