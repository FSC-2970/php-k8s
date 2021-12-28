<?php

namespace k8s\api\core\v1;

/**
 * ContainerStateWaiting is a waiting state of a container.
 */
class ContainerStateWaiting extends \k8s\Resource
{
    /**
     * @var string $message
     * Message regarding why the container is not yet running.
     */
    public $message;

    /**
     * @var string $reason
     * (brief) reason the container is not yet running.
     */
    public $reason;

    public function __construct($data)
    {
        $this->message = $data['message'] ?? null;
        $this->reason = $data['reason'] ?? null;
    }
}
