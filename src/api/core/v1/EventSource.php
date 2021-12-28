<?php

namespace k8s\api\core\v1;

/**
 * EventSource contains information for an event.
 */
class EventSource extends \k8s\Resource
{
    /**
     * @var string $component
     * Component from which the event is generated.
     */
    public $component;

    /**
     * @var string $host
     * Node name on which the event is generated.
     */
    public $host;

    public function __construct($data)
    {
        $this->component = $data['component'] ?? null;
        $this->host = $data['host'] ?? null;
    }
}
