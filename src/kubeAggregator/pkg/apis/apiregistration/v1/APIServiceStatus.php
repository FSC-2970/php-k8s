<?php

namespace k8s\kubeAggregator\pkg\apis\apiregistration\v1;

use k8s\kubeAggregator\pkg\apis\apiregistration\v1\APIServiceCondition;

/**
 * APIServiceStatus contains derived information about an API server
 */
class APIServiceStatus extends \k8s\Resource
{
    /**
     * @var APIServiceCondition[] $conditions
     * Current service state of apiService.
     */
    public $conditions;

    public function __construct($data)
    {
        $this->conditions = array_map(function ($a) {
            return new APIServiceCondition($a);
        }, isset($data['conditions']) ? $data['conditions'] : []);
    }
}
