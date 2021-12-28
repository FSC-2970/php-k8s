<?php

namespace k8s\api\core\v1;

/**
 * Describe a container image
 */
class ContainerImage extends \k8s\Resource
{
    /**
     * @var string $names
     * Names by which this image is known. e.g. ["k8s.gcr.io\/hyperkube:v1.0.7", "dockerhub.io\/google_containers\/hyperkube:v1.0.7"]
     */
    public $names;

    /**
     * @var integer $sizeBytes
     * The size of the image in bytes.
     */
    public $sizeBytes;

    public function __construct($data)
    {
        $this->names = $data['names'] ?? [];
        $this->sizeBytes = $data['sizeBytes'] ?? null;
    }
}
