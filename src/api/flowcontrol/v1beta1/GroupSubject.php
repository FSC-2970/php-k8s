<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * GroupSubject holds detailed information for group-kind subject.
 */
class GroupSubject extends \k8s\Resource
{
    /**
     * @var string $name required
     * name is the user group that matches, or "*" to match all user groups. See https:\/\/github.com\/kubernetes\/apiserver\/blob\/master\/pkg\/authentication\/user\/user.go for some well-known group names. Required.
     */
    public $name;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
    }
}
