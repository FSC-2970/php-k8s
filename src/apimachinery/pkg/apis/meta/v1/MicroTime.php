<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * MicroTime is version of Time with microsecond level precision.
 */
class MicroTime extends \k8s\Resource
{
    /**
     * @var int $time timestamp
     */
    public $time;

    /**
     * @var string $time 2006-01-02T15:04:05.000000Z
     */
    public function __construct(string $time)
    {
        $this->time = date('Y-m-d H:i:s', \strtotime($time));
    }

    public function __toString()
    {
        return $this->time;
    }
}
