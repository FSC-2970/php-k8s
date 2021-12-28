<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is carried out.
 */
class Preconditions extends \k8s\Resource
{
    /**
     * @var string $resourceVersion
     * Specifies the target ResourceVersion
     */
    public $resourceVersion;

    /**
     * @var string $uid
     * Specifies the target UID.
     */
    public $uid;

    public function __construct($data)
    {
        $this->resourceVersion = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->uid = isset($data['uid']) ? $data['uid'] : null;
    }
}
