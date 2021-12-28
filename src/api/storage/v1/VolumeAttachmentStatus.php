<?php

namespace k8s\api\storage\v1;

use k8s\api\storage\v1\VolumeError;

/**
 * VolumeAttachmentStatus is the status of a VolumeAttachment request.
 */
class VolumeAttachmentStatus extends \k8s\Resource
{
    /**
     * @var VolumeError $attachError
     * The last error encountered during attach operation, if any. This field must only be set by the entity completing the attach operation, i.e. the external-attacher.
     */
    public $attachError;

    /**
     * @var boolean $attached required
     * Indicates the volume is successfully attached. This field must only be set by the entity completing the attach operation, i.e. the external-attacher.
     */
    public $attached;

    /**
     * @var object $attachmentMetadata
     * Upon successful attach, this field is populated with any information returned by the attach operation that must be passed into subsequent WaitForAttach or Mount calls. This field must only be set by the entity completing the attach operation, i.e. the external-attacher.
     */
    public $attachmentMetadata;

    /**
     * @var VolumeError $detachError
     * The last error encountered during detach operation, if any. This field must only be set by the entity completing the detach operation, i.e. the external-attacher.
     */
    public $detachError;

    public function __construct($data)
    {
        if (isset($data['attachError'])) {
            $this->attachError = new VolumeError($data['attachError']);
        }
        $this->attached = $data['attached'] ?? null;
        $this->attachmentMetadata = $data['attachmentMetadata'] ?? null;
        if (isset($data['detachError'])) {
            $this->detachError = new VolumeError($data['detachError']);
        }
    }
}
