<?php

namespace k8s\api\authorization\v1;

use k8s\api\authorization\v1\NonResourceRule;
use k8s\api\authorization\v1\ResourceRule;

/**
 * SubjectRulesReviewStatus contains the result of a rules check. This check can be incomplete depending on the set of authorizers the server is configured with and any errors experienced during evaluation. Because authorization rules are additive, if a rule appears in a list it's safe to assume the subject has that permission, even if that list is incomplete.
 */
class SubjectRulesReviewStatus extends \k8s\Resource
{
    /**
     * @var string $evaluationError
     * EvaluationError can appear in combination with Rules. It indicates an error occurred during rule evaluation, such as an authorizer that doesn't support rule evaluation, and that ResourceRules and\/or NonResourceRules may be incomplete.
     */
    public $evaluationError;

    /**
     * @var boolean $incomplete required
     * Incomplete is true when the rules returned by this call are incomplete. This is most commonly encountered when an authorizer, such as an external authorizer, doesn't support rules evaluation.
     */
    public $incomplete;

    /**
     * @var NonResourceRule[] $nonResourceRules
     * NonResourceRules is the list of actions the subject is allowed to perform on non-resources. The list ordering isn't significant, may contain duplicates, and possibly be incomplete.
     */
    public $nonResourceRules;

    /**
     * @var ResourceRule[] $resourceRules
     * ResourceRules is the list of actions the subject is allowed to perform on resources. The list ordering isn't significant, may contain duplicates, and possibly be incomplete.
     */
    public $resourceRules;

    public function __construct($data)
    {
        $this->evaluationError = $data['evaluationError'] ?? null;
        $this->incomplete = $data['incomplete'] ?? null;
        $this->nonResourceRules = array_map(function ($a) {
            return new NonResourceRule($a);
        }, $data['nonResourceRules'] ?? []);
        $this->resourceRules = array_map(function ($a) {
            return new ResourceRule($a);
        }, $data['resourceRules'] ?? []);
    }
}
