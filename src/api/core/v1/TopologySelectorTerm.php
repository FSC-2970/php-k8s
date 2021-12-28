<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\TopologySelectorLabelRequirement;

/**
 * A topology selector term represents the result of label queries. A null or empty topology selector term matches no objects. The requirements of them are ANDed. It provides a subset of functionality as NodeSelectorTerm. This is an alpha feature and may change in the future.
 */
class TopologySelectorTerm extends \k8s\Resource
{
    /**
     * @var TopologySelectorLabelRequirement[] $matchLabelExpressions
     * A list of topology selector requirements by labels.
     */
    public $matchLabelExpressions;

    public function __construct($data)
    {
        $this->matchLabelExpressions = array_map(function ($a) {
            return new TopologySelectorLabelRequirement($a);
        }, $data['matchLabelExpressions'] ?? []);
    }
}
