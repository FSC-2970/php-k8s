<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * UserSubject holds detailed information for user-kind subject.
 */
class UserSubject extends \k8s\Resource
{
    /**
     * @var string $name required
     * `name` is the username that matches, or "*" to match all usernames. Required.
     */
    public $name;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
    }
}
