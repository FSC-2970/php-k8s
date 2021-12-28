<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * OwnerReference contains enough information to let you identify an owning object. An owning object must be in the same namespace as the dependent, or be cluster-scoped, so there is no namespace field.
 */
class OwnerReference extends \k8s\Resource
{
    /**
     * @var string $apiVersion required
     * API version of the referent.
     */
    public $apiVersion;

    /**
     * @var boolean $blockOwnerDeletion
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then the owner cannot be deleted from the key-value store until this reference is removed. Defaults to false. To set this field, a user needs "delete" permission of the owner, otherwise 422 (Unprocessable Entity) will be returned.
     */
    public $blockOwnerDeletion;

    /**
     * @var boolean $controller
     * If true, this reference points to the managing controller.
     */
    public $controller;

    /**
     * @var string $kind required
     * Kind of the referent. More info: https:\/\/git.k8s.io\/community\/contributors\/devel\/sig-architecture\/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string $name required
     * Name of the referent. More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#names
     */
    public $name;

    /**
     * @var string $uid required
     * UID of the referent. More info: http:\/\/kubernetes.io\/docs\/user-guide\/identifiers#uids
     */
    public $uid;

    public function __construct($data)
    {
        $this->apiVersion = $data['apiVersion'] ?? null;
        $this->blockOwnerDeletion = $data['blockOwnerDeletion'] ?? null;
        $this->controller = $data['controller'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->uid = $data['uid'] ?? null;
    }
}
