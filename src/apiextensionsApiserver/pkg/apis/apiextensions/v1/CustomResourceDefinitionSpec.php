<?php

namespace k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1;

use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceConversion;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionNames;
use k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionVersion;

/**
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec extends \k8s\Resource
{
    /**
     * @var CustomResourceConversion $conversion
     * conversion defines conversion settings for the CRD.
     */
    public $conversion;

    /**
     * @var string $group required
     * group is the API group of the defined custom resource. The custom resources are served under `\/apis\/<group>\/...`. Must match the name of the CustomResourceDefinition (in the form `<names.plural>.<group>`).
     */
    public $group;

    /**
     * @var CustomResourceDefinitionNames $names
     * names specify the resource and kind names for the custom resource.
     */
    public $names;

    /**
     * @var boolean $preserveUnknownFields
     * preserveUnknownFields indicates that object fields which are not specified in the OpenAPI schema should be preserved when persisting to storage. apiVersion, kind, metadata and known fields inside metadata are always preserved. This field is deprecated in favor of setting `x-preserve-unknown-fields` to true in `spec.versions[*].schema.openAPIV3Schema`. See https:\/\/kubernetes.io\/docs\/tasks\/access-kubernetes-api\/custom-resources\/custom-resource-definitions\/#pruning-versus-preserving-unknown-fields for details.
     */
    public $preserveUnknownFields;

    /**
     * @var string $scope required
     * scope indicates whether the defined custom resource is cluster- or namespace-scoped. Allowed values are `Cluster` and `Namespaced`.
     */
    public $scope;

    /**
     * @var CustomResourceDefinitionVersion[] $versions
     * versions is the list of all API versions of the defined custom resource. Version names are used to compute the order in which served versions are listed in API discovery. If the version string is "kube-like", it will sort above non "kube-like" version strings, which are ordered lexicographically. "Kube-like" versions start with a "v", then are followed by a number (the major version), then optionally the string "alpha" or "beta" and another number (the minor version). These are sorted first by GA > beta > alpha (where GA is a version with no suffix such as beta or alpha), and then by comparing major version, then minor version. An example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1, foo10.
     */
    public $versions;

    public function __construct($data)
    {
        if (isset($data['conversion'])) {
            $this->conversion = new CustomResourceConversion($data['conversion']);
        }
        $this->group = isset($data['group']) ? $data['group'] : null;
        if (isset($data['names'])) {
            $this->names = new CustomResourceDefinitionNames($data['names']);
        }
        $this->preserveUnknownFields = isset($data['preserveUnknownFields']) ? $data['preserveUnknownFields'] : null;
        $this->scope = isset($data['scope']) ? $data['scope'] : null;
        $this->versions = array_map(function ($a) {
            return new CustomResourceDefinitionVersion($a);
        }, isset($data['versions']) ? $data['versions'] : []);
    }
}
