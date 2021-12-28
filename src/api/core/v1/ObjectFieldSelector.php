<?php

namespace k8s\api\core\v1;

/**
 * ObjectFieldSelector selects an APIVersioned field of an object.
 */
class ObjectFieldSelector extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * Version of the schema the FieldPath is written in terms of, defaults to "v1".
     */
    public $apiVersion;

    /**
     * @var string $fieldPath required
     * Path of the field to select in the specified API version.
     */
    public $fieldPath;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->fieldPath = $data['fieldPath'] ?? null;
    }
}
