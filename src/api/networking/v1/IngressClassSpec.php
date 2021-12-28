<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\IngressClassParametersReference;

/**
 * IngressClassSpec provides information about the class of an Ingress.
 */
class IngressClassSpec extends \k8s\Resource
{
    /**
     * @var string $controller
     * Controller refers to the name of the controller that should handle this class. This allows for different "flavors" that are controlled by the same controller. For example, you may have different Parameters for the same implementing controller. This should be specified as a domain-prefixed path no more than 250 characters in length, e.g. "acme.io\/ingress-controller". This field is immutable.
     */
    public $controller;

    /**
     * @var IngressClassParametersReference $parameters
     * Parameters is a link to a custom resource containing additional configuration for the controller. This is optional if the controller does not require extra parameters.
     */
    public $parameters;

    public function __construct($data)
    {
        $this->controller = $data['controller'] ?? null;
        if (isset($data['parameters'])) {
            $this->parameters = new IngressClassParametersReference($data['parameters']);
        }
    }
}
