<?php

namespace k8s\api\core\v1;

use k8s\api\core\v1\ContainerState;

/**
 * ContainerStatus contains details for the current status of this container.
 */
class ContainerStatus extends \k8s\Resource
{
    /**
     * @var string $containerID
     * Container's ID in the format 'docker:\/\/<container_id>'.
     */
    public $containerID;

    /**
     * @var string $image required
     * The image the container is running. More info: https:\/\/kubernetes.io\/docs\/concepts\/containers\/images
     */
    public $image;

    /**
     * @var string $imageID required
     * ImageID of the container's image.
     */
    public $imageID;

    /**
     * @var ContainerState $lastState
     * Details about the container's last termination condition.
     */
    public $lastState;

    /**
     * @var string $name required
     * This must be a DNS_LABEL. Each container in a pod must have a unique name. Cannot be updated.
     */
    public $name;

    /**
     * @var boolean $ready required
     * Specifies whether the container has passed its readiness probe.
     */
    public $ready;

    /**
     * @var integer $restartCount required
     * The number of times the container has been restarted, currently based on the number of dead containers that have not yet been removed. Note that this is calculated from dead containers. But those containers are subject to garbage collection. This value will get capped at 5 by GC.
     */
    public $restartCount;

    /**
     * @var boolean $started
     * Specifies whether the container has passed its startup probe. Initialized as false, becomes true after startupProbe is considered successful. Resets to false when the container is restarted, or if kubelet loses state temporarily. Is always true when no startupProbe is defined.
     */
    public $started;

    /**
     * @var ContainerState $state
     * Details about the container's current condition.
     */
    public $state;

    public function __construct($data)
    {
        $this->containerID = isset($data['containerID']) ? $data['containerID'] : null;
        $this->image = isset($data['image']) ? $data['image'] : null;
        $this->imageID = isset($data['imageID']) ? $data['imageID'] : null;
        if (isset($data['lastState'])) {
            $this->lastState = new ContainerState($data['lastState']);
        }
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->ready = isset($data['ready']) ? $data['ready'] : null;
        $this->restartCount = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->started = isset($data['started']) ? $data['started'] : null;
        if (isset($data['state'])) {
            $this->state = new ContainerState($data['state']);
        }
    }
}
