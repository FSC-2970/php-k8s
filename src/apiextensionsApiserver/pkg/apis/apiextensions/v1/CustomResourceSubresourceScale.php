<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

/**
 * CustomResourceSubresourceScale defines how to serve the scale subresource for CustomResources.
 */
class CustomResourceSubresourceScale extends \k8s\Resource
{
    /**
     * @var string $labelSelectorPath
     * labelSelectorPath defines the JSON path inside of a custom resource that corresponds to Scale `status.selector`. Only JSON paths without the array notation are allowed. Must be a JSON Path under `.status` or `.spec`. Must be set to work with HorizontalPodAutoscaler. The field pointed by this JSON path must be a string field (not a complex selector struct) which contains a serialized label selector in string form. More info: https:\/\/kubernetes.io\/docs\/tasks\/access-kubernetes-api\/custom-resources\/custom-resource-definitions#scale-subresource If there is no value under the given path in the custom resource, the `status.selector` value in the `\/scale` subresource will default to the empty string.
     */
    public $labelSelectorPath;

    /**
     * @var string $specReplicasPath required
     * specReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale `spec.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under `.spec`. If there is no value under the given path in the custom resource, the `\/scale` subresource will return an error on GET.
     */
    public $specReplicasPath;

    /**
     * @var string $statusReplicasPath required
     * statusReplicasPath defines the JSON path inside of a custom resource that corresponds to Scale `status.replicas`. Only JSON paths without the array notation are allowed. Must be a JSON Path under `.status`. If there is no value under the given path in the custom resource, the `status.replicas` value in the `\/scale` subresource will default to 0.
     */
    public $statusReplicasPath;

    public function __construct($data)
    {
        $this->labelSelectorPath = isset($data['labelSelectorPath']) ? $data['labelSelectorPath'] : null;
        $this->specReplicasPath = isset($data['specReplicasPath']) ? $data['specReplicasPath'] : null;
        $this->statusReplicasPath = isset($data['statusReplicasPath']) ? $data['statusReplicasPath'] : null;
    }
}
