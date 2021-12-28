<?php

namespace k8s\api\core\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * ContainerStateTerminated is a terminated state of a container.
 */
class ContainerStateTerminated extends \k8s\Resource
{
    /**
     * @var string $containerID
     * Container's ID in the format 'docker:\/\/<container_id>'
     */
    public $containerID;

    /**
     * @var integer $exitCode required
     * Exit status from the last termination of the container
     */
    public $exitCode;

    /**
     * @var Time $finishedAt
     * Time at which the container last terminated
     */
    public $finishedAt;

    /**
     * @var string $message
     * Message regarding the last termination of the container
     */
    public $message;

    /**
     * @var string $reason
     * (brief) reason from the last termination of the container
     */
    public $reason;

    /**
     * @var integer $signal
     * Signal from the last termination of the container
     */
    public $signal;

    /**
     * @var Time $startedAt
     * Time at which previous execution of the container started
     */
    public $startedAt;

    public function __construct($data)
    {
        $this->containerID = isset($data['containerID']) ? $data['containerID'] : null;
        $this->exitCode = isset($data['exitCode']) ? $data['exitCode'] : null;
        if (isset($data['finishedAt'])) {
            $this->finishedAt = new Time($data['finishedAt']);
        }
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->reason = isset($data['reason']) ? $data['reason'] : null;
        $this->signal = isset($data['signal']) ? $data['signal'] : null;
        if (isset($data['startedAt'])) {
            $this->startedAt = new Time($data['startedAt']);
        }
    }
}
