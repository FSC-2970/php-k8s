<?php

namespace k8s\api\discovery\v1beta1;

/**
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions extends \k8s\Resource
{
    /**
     * @var boolean $ready
     * ready indicates that this endpoint is prepared to receive traffic, according to whatever system is managing the endpoint. A nil value indicates an unknown state. In most cases consumers should interpret this unknown state as ready. For compatibility reasons, ready should never be "true" for terminating endpoints.
     */
    public $ready;

    /**
     * @var boolean $serving
     * serving is identical to ready except that it is set regardless of the terminating state of endpoints. This condition should be set to true for a ready endpoint that is terminating. If nil, consumers should defer to the ready condition. This field can be enabled with the EndpointSliceTerminatingCondition feature gate.
     */
    public $serving;

    /**
     * @var boolean $terminating
     * terminating indicates that this endpoint is terminating. A nil value indicates an unknown state. Consumers should interpret this unknown state to mean that the endpoint is not terminating. This field can be enabled with the EndpointSliceTerminatingCondition feature gate.
     */
    public $terminating;

    public function __construct($data)
    {
        $this->ready = isset($data['ready']) ? $data['ready'] : null;
        $this->serving = isset($data['serving']) ? $data['serving'] : null;
        $this->terminating = isset($data['terminating']) ? $data['terminating'] : null;
    }
}
