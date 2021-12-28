<?php

namespace k8s\api\core\v1;

/**
 * SecretReference represents a Secret Reference. It has enough information to retrieve secret in any namespace
 */
class SecretReference extends \k8s\Resource
{
    /**
     * @var string $name
     * Name is unique within a namespace to reference a secret resource.
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace defines the space within which the secret name must be unique.
     */
    public $namespace;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
        $this->namespace = $data['namespace'] ?? null;
    }
}
