<?php

namespace k8s\api\networking\v1;

use k8s\api\networking\v1\HTTPIngressPath;

/**
 * HTTPIngressRuleValue is a list of http selectors pointing to backends. In the example: http:\/\/<host>\/<path>?<searchpart> -> backend where where parts of the url correspond to RFC 3986, this resource will be used to match against everything after the last '\/' and before the first '?' or '#'.
 */
class HTTPIngressRuleValue extends \k8s\Resource
{
    /**
     * @var HTTPIngressPath[] $paths
     * A collection of paths that map requests to backends.
     */
    public $paths;

    public function __construct($data)
    {
        $this->paths = array_map(function ($a) {
            return new HTTPIngressPath($a);
        }, $data['paths'] ?? []);
    }
}
