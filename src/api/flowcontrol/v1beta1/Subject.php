<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\GroupSubject;
use k8s\api\flowcontrol\v1beta1\ServiceAccountSubject;
use k8s\api\flowcontrol\v1beta1\UserSubject;

/**
 * Subject matches the originator of a request, as identified by the request authentication system. There are three ways of matching an originator; by user, group, or service account.
 */
class Subject extends \k8s\Resource
{
    /**
     * @var GroupSubject $group
     * `group` matches based on user group name.
     */
    public $group;

    /**
     * @var string $kind required
     * `kind` indicates which one of the other fields is non-empty. Required
     */
    public $kind;

    /**
     * @var ServiceAccountSubject $serviceAccount
     * `serviceAccount` matches ServiceAccounts.
     */
    public $serviceAccount;

    /**
     * @var UserSubject $user
     * `user` matches based on username.
     */
    public $user;

    public function __construct($data)
    {
        if (isset($data['group'])) {
            $this->group = new GroupSubject($data['group']);
        }
        $this->kind = $data['kind'] ?? null;
        if (isset($data['serviceAccount'])) {
            $this->serviceAccount = new ServiceAccountSubject($data['serviceAccount']);
        }
        if (isset($data['user'])) {
            $this->user = new UserSubject($data['user']);
        }
    }
}
