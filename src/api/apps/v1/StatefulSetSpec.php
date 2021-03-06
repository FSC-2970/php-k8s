<?php

namespace k8s\api\apps\v1;

use k8s\apimachinery\pkg\apis\meta\v1\LabelSelector;
use k8s\api\core\v1\PodTemplateSpec;
use k8s\api\apps\v1\StatefulSetUpdateStrategy;
use k8s\api\core\v1\PersistentVolumeClaim;

/**
 * A StatefulSetSpec is the specification of a StatefulSet.
 */
class StatefulSetSpec extends \k8s\Resource
{
    /**
     * @var integer $minReadySeconds
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready) This is an alpha field and requires enabling StatefulSetMinReadySeconds feature gate.
     */
    public $minReadySeconds;

    /**
     * @var string $podManagementPolicy
     * podManagementPolicy controls how pods are created during initial scale up, when replacing pods on nodes, or when scaling down. The default policy is `OrderedReady`, where pods are created in increasing order (pod-0, then pod-1, etc) and the controller will wait until each pod is ready before continuing. When scaling down, the pods are removed in the opposite order. The alternative policy is `Parallel` which will create pods in parallel to match the desired scale without waiting, and on scale down will delete all pods at once.
     */
    public $podManagementPolicy;

    /**
     * @var integer $replicas
     * replicas is the desired number of replicas of the given Template. These are replicas in the sense that they are instantiations of the same Template, but individual replicas also have a consistent identity. If unspecified, defaults to 1.
     */
    public $replicas;

    /**
     * @var integer $revisionHistoryLimit
     * revisionHistoryLimit is the maximum number of revisions that will be maintained in the StatefulSet's revision history. The revision history consists of all revisions not represented by a currently applied StatefulSetSpec version. The default value is 10.
     */
    public $revisionHistoryLimit;

    /**
     * @var LabelSelector $selector
     * selector is a label query over pods that should match the replica count. It must match the pod template's labels. More info: https:\/\/kubernetes.io\/docs\/concepts\/overview\/working-with-objects\/labels\/#label-selectors
     */
    public $selector;

    /**
     * @var string $serviceName required
     * serviceName is the name of the service that governs this StatefulSet. This service must exist before the StatefulSet, and is responsible for the network identity of the set. Pods get DNS\/hostnames that follow the pattern: pod-specific-string.serviceName.default.svc.cluster.local where "pod-specific-string" is managed by the StatefulSet controller.
     */
    public $serviceName;

    /**
     * @var PodTemplateSpec $template
     * template is the object that describes the pod that will be created if insufficient replicas are detected. Each pod stamped out by the StatefulSet will fulfill this Template, but have a unique identity from the rest of the StatefulSet.
     */
    public $template;

    /**
     * @var StatefulSetUpdateStrategy $updateStrategy
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to update Pods in the StatefulSet when a revision is made to Template.
     */
    public $updateStrategy;

    /**
     * @var PersistentVolumeClaim[] $volumeClaimTemplates
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The StatefulSet controller is responsible for mapping network identities to claims in a way that maintains the identity of a pod. Every claim in this list must have at least one matching (by name) volumeMount in one container in the template. A claim in this list takes precedence over any volumes in the template, with the same name.
     */
    public $volumeClaimTemplates;

    public function __construct($data)
    {
        $this->minReadySeconds = isset($data['minReadySeconds']) ? $data['minReadySeconds'] : null;
        $this->podManagementPolicy = isset($data['podManagementPolicy']) ? $data['podManagementPolicy'] : null;
        $this->replicas = isset($data['replicas']) ? $data['replicas'] : null;
        $this->revisionHistoryLimit = isset($data['revisionHistoryLimit']) ? $data['revisionHistoryLimit'] : null;
        if (isset($data['selector'])) {
            $this->selector = new LabelSelector($data['selector']);
        }
        $this->serviceName = isset($data['serviceName']) ? $data['serviceName'] : null;
        if (isset($data['template'])) {
            $this->template = new PodTemplateSpec($data['template']);
        }
        if (isset($data['updateStrategy'])) {
            $this->updateStrategy = new StatefulSetUpdateStrategy($data['updateStrategy']);
        }
        $this->volumeClaimTemplates = array_map(function ($a) {
            return new PersistentVolumeClaim($a);
        }, isset($data['volumeClaimTemplates']) ? $data['volumeClaimTemplates'] : []);
    }
}
