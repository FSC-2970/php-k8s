<?php

namespace k8s\api\rbac\v1;

/**
 * Subject contains a reference to the object or user identities a role binding applies to.  This can either hold a direct API object reference, or a value for non-objects such as user and group names.
 */
class Subject extends \k8s\Resource
{
    /**
     * @var string $apiGroup
     * APIGroup holds the API group of the referenced subject. Defaults to "" for ServiceAccount subjects. Defaults to "rbac.authorization.k8s.io" for User and Group subjects.
     */
    public $apiGroup;

    /**
     * @var string $kind required
     * Kind of object being referenced. Values defined by this API group are "User", "Group", and "ServiceAccount". If the Authorizer does not recognized the kind value, the Authorizer should report an error.
     */
    public $kind;

    /**
     * @var string $name required
     * Name of the object being referenced.
     */
    public $name;

    /**
     * @var string $namespace
     * Namespace of the referenced object.  If the object kind is non-namespace, such as "User" or "Group", and this value is not empty the Authorizer should report an error.
     */
    public $namespace;

    public function __construct($data)
    {
        $this->apiGroup = isset($data['apiGroup']) ? $data['apiGroup'] : null;
        $this->kind = isset($data['kind']) ? $data['kind'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->namespace = isset($data['namespace']) ? $data['namespace'] : null;
    }
}
