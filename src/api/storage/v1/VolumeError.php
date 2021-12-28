<?php

namespace k8s\api\storage\v1;

use k8s\apimachinery\pkg\apis\meta\v1\Time;

/**
 * VolumeError captures an error encountered during a volume operation.
 */
class VolumeError extends \k8s\Resource
{
    /**
     * @var string $message
     * String detailing the error encountered during Attach or Detach operation. This string may be logged, so it should not contain sensitive information.
     */
    public $message;

    /**
     * @var Time $time
     * Time the error was encountered.
     */
    public $time;

    public function __construct($data)
    {
        $this->message = $data['message'] ?? null;
        if (isset($data['time'])) {
            $this->time = new Time($data['time']);
        }
    }
}
