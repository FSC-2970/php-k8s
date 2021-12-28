<?php

namespace k8s\api\core\v1;

/**
 * A topology selector requirement is a selector that matches given label. This is an alpha feature and may change in the future.
 */
class TopologySelectorLabelRequirement extends \k8s\Resource
{
    /**
     * @var string $key required
     * The label key that the selector applies to.
     */
    public $key;

    /**
     * @var string $values required
     * An array of string values. One value must match the label to be selected. Each entry in Values is ORed.
     */
    public $values;

    public function __construct($data)
    {
        $this->key = $data['key'] ?? null;
        $this->values = $data['values'] ?? [];
    }
}
