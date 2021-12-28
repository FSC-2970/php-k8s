<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * CustomResourceColumnDefinition specifies a column for server side printing.
 */
class CustomResourceColumnDefinition extends \k8s\Resource
{
    /**
     * @var string $description
     * description is a human readable description of this column.
     */
    public $description;

    /**
     * @var string $format
     * format is an optional OpenAPI type definition for this column. The 'name' format is applied to the primary identifier column to assist in clients identifying column is the resource name. See https:\/\/github.com\/OAI\/OpenAPI-Specification\/blob\/master\/versions\/2.0.md#data-types for details.
     */
    public $format;

    /**
     * @var string $jsonPath required
     * jsonPath is a simple JSON path (i.e. with array notation) which is evaluated against each custom resource to produce the value for this column.
     */
    public $jsonPath;

    /**
     * @var string $name required
     * name is a human readable name for the column.
     */
    public $name;

    /**
     * @var integer $priority
     * priority is an integer defining the relative importance of this column compared to others. Lower numbers are considered higher priority. Columns that may be omitted in limited space scenarios should be given a priority greater than 0.
     */
    public $priority;

    /**
     * @var string $type required
     * type is an OpenAPI type definition for this column. See https:\/\/github.com\/OAI\/OpenAPI-Specification\/blob\/master\/versions\/2.0.md#data-types for details.
     */
    public $type;

    public function __construct($data)
    {
        $this->description = $data['description'] ?? null;
        $this->format = $data['format'] ?? null;
        $this->jsonPath = $data['jsonPath'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->priority = $data['priority'] ?? null;
        $this->type = $data['type'] ?? null;
    }
}
