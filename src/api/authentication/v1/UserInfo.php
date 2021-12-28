<?php

namespace k8s\api\authentication\v1;

/**
 * UserInfo holds the information about the user needed to implement the user.Info interface.
 */
class UserInfo extends \k8s\Resource
{
    /**
     * @var object $extra
     * Any additional information provided by the authenticator.
     */
    public $extra;

    /**
     * @var string $groups
     * The names of groups this user is a part of.
     */
    public $groups;

    /**
     * @var string $uid
     * A unique value that identifies this user across time. If this user is deleted and another user by the same name is added, they will have different UIDs.
     */
    public $uid;

    /**
     * @var string $username
     * The name that uniquely identifies this user among all active users.
     */
    public $username;

    public function __construct($data)
    {
        $this->extra = $data['extra'] ?? null;
        $this->groups = $data['groups'] ?? [];
        $this->uid = $data['uid'] ?? null;
        $this->username = $data['username'] ?? null;
    }
}
