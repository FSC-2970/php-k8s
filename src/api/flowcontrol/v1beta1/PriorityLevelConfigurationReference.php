<?php

namespace k8s\api\flowcontrol\v1beta1;

/**
 * PriorityLevelConfigurationReference contains information that points to the "request-priority" being used.
 */
class PriorityLevelConfigurationReference extends \k8s\Resource
{
    /**
     * @var string $name required
     * `name` is the name of the priority level configuration being referenced Required.
     */
    public $name;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
    }
}
