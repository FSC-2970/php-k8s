<?php

namespace k8s\api\core\v1;

/**
 * A scoped-resource selector requirement is a selector that contains values, a scope name, and an operator that relates the scope name and values.
 */
class ScopedResourceSelectorRequirement extends \k8s\Resource
{
    /**
     * @var string $operator required
     * Represents a scope's relationship to a set of values. Valid operators are In, NotIn, Exists, DoesNotExist.
     */
    public $operator;

    /**
     * @var string $scopeName required
     * The name of the scope that the selector applies to.
     */
    public $scopeName;

    /**
     * @var string $values
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If the operator is Exists or DoesNotExist, the values array must be empty. This array is replaced during a strategic merge patch.
     */
    public $values;

    public function __construct($data)
    {
        $this->operator = isset($data['operator']) ? $data['operator'] : null;
        $this->scopeName = isset($data['scopeName']) ? $data['scopeName'] : null;
        $this->values = isset($data['values']) ? $data['values'] : [];
    }
}
