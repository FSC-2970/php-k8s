<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ContainerStateRunning;
use k8s\api\core\v1\ContainerStateTerminated;
use k8s\api\core\v1\ContainerStateWaiting;

/**
 * ContainerState holds a possible state of container. Only one of its members may be specified. If none of them is specified, the default one is ContainerStateWaiting.
 */
class ContainerState extends \k8s\Resource
{
    /**
     * @var ContainerStateRunning $running
     * Details about a running container
     */
    public $running;

    /**
     * @var ContainerStateTerminated $terminated
     * Details about a terminated container
     */
    public $terminated;

    /**
     * @var ContainerStateWaiting $waiting
     * Details about a waiting container
     */
    public $waiting;

    public function __construct($data)
    {
        if (isset($data['running'])) {
            $this->running = new ContainerStateRunning($data['running']);
        }
        if (isset($data['terminated'])) {
            $this->terminated = new ContainerStateTerminated($data['terminated']);
        }
        if (isset($data['waiting'])) {
            $this->waiting = new ContainerStateWaiting($data['waiting']);
        }
    }
}
