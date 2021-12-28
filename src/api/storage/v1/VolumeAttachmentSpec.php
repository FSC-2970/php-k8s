<?php

namespace k8s\api\storage\v1;

use k8s\api\storage\v1\VolumeAttachmentSource;

/**
 * VolumeAttachmentSpec is the specification of a VolumeAttachment request.
 */
class VolumeAttachmentSpec extends \k8s\Resource
{
    /**
     * @var string $attacher required
     * Attacher indicates the name of the volume driver that MUST handle this request. This is the name returned by GetPluginName().
     */
    public $attacher;

    /**
     * @var string $nodeName required
     * The node that the volume should be attached to.
     */
    public $nodeName;

    /**
     * @var VolumeAttachmentSource $source
     * Source represents the volume that should be attached.
     */
    public $source;

    public function __construct($data)
    {
        $this->attacher = isset($data['attacher']) ? $data['attacher'] : null;
        $this->nodeName = isset($data['nodeName']) ? $data['nodeName'] : null;
        if (isset($data['source'])) {
            $this->source = new VolumeAttachmentSource($data['source']);
        }
    }
}
