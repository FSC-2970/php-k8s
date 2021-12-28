<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\JSONSchemaProps;

/**
 * CustomResourceValidation is a list of validation methods for CustomResources.
 */
class CustomResourceValidation extends \k8s\Resource
{
    /**
     * @var JSONSchemaProps $openAPIV3Schema
     * openAPIV3Schema is the OpenAPI v3 schema to use for validation and pruning.
     */
    public $openAPIV3Schema;

    public function __construct($data)
    {
        if (isset($data['openAPIV3Schema'])) {
            $this->openAPIV3Schema = new JSONSchemaProps($data['openAPIV3Schema']);
        }
    }
}
