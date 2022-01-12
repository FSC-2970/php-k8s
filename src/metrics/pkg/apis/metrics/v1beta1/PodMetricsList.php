<?php

namespace k8s\metrics\pkg\apis\metrics\v1beta1;

use k8s\metrics\pkg\apis\metrics\v1beta1\PodMetrics;
use k8s\apimachinery\pkg\apis\meta\v1\ListMeta_v2;

/**
 * PodMetricsList is a list of PodMetrics.
 */
class PodMetricsList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var PodMetrics[] $items
     * List of pod metrics.
     */
    public $items;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ListMeta_v2 $metadata
     * Standard list metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/api-conventions.md#types-kinds
     */
    public $metadata;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->items = array_map(function ($a) {
            return new PodMetrics($a);
        }, isset($data['items']) ? $data['items'] : []);
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ListMeta_v2($data['metadata']);
        }
    }
}
