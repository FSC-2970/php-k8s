<?php

namespace k8s\api\rbac\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * AggregationRule describes how to locate ClusterRoles to aggregate into the ClusterRole
 */
class AggregationRule extends \k8s\Resource
{
    /**
     * @var LabelSelector[] $clusterRoleSelectors
     * ClusterRoleSelectors holds a list of selectors which will be used to find ClusterRoles and create the rules. If any of the selectors match, then the ClusterRole's permissions will be added
     */
    public $clusterRoleSelectors;

    public function __construct($data)
    {
        $this->clusterRoleSelectors = array_map(function ($a) {
            return new LabelSelector($a);
        }, isset($data['clusterRoleSelectors']) ? $data['clusterRoleSelectors'] : []);
    }
}
