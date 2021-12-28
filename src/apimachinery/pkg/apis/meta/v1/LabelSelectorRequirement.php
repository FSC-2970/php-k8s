<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * A label selector requirement is a selector that contains values, a key, and an operator that relates the key and values.
 */
class LabelSelectorRequirement extends \k8s\Resource
{
    /**
     * @var string $key required
     * key is the label key that the selector applies to.
     */
    public $key;

    /**
     * @var string $operator required
     * operator represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists and DoesNotExist.
     */
    public $operator;

    /**
     * @var string $values
     * values is an array of string values. If the operator is In or NotIn, the values array must be non-empty. If the operator is Exists or DoesNotExist, the values array must be empty. This array is replaced during a strategic merge patch.
     */
    public $values;

    public function __construct($data)
    {
        $this->key = $data['key'] ?? null;
        $this->operator = $data['operator'] ?? null;
        $this->values = $data['values'] ?? [];
    }
}
