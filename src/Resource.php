<?php

namespace k8s;

/**
 * No use
 */
class Resource
{
    public $origin;

    public function __construct($data)
    {
        $this->origin = $data;
    }

    public function __toString()
    {
        return (string)(is_array($this->origin) || \is_object($this->origin) ? \json_encode($this->origin) : $this->origin);
    }
}
