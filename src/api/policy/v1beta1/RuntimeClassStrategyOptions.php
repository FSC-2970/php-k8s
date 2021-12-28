<?php

namespace k8s\api\policy\v1beta1;

/**
 * RuntimeClassStrategyOptions define the strategy that will dictate the allowable RuntimeClasses for a pod.
 */
class RuntimeClassStrategyOptions extends \k8s\Resource
{
    /**
     * @var string $allowedRuntimeClassNames required
     * allowedRuntimeClassNames is an allowlist of RuntimeClass names that may be specified on a pod. A value of "*" means that any RuntimeClass name is allowed, and must be the only item in the list. An empty list requires the RuntimeClassName field to be unset.
     */
    public $allowedRuntimeClassNames;

    /**
     * @var string $defaultRuntimeClassName
     * defaultRuntimeClassName is the default RuntimeClassName to set on the pod. The default MUST be allowed by the allowedRuntimeClassNames list. A value of nil does not mutate the Pod.
     */
    public $defaultRuntimeClassName;

    public function __construct($data)
    {
        $this->allowedRuntimeClassNames = $data['allowedRuntimeClassNames'] ?? [];
        $this->defaultRuntimeClassName = $data['defaultRuntimeClassName'] ?? null;
    }
}
