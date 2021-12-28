<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\FlowDistinguisherMethod;
use k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationReference;
use k8s\api\flowcontrol\v1beta1\PolicyRulesWithSubjects;

/**
 * FlowSchemaSpec describes how the FlowSchema's specification looks like.
 */
class FlowSchemaSpec extends \k8s\Resource
{
    /**
     * @var FlowDistinguisherMethod $distinguisherMethod
     * `distinguisherMethod` defines how to compute the flow distinguisher for requests that match this schema. `nil` specifies that the distinguisher is disabled and thus will always be the empty string.
     */
    public $distinguisherMethod;

    /**
     * @var integer $matchingPrecedence
     * `matchingPrecedence` is used to choose among the FlowSchemas that match a given request. The chosen FlowSchema is among those with the numerically lowest (which we take to be logically highest) MatchingPrecedence.  Each MatchingPrecedence value must be ranged in [1,10000]. Note that if the precedence is not specified, it will be set to 1000 as default.
     */
    public $matchingPrecedence;

    /**
     * @var PriorityLevelConfigurationReference $priorityLevelConfiguration
     * `priorityLevelConfiguration` should reference a PriorityLevelConfiguration in the cluster. If the reference cannot be resolved, the FlowSchema will be ignored and marked as invalid in its status. Required.
     */
    public $priorityLevelConfiguration;

    /**
     * @var PolicyRulesWithSubjects[] $rules
     * `rules` describes which requests will match this flow schema. This FlowSchema matches a request if and only if at least one member of rules matches the request. if it is an empty slice, there will be no requests matching the FlowSchema.
     */
    public $rules;

    public function __construct($data)
    {
        if (isset($data['distinguisherMethod'])) {
            $this->distinguisherMethod = new FlowDistinguisherMethod($data['distinguisherMethod']);
        }
        $this->matchingPrecedence = isset($data['matchingPrecedence']) ? $data['matchingPrecedence'] : null;
        if (isset($data['priorityLevelConfiguration'])) {
            $this->priorityLevelConfiguration = new PriorityLevelConfigurationReference($data['priorityLevelConfiguration']);
        }
        $this->rules = array_map(function ($a) {
            return new PolicyRulesWithSubjects($a);
        }, isset($data['rules']) ? $data['rules'] : []);
    }
}
