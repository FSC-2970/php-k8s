<?php

namespace k8s\api\authorization\v1;

/**
 * NonResourceAttributes includes the authorization attributes available for non-resource requests to the Authorizer interface
 */
class NonResourceAttributes extends \k8s\Resource
{
    /**
     * @var string $path
     * Path is the URL path of the request
     */
    public $path;

    /**
     * @var string $verb
     * Verb is the standard HTTP verb
     */
    public $verb;

    public function __construct($data)
    {
        $this->path = $data['path'] ?? null;
        $this->verb = $data['verb'] ?? null;
    }
}
