<?php

namespace k8s\api\discovery\v1;

use k8s\api\discovery\v1\EndpointConditions;
use k8s\api\discovery\v1\EndpointHints;
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
     * @var object $deprecatedTopology
     * deprecatedTopology contains topology information part of the v1beta1 API. This field is deprecated, and will be removed when the v1beta1 API is removed (no sooner than kubernetes v1.24).  While this field can hold values, it is not writable through the v1 API, and any attempts to write to it will be silently ignored. Topology information can be found in the zone and nodeName fields instead.
     */
    public $deprecatedTopology;

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
     * @var string $zone
     * zone is the name of the Zone this endpoint exists in.
     */
    public $zone;

    public function __construct($data)
    {
        $this->addresses = isset($data['addresses']) ? $data['addresses'] : [];
        if (isset($data['conditions'])) {
            $this->conditions = new EndpointConditions($data['conditions']);
        }
        $this->deprecatedTopology = isset($data['deprecatedTopology']) ? $data['deprecatedTopology'] : null;
        if (isset($data['hints'])) {
            $this->hints = new EndpointHints($data['hints']);
        }
        $this->hostname = isset($data['hostname']) ? $data['hostname'] : null;
        $this->nodeName = isset($data['nodeName']) ? $data['nodeName'] : null;
        if (isset($data['targetRef'])) {
            $this->targetRef = new ObjectReference($data['targetRef']);
        }
        $this->zone = isset($data['zone']) ? $data['zone'] : null;
    }
}
