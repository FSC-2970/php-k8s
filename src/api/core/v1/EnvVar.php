<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\EnvVarSource;

/**
 * EnvVar represents an environment variable present in a Container.
 */
class EnvVar extends \k8s\Resource
{
    /**
     * @var string $name required
     * Name of the environment variable. Must be a C_IDENTIFIER.
     */
    public $name;

    /**
     * @var string $value
     * Variable references $(VAR_NAME) are expanded using the previously defined environment variables in the container and any service environment variables. If a variable cannot be resolved, the reference in the input string will be unchanged. Double $$ are reduced to a single $, which allows for escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the string literal "$(VAR_NAME)". Escaped references will never be expanded, regardless of whether the variable exists or not. Defaults to "".
     */
    public $value;

    /**
     * @var EnvVarSource $valueFrom
     * Source for the environment variable's value. Cannot be used if value is not empty.
     */
    public $valueFrom;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->value = isset($data['value']) ? $data['value'] : null;
        if (isset($data['valueFrom'])) {
            $this->valueFrom = new EnvVarSource($data['valueFrom']);
        }
    }
}
