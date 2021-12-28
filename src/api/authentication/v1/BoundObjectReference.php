<?php

namespace k8s\api\authentication\v1;

/**
 * BoundObjectReference is a reference to an object that a token is bound to.
 */
class BoundObjectReference extends \k8s\Resource
{
    /**
     * @var string $apiVersion
     * API version of the referent.
     */
    public $apiVersion;

    /**
     * @var string $kind
     * Kind of the referent. Valid kinds are 'Pod' and 'Secret'.
     */
    public $kind;

    /**
     * @var string $name
     * Name of the referent.
     */
    public $name;

    /**
     * @var string $uid
     * UID of the referent.
     */
    public $uid;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->uid = $data['uid'] ?? null;
    }
}
