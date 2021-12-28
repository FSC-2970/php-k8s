<?php

namespace k8s\api\discovery\v1beta1;

use k8s\api\discovery\v1beta1\EndpointConditions;
use k8s\api\discovery\v1beta1\EndpointHints;
use k8s\api\core\v1\ObjectReference;

/**
 * Endpoint represents a single logical "backend" implementing a service.
 */
class Endpoint extends \k8s\Resource
{
    /**
     * @var string $addresses required
     * addresses of this endpoint. The contents of this field are interpreted according to the corresponding EndpointSlice addressType field. Consumers must handle different types of addresses in the context of their own capabilities. This must contain at least one address but no more than 100.
     */
    public $addresses;

    /**
     * @var EndpointConditions $conditions
     * conditions contains information about the current status of the endpoint.
     */
    public $conditions;

    /**
     * @var EndpointHints $hints
     * hints contains information associated with how an endpoint should be consumed.
     */
    public $hints;

    /**
     * @var string $hostname
     * hostname of this endpoint. This field may be used by consumers of endpoints to distinguish endpoints from each other (e.g. in DNS names). Multiple endpoints which use the same hostname should be considered fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS Label (RFC 1123) validation.
     */
    public $hostname;

    /**
     * @var string $nodeName
     * nodeName represents the name of the Node hosting this endpoint. This can be used to determine endpoints local to a Node. This field can be enabled with the EndpointSliceNodeName feature gate.
     */
    public $nodeName;

    /**
     * @var ObjectReference $targetRef
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     */
    public $targetRef;

    /**
     * @var object $topology
     * topology contains arbitrary topology information associated with the endpoint. These key\/value pairs must conform with the label format. https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/labels Topology may include a maximum of 16 key\/value pairs. This includes, but is not limited to the following well known keys: * kubernetes.io\/hostname: the value indicates the hostname of the node
     *   where the endpoint is located. This should match the corresponding
     *   node label.
     * * topology.kubernetes.io\/zone: the value indicates the zone where the
     *   endpoint is located. This should match the corresponding node label.
     * * topology.kubernetes.io\/region: the value indicates the region where the
     *   endpoint is located. This should match the corresponding node label.
     * This field is deprecated and will be removed in future api versions.
     */
    public $topology;

    public function __construct($data)
    {
        $this->addresses = $data['addresses'] ?? [];
        if (isset($data['conditions'])) {
            $this->conditions = new EndpointConditions($data['conditions']);
        }
        if (isset($data['hints'])) {
            $this->hints = new EndpointHints($data['hints']);
        }
        $this->hostname = $data['hostname'] ?? null;
        $this->nodeName = $data['nodeName'] ?? null;
        if (isset($data['targetRef'])) {
            $this->targetRef = new ObjectReference($data['targetRef']);
        }
        $this->topology = $data['topology'] ?? null;
    }
}
