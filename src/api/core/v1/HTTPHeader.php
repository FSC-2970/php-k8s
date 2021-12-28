<?php

namespace k8s\api\core\v1;

/**
 * HTTPHeader describes a custom header to be used in HTTP probes
 */
class HTTPHeader extends \k8s\Resource
{
    /**
     * @var string $name required
     * The header field name
     */
    public $name;

    /**
     * @var string $value required
     * The header field value
     */
    public $value;

    public function __construct($data)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->value = isset($data['value']) ? $data['value'] : null;
    }
}
