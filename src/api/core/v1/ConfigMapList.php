<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ConfigMap;
use k8s\apimachinery\pkg\apis\meta\v1\ListMeta;

/**
 * ConfigMapList is a resource containing a list of ConfigMap objects.
 */
class ConfigMapList extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var ConfigMap[] $items
     * Items is the list of ConfigMaps.
     */
    public $items;

    /**
     * @var string $kind
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ListMeta $metadata
     * More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#metadata
     */
    public $metadata;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->items = array_map(function ($a) {
            return new ConfigMap($a);
        }, $data['items'] ?? []);
        $this->kind = $data['kind'] ?? null;
        if (isset($data['metadata'])) {
            $this->metadata = new ListMeta($data['metadata']);
        }
    }
}
