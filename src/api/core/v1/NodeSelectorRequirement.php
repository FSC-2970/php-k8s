<?php

namespace k8s\api\core\v1;

/**
 * A node selector requirement is a selector that contains values, a key, and an operator that relates the key and values.
 */
class NodeSelectorRequirement extends \k8s\Resource
{
    /**
     * @var string $key required
     * The label key that the selector applies to.
     */
    public $key;

    /**
     * @var string $operator required
     * Represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists, DoesNotExist. Gt, and Lt.
     */
    public $operator;

    /**
     * @var string $values
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If the operator is Exists or DoesNotExist, the values array must be empty. If the operator is Gt or Lt, the values array must have a single element, which will be interpreted as an integer. This array is replaced during a strategic merge patch.
     */
    public $values;

    public function __construct($data)
    {
        $this->key = isset($data['key']) ? $data['key'] : null;
        $this->operator = isset($data['operator']) ? $data['operator'] : null;
        $this->values = isset($data['values']) ? $data['values'] : [];
    }
}
