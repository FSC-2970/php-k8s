<?php

namespace k8s\api\core\v1;

/**
 * LocalObjectReference contains enough information to let you locate the referenced object inside the same namespace.
 */
class LocalObjectReference extends \k8s\Resource
{
    /**
     * @var string $name
     * Name of the referent. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/names\/#names
     */
    public $name;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
    }
}
