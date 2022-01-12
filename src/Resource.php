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

    public function toArray()
    {
        if ($this->origin !== null) return $this->__toString();
        $data = (array)$this;
        foreach ($data as $k => $v) {
            if ($data[$k] === null) {
                unset($data[$k]);
                continue;
            }
            if ($v instanceof self) {
                $data[$k] = $v->toArray();
            }
        }
        return $data;
    }

    public function toJson($flags = 0)
    {
        return \json_encode($this->toArray(), $flags);
    }

    public function toObject()
    {
        return \json_decode($this->toJson());
    }
}
