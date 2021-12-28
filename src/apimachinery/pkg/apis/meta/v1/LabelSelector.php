<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelectorRequirement;

/**
 * A label selector is a label query over a set of resources. The result of matchLabels and matchExpressions are ANDed. An empty label selector matches all objects. A null label selector matches no objects.
 */
class LabelSelector extends \k8s\Resource
{
    /**
     * @var LabelSelectorRequirement[] $matchExpressions
     * matchExpressions is a list of label selector requirements. The requirements are ANDed.
     */
    public $matchExpressions;

    /**
     * @var object $matchLabels
     * matchLabels is a map of {key,value} pairs. A single {key,value} in the matchLabels map is equivalent to an element of matchExpressions, whose key field is "key", the operator is "In", and the values array contains only "value". The requirements are ANDed.
     */
    public $matchLabels;

    public function __construct($data)
    {
        $this->matchExpressions = array_map(function ($a) {
            return new LabelSelectorRequirement($a);
        }, $data['matchExpressions'] ?? []);
        $this->matchLabels = $data['matchLabels'] ?? null;
    }
}
