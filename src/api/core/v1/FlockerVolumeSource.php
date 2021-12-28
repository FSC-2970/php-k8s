<?php

namespace k8s\api\core\v1;

/**
 * Represents a Flocker volume mounted by the Flocker agent. One and only one of datasetName and datasetUUID should be set. Flocker volumes do not support ownership management or SELinux relabeling.
 */
class FlockerVolumeSource extends \k8s\Resource
{
    /**
     * @var string $datasetName
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should be considered as deprecated
     */
    public $datasetName;

    /**
     * @var string $datasetUUID
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     */
    public $datasetUUID;

    public function __construct($data)
    {
        $this->datasetName = $data['datasetName'] ?? null;
        $this->datasetUUID = $data['datasetUUID'] ?? null;
    }
}
