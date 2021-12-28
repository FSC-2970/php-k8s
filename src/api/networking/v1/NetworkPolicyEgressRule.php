<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\NetworkPolicyPort;
use k8s\api\networking\v1\NetworkPolicyPeer;

/**
 * NetworkPolicyEgressRule describes a particular set of traffic that is allowed out of pods matched by a NetworkPolicySpec's podSelector. The traffic must match both ports and to. This type is beta-level in 1.8
 */
class NetworkPolicyEgressRule extends \k8s\Resource
{
    /**
     * @var NetworkPolicyPort[] $ports
     * List of destination ports for outgoing traffic. Each item in this list is combined using a logical OR. If this field is empty or missing, this rule matches all ports (traffic not restricted by port). If this field is present and contains at least one item, then this rule allows traffic only if the traffic matches at least one port in the list.
     */
    public $ports;

    /**
     * @var NetworkPolicyPeer[] $to
     * List of destinations for outgoing traffic of pods selected for this rule. Items in this list are combined using a logical OR operation. If this field is empty or missing, this rule matches all destinations (traffic not restricted by destination). If this field is present and contains at least one item, this rule allows traffic only if the traffic matches at least one item in the to list.
     */
    public $to;

    public function __construct($data)
    {
        $this->ports = array_map(function ($a) {
            return new NetworkPolicyPort($a);
        }, isset($data['ports']) ? $data['ports'] : []);
        $this->to = array_map(function ($a) {
            return new NetworkPolicyPeer($a);
        }, isset($data['to']) ? $data['to'] : []);
    }
}
