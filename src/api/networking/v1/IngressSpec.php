<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\IngressBackend;
use k8s\api\networking\v1\IngressRule;
use k8s\api\networking\v1\IngressTLS;

/**
 * IngressSpec describes the Ingress the user wishes to exist.
 */
class IngressSpec extends \k8s\Resource
{
    /**
     * @var IngressBackend $defaultBackend
     * DefaultBackend is the backend that should handle requests that don't match any rule. If Rules are not specified, DefaultBackend must be specified. If DefaultBackend is not set, the handling of requests that do not match any of the rules will be up to the Ingress controller.
     */
    public $defaultBackend;

    /**
     * @var string $ingressClassName
     * IngressClassName is the name of the IngressClass cluster resource. The associated IngressClass defines which controller will implement the resource. This replaces the deprecated `kubernetes.io\/ingress.class` annotation. For backwards compatibility, when that annotation is set, it must be given precedence over this field. The controller may emit a warning if the field and annotation have different values. Implementations of this API should ignore Ingresses without a class specified. An IngressClass resource may be marked as default, which can be used to set a default value for this field. For more information, refer to the IngressClass documentation.
     */
    public $ingressClassName;

    /**
     * @var IngressRule[] $rules
     * A list of host rules used to configure the Ingress. If unspecified, or no rule matches, all traffic is sent to the default backend.
     */
    public $rules;

    /**
     * @var IngressTLS[] $tls
     * TLS configuration. Currently the Ingress only supports a single TLS port, 443. If multiple members of this list specify different hosts, they will be multiplexed on the same port according to the hostname specified through the SNI TLS extension, if the ingress controller fulfilling the ingress supports SNI.
     */
    public $tls;

    public function __construct($data)
    {
        if (isset($data['defaultBackend'])) {
            $this->defaultBackend = new IngressBackend($data['defaultBackend']);
        }
        $this->ingressClassName = isset($data['ingressClassName']) ? $data['ingressClassName'] : null;
        $this->rules = array_map(function ($a) {
            return new IngressRule($a);
        }, isset($data['rules']) ? $data['rules'] : []);
        $this->tls = array_map(function ($a) {
            return new IngressTLS($a);
        }, isset($data['tls']) ? $data['tls'] : []);
    }
}
