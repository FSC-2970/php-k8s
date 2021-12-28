<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\NetworkPolicyPeer;
use k8s\api\networking\v1\NetworkPolicyPort;

/**
 * NetworkPolicyIngressRule describes a particular set of traffic that is allowed to the pods matched by a NetworkPolicySpec's podSelector. The traffic must match both ports and from.
 */
class NetworkPolicyIngressRule extends \k8s\Resource
{
    /**
     * @var NetworkPolicyPeer[] $from
     * List of sources which should be able to access the pods selected for this rule. Items in this list are combined using a logical OR operation. If this field is empty or missing, this rule matches all sources (traffic not restricted by source). If this field is present and contains at least one item, this rule allows traffic only if the traffic matches at least one item in the from list.
     */
    public $from;

    /**
     * @var NetworkPolicyPort[] $ports
     * List of ports which should be made accessible on the pods selected for this rule. Each item in this list is combined using a logical OR. If this field is empty or missing, this rule matches all ports (traffic not restricted by port). If this field is present and contains at least one item, then this rule allows traffic only if the traffic matches at least one port in the list.
     */
    public $ports;

    public function __construct($data)
    {
        $this->from = array_map(function ($a) {
            return new NetworkPolicyPeer($a);
        }, isset($data['from']) ? $data['from'] : []);
        $this->ports = array_map(function ($a) {
            return new NetworkPolicyPort($a);
        }, isset($data['ports']) ? $data['ports'] : []);
    }
}
