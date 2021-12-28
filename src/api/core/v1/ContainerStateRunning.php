<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * ContainerStateRunning is a running state of a container.
 */
class ContainerStateRunning extends \k8s\Resource
{
    /**
     * @var Time $startedAt
     * Time at which the container was last (re-)started
     */
    public $startedAt;

    public function __construct($data)
    {
        if (isset($data['startedAt'])) {
            $this->startedAt = new Time($data['startedAt']);
        }
    }
}
