<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * FlowDistinguisherMethod specifies the method of a flow distinguisher.
 */
class FlowDistinguisherMethod extends \k8s\Resource
{
    /**
     * @var string $type required
     * `type` is the type of flow distinguisher method The supported types are "ByUser" and "ByNamespace". Required.
     */
    public $type;

    public function __construct($data)
    {
        $this->type = $data['type'] ?? null;
    }
}
