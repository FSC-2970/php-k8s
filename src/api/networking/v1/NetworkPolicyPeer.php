<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\IPBlock;
use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;

/**
 * NetworkPolicyPeer describes a peer to allow traffic to\/from. Only certain combinations of fields are allowed
 */
class NetworkPolicyPeer extends \k8s\Resource
{
    /**
     * @var IPBlock $ipBlock
     * IPBlock defines policy on a particular IPBlock. If this field is set then neither of the other fields can be.
     */
    public $ipBlock;

    /**
     * @var LabelSelector $namespaceSelector
     * Selects Namespaces using cluster-scoped labels. This field follows standard label selector semantics; if present but empty, it selects all namespaces.
     * 
     * If PodSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects all Pods in the Namespaces selected by NamespaceSelector.
     */
    public $namespaceSelector;

    /**
     * @var LabelSelector $podSelector
     * This is a label selector which selects Pods. This field follows standard label selector semantics; if present but empty, it selects all pods.
     * 
     * If NamespaceSelector is also set, then the NetworkPolicyPeer as a whole selects the Pods matching PodSelector in the Namespaces selected by NamespaceSelector. Otherwise it selects the Pods matching PodSelector in the policy's own Namespace.
     */
    public $podSelector;

    public function __construct($data)
    {
        if (isset($data['ipBlock'])) {
            $this->ipBlock = new IPBlock($data['ipBlock']);
        }
        if (isset($data['namespaceSelector'])) {
            $this->namespaceSelector = new LabelSelector($data['namespaceSelector']);
        }
        if (isset($data['podSelector'])) {
            $this->podSelector = new LabelSelector($data['podSelector']);
        }
    }
}
