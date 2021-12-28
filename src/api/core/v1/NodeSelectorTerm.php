<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\NodeSelectorRequirement;

/**
 * A null or empty node selector term matches no objects. The requirements of them are ANDed. The TopologySelectorTerm type implements a subset of the NodeSelectorTerm.
 */
class NodeSelectorTerm extends \k8s\Resource
{
    /**
     * @var NodeSelectorRequirement[] $matchExpressions
     * A list of node selector requirements by node's labels.
     */
    public $matchExpressions;

    /**
     * @var NodeSelectorRequirement[] $matchFields
     * A list of node selector requirements by node's fields.
     */
    public $matchFields;

    public function __construct($data)
    {
        $this->matchExpressions = array_map(function ($a) {
            return new NodeSelectorRequirement($a);
        }, $data['matchExpressions'] ?? []);
        $this->matchFields = array_map(function ($a) {
            return new NodeSelectorRequirement($a);
        }, $data['matchFields'] ?? []);
    }
}
