<?php

namespace k8s\api\networking\v1;

/**
 * IPBlock describes a particular CIDR (Ex. "192.168.1.1\/24","2001:db9::\/64") that is allowed to the pods matched by a NetworkPolicySpec's podSelector. The except entry describes CIDRs that should not be included within this rule.
 */
class IPBlock extends \k8s\Resource
{
    /**
     * @var string $cidr required
     * CIDR is a string representing the IP Block Valid examples are "192.168.1.1\/24" or "2001:db9::\/64"
     */
    public $cidr;

    /**
     * @var string $except
     * Except is a slice of CIDRs that should not be included within an IP Block Valid examples are "192.168.1.1\/24" or "2001:db9::\/64" Except values will be rejected if they are outside the CIDR range
     */
    public $except;

    public function __construct($data)
    {
        $this->cidr = isset($data['cidr']) ? $data['cidr'] : null;
        $this->except = isset($data['except']) ? $data['except'] : [];
    }
}
