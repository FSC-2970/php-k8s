<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\PodDNSConfigOption;

/**
 * PodDNSConfig defines the DNS parameters of a pod in addition to those generated from DNSPolicy.
 */
class PodDNSConfig extends \k8s\Resource
{
    /**
     * @var string $nameservers
     * A list of DNS name server IP addresses. This will be appended to the base nameservers generated from DNSPolicy. Duplicated nameservers will be removed.
     */
    public $nameservers;

    /**
     * @var PodDNSConfigOption[] $options
     * A list of DNS resolver options. This will be merged with the base options generated from DNSPolicy. Duplicated entries will be removed. Resolution options given in Options will override those that appear in the base DNSPolicy.
     */
    public $options;

    /**
     * @var string $searches
     * A list of DNS search domains for host-name lookup. This will be appended to the base search paths generated from DNSPolicy. Duplicated search paths will be removed.
     */
    public $searches;

    public function __construct($data)
    {
        $this->nameservers = isset($data['nameservers']) ? $data['nameservers'] : [];
        $this->options = array_map(function ($a) {
            return new PodDNSConfigOption($a);
        }, isset($data['options']) ? $data['options'] : []);
        $this->searches = isset($data['searches']) ? $data['searches'] : [];
    }
}
