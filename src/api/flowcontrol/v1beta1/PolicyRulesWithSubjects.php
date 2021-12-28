<?php

namespace k8s\api\flowcontrol\v1beta1;

use k8s\api\flowcontrol\v1beta1\NonResourcePolicyRule;
use k8s\api\flowcontrol\v1beta1\ResourcePolicyRule;
use k8s\api\flowcontrol\v1beta1\Subject;

/**
 * PolicyRulesWithSubjects prescribes a test that applies to a request to an apiserver. The test considers the subject making the request, the verb being requested, and the resource to be acted upon. This PolicyRulesWithSubjects matches a request if and only if both (a) at least one member of subjects matches the request and (b) at least one member of resourceRules or nonResourceRules matches the request.
 */
class PolicyRulesWithSubjects extends \k8s\Resource
{
    /**
     * @var NonResourcePolicyRule[] $nonResourceRules
     * `nonResourceRules` is a list of NonResourcePolicyRules that identify matching requests according to their verb and the target non-resource URL.
     */
    public $nonResourceRules;

    /**
     * @var ResourcePolicyRule[] $resourceRules
     * `resourceRules` is a slice of ResourcePolicyRules that identify matching requests according to their verb and the target resource. At least one of `resourceRules` and `nonResourceRules` has to be non-empty.
     */
    public $resourceRules;

    /**
     * @var Subject[] $subjects
     * subjects is the list of normal user, serviceaccount, or group that this rule cares about. There must be at least one member in this slice. A slice that includes both the system:authenticated and system:unauthenticated user groups matches every request. Required.
     */
    public $subjects;

    public function __construct($data)
    {
        $this->nonResourceRules = array_map(function ($a) {
            return new NonResourcePolicyRule($a);
        }, isset($data['nonResourceRules']) ? $data['nonResourceRules'] : []);
        $this->resourceRules = array_map(function ($a) {
            return new ResourcePolicyRule($a);
        }, isset($data['resourceRules']) ? $data['resourceRules'] : []);
        $this->subjects = array_map(function ($a) {
            return new Subject($a);
        }, isset($data['subjects']) ? $data['subjects'] : []);
    }
}
