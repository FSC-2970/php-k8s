<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\FlowSchema;
use k8s\apimachinery\pkg\apis\meta\v1\ListMeta;

/**
 * FlowSchemaList is a list of FlowSchema objects.
 */
class FlowSchemaList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var FlowSchema[] $items
     * `items` is a list of FlowSchemas.
     */
    public $items;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ListMeta $metadata
     * `metadata` is the standard list metadata. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    public function __construct($data)
    {
        $this->apiVersion = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->items = array_map(function ($a) {
            return new FlowSchema($a);
        }, isset($data['items']) ? $data['items'] : []);
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        if (isset($data['metadata'])) {
            $this->metadata = new ListMeta($data['metadata']);
        }
    }
}
