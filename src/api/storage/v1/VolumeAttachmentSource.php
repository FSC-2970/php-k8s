<?php

namespace k8s\api\storage\v1;

use k8s\api\core\v1\PersistentVolumeSpec;

/**
 * VolumeAttachmentSource represents a volume that should be attached. Right now only PersistenVolumes can be attached via external attacher, in future we may allow also inline volumes in pods. Exactly one member can be set.
 */
class VolumeAttachmentSource extends \k8s\Resource
{
    /**
     * @var PersistentVolumeSpec $inlineVolumeSpec
     * inlineVolumeSpec contains all the information necessary to attach a persistent volume defined by a pod's inline VolumeSource. This field is populated only for the CSIMigration feature. It contains translated fields from a pod's inline VolumeSource to a PersistentVolumeSpec. This field is beta-level and is only honored by servers that enabled the CSIMigration feature.
     */
    public $inlineVolumeSpec;

    /**
     * @var string $persistentVolumeName
     * Name of the persistent volume to attach.
     */
    public $persistentVolumeName;

    public function __construct($data)
    {
        if (isset($data['inlineVolumeSpec'])) {
            $this->inlineVolumeSpec = new PersistentVolumeSpec($data['inlineVolumeSpec']);
        }
        $this->persistentVolumeName = $data['persistentVolumeName'] ?? null;
    }
}
