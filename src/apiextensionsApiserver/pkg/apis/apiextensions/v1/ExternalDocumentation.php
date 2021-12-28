<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * ExternalDocumentation allows referencing an external resource for extended documentation.
 */
class ExternalDocumentation extends \k8s\Resource
{
    /**
     * @var string $description
     */
    public $description;

    /**
     * @var string $url
     */
    public $url;

    public function __construct($data)
    {
        $this->description = isset($data['description']) ? $data['description'] : null;
        $this->url = isset($data['url']) ? $data['url'] : null;
    }
}
