<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\PriorityLevelConfiguration;
use k8s\apimachinery\pkg\apis\meta\v1\ListMeta;

/**
 * PriorityLevelConfigurationList is a list of PriorityLevelConfiguration objects.
 */
class PriorityLevelConfigurationList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var PriorityLevelConfiguration[] $items
     * `items` is a list of request-priorities.
     */
    public $items;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ListMeta $metadata
     * `metadata` is the standard object's metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->items = array_map(function ($a) {
            return new PriorityLevelConfiguration($a);
        }, isset($data['items']) ? $data['items'] : []);
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ListMeta($data['metadata']);
        }
    }
}
