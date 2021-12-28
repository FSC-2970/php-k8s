<?php

namespace k8s\api\authorization\v1;

/**
 * NonResourceRule holds information that describes a rule for the non-resource
 */
class NonResourceRule extends \k8s\Resource
{
    /**
     * @var string $nonResourceURLs
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s are allowed, but only as the full, final step in the path.  "*" means all.
     */
    public $nonResourceURLs;

    /**
     * @var string $verbs required
     * Verb is a list of kubernetes non-resource API verbs, like: get, post, put, delete, patch, head, options.  "*" means all.
     */
    public $verbs;

    public function __construct($data)
    {
        $this->nonResourceURLs = isset($data['nonResourceURLs']) ? $data['nonResourceURLs'] : [];
        $this->verbs = isset($data['verbs']) ? $data['verbs'] : [];
    }
}
