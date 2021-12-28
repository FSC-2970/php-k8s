<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeSelectorTerm;

/**
 * A node selector represents the union of the results of one or more label queries over a set of nodes; that is, it represents the OR of the selectors represented by the node selector terms.
 */
class NodeSelector extends \k8s\Resource
{
    /**
     * @var NodeSelectorTerm[] $nodeSelectorTerms
     * Required. A list of node selector terms. The terms are ORed.
     */
    public $nodeSelectorTerms;

    public function __construct($data)
    {
        $this->nodeSelectorTerms = array_map(function ($a) {
            return new NodeSelectorTerm($a);
        }, $data['nodeSelectorTerms'] ?? []);
    }
}
