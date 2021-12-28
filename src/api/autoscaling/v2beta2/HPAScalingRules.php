<?php

namespace k8s\api\autoscaling\v2beta2;

use k8s\api\autoscaling\v2beta2\HPAScalingPolicy;

/**
 * HPAScalingRules configures the scaling behavior for one direction. These Rules are applied after calculating DesiredReplicas from metrics for the HPA. They can limit the scaling velocity by specifying scaling policies. They can prevent flapping by specifying the stabilization window, so that the number of replicas is not set instantly, instead, the safest value from the stabilization window is chosen.
 */
class HPAScalingRules extends \k8s\Resource
{
    /**
     * @var HPAScalingPolicy[] $policies
     * policies is a list of potential scaling polices which can be used during scaling. At least one policy must be specified, otherwise the HPAScalingRules will be discarded as invalid
     */
    public $policies;

    /**
     * @var string $selectPolicy
     * selectPolicy is used to specify which policy should be used. If not set, the default value MaxPolicySelect is used.
     */
    public $selectPolicy;

    /**
     * @var integer $stabilizationWindowSeconds
     * StabilizationWindowSeconds is the number of seconds for which past recommendations should be considered while scaling up or scaling down. StabilizationWindowSeconds must be greater than or equal to zero and less than or equal to 3600 (one hour). If not set, use the default values: - For scale up: 0 (i.e. no stabilization is done). - For scale down: 300 (i.e. the stabilization window is 300 seconds long).
     */
    public $stabilizationWindowSeconds;

    public function __construct($data)
    {
        $this->policies = array_map(function ($a) {
            return new HPAScalingPolicy($a);
        }, $data['policies'] ?? []);
        $this->selectPolicy = $data['selectPolicy'] ?? null;
        $this->stabilizationWindowSeconds = $data['stabilizationWindowSeconds'] ?? null;
    }
}