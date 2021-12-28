<?php

namespace k8s\apimachinery\pkg\apis\meta\v1;

/**
 * Time is a wrapper around time.Time which supports correct marshaling to YAML and JSON.  Wrappers are provided for many of the factory methods that the time package offers.
 */
class Time extends \k8s\Resource
{
    /**
     * @var string $time
     */
    public $time;

    /**
     * @var string $time 2006-01-02T15:04:05Z
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
