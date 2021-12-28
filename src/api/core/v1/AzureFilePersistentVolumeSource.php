<?php

namespace k8s\api\core\v1;

/**
 * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
 */
class AzureFilePersistentVolumeSource extends \k8s\Resource
{
    /**
     * @var boolean $readOnly
     * Defaults to false (read\/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var string $secretName required
     * the name of secret that contains Azure Storage Account Name and Key
     */
    public $secretName;

    /**
     * @var string $secretNamespace
     * the namespace of the secret that contains Azure Storage Account Name and Key default is the same as the Pod
     */
    public $secretNamespace;

    /**
     * @var string $shareName required
     * Share Name
     */
    public $shareName;

    public function __construct($data)
    {
        $this->readOnly = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->secretName = isset($data['secretName']) ? $data['secretName'] : null;
        $this->secretNamespace = isset($data['secretNamespace']) ? $data['secretNamespace'] : null;
        $this->shareName = isset($data['shareName']) ? $data['shareName'] : null;
    }
}
