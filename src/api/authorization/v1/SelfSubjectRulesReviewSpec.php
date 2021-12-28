<?php

namespace k8s\api\authorization\v1;

/**
 * SelfSubjectRulesReviewSpec defines the specification for SelfSubjectRulesReview.
 */
class SelfSubjectRulesReviewSpec extends \k8s\Resource
{
    /**
     * @var string $namespace
     * Namespace to evaluate rules for. Required.
     */
    public $namespace;

    public function __construct($data)
    {
        $this->namespace = $data['namespace'] ?? null;
    }
}
