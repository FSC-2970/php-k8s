<?php

namespace k8s;

/**
 * @method \k8s\api\core\v1\ComponentStatusList getComponentStatusList() /api/v1/componentstatuses
 * @method \k8s\api\core\v1\ConfigMapList getConfigMapList() /api/v1/configmaps
 * @method \k8s\api\core\v1\EndpointsList getEndpointsList() /api/v1/endpoints
 * @method \k8s\api\core\v1\EventList getEventList() /api/v1/events
 * @method \k8s\api\events\v1\EventList getEventList1() /apis/events.k8s.io/v1/events
 * @method \k8s\api\events\v1beta1\EventList getEventList2() /apis/events.k8s.io/v1beta1/events
 * @method \k8s\api\core\v1\LimitRangeList getLimitRangeList() /api/v1/limitranges
 * @method \k8s\api\core\v1\NamespaceList getNamespaceList() /api/v1/namespaces
 * @method \k8s\api\core\v1\NodeList getNodeList() /api/v1/nodes
 * @method \k8s\api\core\v1\PersistentVolumeClaimList getPersistentVolumeClaimList() /api/v1/persistentvolumeclaims
 * @method \k8s\api\core\v1\PersistentVolumeList getPersistentVolumeList() /api/v1/persistentvolumes
 * @method \k8s\api\core\v1\PodList getPodList() /api/v1/pods
 * @method \k8s\api\core\v1\PodTemplateList getPodTemplateList() /api/v1/podtemplates
 * @method \k8s\api\core\v1\ReplicationControllerList getReplicationControllerList() /api/v1/replicationcontrollers
 * @method \k8s\api\core\v1\ResourceQuotaList getResourceQuotaList() /api/v1/resourcequotas
 * @method \k8s\api\core\v1\SecretList getSecretList() /api/v1/secrets
 * @method \k8s\api\core\v1\ServiceAccountList getServiceAccountList() /api/v1/serviceaccounts
 * @method \k8s\api\core\v1\ServiceList getServiceList() /api/v1/services
 * @method \k8s\api\admissionregistration\v1\MutatingWebhookConfigurationList getMutatingWebhookConfigurationList() /apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations
 * @method \k8s\api\admissionregistration\v1\ValidatingWebhookConfigurationList getValidatingWebhookConfigurationList() /apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations
 * @method \k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionList getCustomResourceDefinitionList() /apis/apiextensions.k8s.io/v1/customresourcedefinitions
 * @method \k8s\kubeAggregator\pkg\apis\apiregistration\v1\APIServiceList getAPIServiceList() /apis/apiregistration.k8s.io/v1/apiservices
 * @method \k8s\api\apps\v1\ControllerRevisionList getControllerRevisionList() /apis/apps/v1/controllerrevisions
 * @method \k8s\api\apps\v1\DaemonSetList getDaemonSetList() /apis/apps/v1/daemonsets
 * @method \k8s\api\apps\v1\DeploymentList getDeploymentList() /apis/apps/v1/deployments
 * @method \k8s\api\apps\v1\ReplicaSetList getReplicaSetList() /apis/apps/v1/replicasets
 * @method \k8s\api\apps\v1\StatefulSetList getStatefulSetList() /apis/apps/v1/statefulsets
 * @method \k8s\api\autoscaling\v1\HorizontalPodAutoscalerList getHorizontalPodAutoscalerList() /apis/autoscaling/v1/horizontalpodautoscalers
 * @method \k8s\api\autoscaling\v2beta1\HorizontalPodAutoscalerList getHorizontalPodAutoscalerList1() /apis/autoscaling/v2beta1/horizontalpodautoscalers
 * @method \k8s\api\autoscaling\v2beta2\HorizontalPodAutoscalerList getHorizontalPodAutoscalerList2() /apis/autoscaling/v2beta2/horizontalpodautoscalers
 * @method \k8s\api\batch\v1\CronJobList getCronJobList() /apis/batch/v1/cronjobs
 * @method \k8s\api\batch\v1beta1\CronJobList getCronJobList1() /apis/batch/v1beta1/cronjobs
 * @method \k8s\api\batch\v1\JobList getJobList() /apis/batch/v1/jobs
 * @method \k8s\api\certificates\v1\CertificateSigningRequestList getCertificateSigningRequestList() /apis/certificates.k8s.io/v1/certificatesigningrequests
 * @method \k8s\api\coordination\v1\LeaseList getLeaseList() /apis/coordination.k8s.io/v1/leases
 * @method \k8s\api\discovery\v1\EndpointSliceList getEndpointSliceList() /apis/discovery.k8s.io/v1/endpointslices
 * @method \k8s\api\discovery\v1beta1\EndpointSliceList getEndpointSliceList1() /apis/discovery.k8s.io/v1beta1/endpointslices
 * @method \k8s\api\flowcontrol\v1beta1\FlowSchemaList getFlowSchemaList() /apis/flowcontrol.apiserver.k8s.io/v1beta1/flowschemas
 * @method \k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationList getPriorityLevelConfigurationList() /apis/flowcontrol.apiserver.k8s.io/v1beta1/prioritylevelconfigurations
 * @method \k8s\metrics\pkg\apis\metrics\v1beta1\NodeMetricsList getNodeMetricsList() /apis/metrics.k8s.io/v1beta1/nodes
 * @method \k8s\metrics\pkg\apis\metrics\v1beta1\PodMetricsList getPodMetricsList() /apis/metrics.k8s.io/v1beta1/pods
 * @method \k8s\api\networking\v1\IngressClassList getIngressClassList() /apis/networking.k8s.io/v1/ingressclasses
 * @method \k8s\api\networking\v1\IngressList getIngressList() /apis/networking.k8s.io/v1/ingresses
 * @method \k8s\api\networking\v1\NetworkPolicyList getNetworkPolicyList() /apis/networking.k8s.io/v1/networkpolicies
 * @method \k8s\api\node\v1\RuntimeClassList getRuntimeClassList() /apis/node.k8s.io/v1/runtimeclasses
 * @method \k8s\api\node\v1beta1\RuntimeClassList getRuntimeClassList1() /apis/node.k8s.io/v1beta1/runtimeclasses
 * @method \k8s\api\policy\v1\PodDisruptionBudgetList getPodDisruptionBudgetList() /apis/policy/v1/poddisruptionbudgets
 * @method \k8s\api\policy\v1beta1\PodDisruptionBudgetList getPodDisruptionBudgetList1() /apis/policy/v1beta1/poddisruptionbudgets
 * @method \k8s\api\policy\v1beta1\PodSecurityPolicyList getPodSecurityPolicyList() /apis/policy/v1beta1/podsecuritypolicies
 * @method \k8s\api\rbac\v1\ClusterRoleBindingList getClusterRoleBindingList() /apis/rbac.authorization.k8s.io/v1/clusterrolebindings
 * @method \k8s\api\rbac\v1\ClusterRoleList getClusterRoleList() /apis/rbac.authorization.k8s.io/v1/clusterroles
 * @method \k8s\api\rbac\v1\RoleBindingList getRoleBindingList() /apis/rbac.authorization.k8s.io/v1/rolebindings
 * @method \k8s\api\rbac\v1\RoleList getRoleList() /apis/rbac.authorization.k8s.io/v1/roles
 * @method \k8s\api\scheduling\v1\PriorityClassList getPriorityClassList() /apis/scheduling.k8s.io/v1/priorityclasses
 * @method \k8s\api\storage\v1\CSIDriverList getCSIDriverList() /apis/storage.k8s.io/v1/csidrivers
 * @method \k8s\api\storage\v1\CSINodeList getCSINodeList() /apis/storage.k8s.io/v1/csinodes
 * @method \k8s\api\storage\v1\StorageClassList getStorageClassList() /apis/storage.k8s.io/v1/storageclasses
 * @method \k8s\api\storage\v1\VolumeAttachmentList getVolumeAttachmentList() /apis/storage.k8s.io/v1/volumeattachments
 * @method \k8s\api\storage\v1beta1\CSIStorageCapacityList getCSIStorageCapacityList() /apis/storage.k8s.io/v1beta1/csistoragecapacities
 */
class Client
{
    const METHOD = [
        'ComponentStatusList'                => ['/api/v1/componentstatuses', 'k8s\api\core\v1\ComponentStatusList'],
        'ConfigMapList'                      => ['/api/v1/configmaps', 'k8s\api\core\v1\ConfigMapList'],
        'EndpointsList'                      => ['/api/v1/endpoints', 'k8s\api\core\v1\EndpointsList'],
        'EventList'                          => ['/api/v1/events', 'k8s\api\core\v1\EventList'],
        'EventList1'                         => ['/apis/events.k8s.io/v1/events', 'k8s\api\events\v1\EventList'],
        'EventList2'                         => ['/apis/events.k8s.io/v1beta1/events', 'k8s\api\events\v1beta1\EventList'],
        'LimitRangeList'                     => ['/api/v1/limitranges', 'k8s\api\core\v1\LimitRangeList'],
        'NamespaceList'                      => ['/api/v1/namespaces', 'k8s\api\core\v1\NamespaceList'],
        'NodeList'                           => ['/api/v1/nodes', 'k8s\api\core\v1\NodeList'],
        'PersistentVolumeClaimList'          => ['/api/v1/persistentvolumeclaims', 'k8s\api\core\v1\PersistentVolumeClaimList'],
        'PersistentVolumeList'               => ['/api/v1/persistentvolumes', 'k8s\api\core\v1\PersistentVolumeList'],
        'PodList'                            => ['/api/v1/pods', 'k8s\api\core\v1\PodList'],
        'PodTemplateList'                    => ['/api/v1/podtemplates', 'k8s\api\core\v1\PodTemplateList'],
        'ReplicationControllerList'          => ['/api/v1/replicationcontrollers', 'k8s\api\core\v1\ReplicationControllerList'],
        'ResourceQuotaList'                  => ['/api/v1/resourcequotas', 'k8s\api\core\v1\ResourceQuotaList'],
        'SecretList'                         => ['/api/v1/secrets', 'k8s\api\core\v1\SecretList'],
        'ServiceAccountList'                 => ['/api/v1/serviceaccounts', 'k8s\api\core\v1\ServiceAccountList'],
        'ServiceList'                        => ['/api/v1/services', 'k8s\api\core\v1\ServiceList'],
        'MutatingWebhookConfigurationList'   => ['/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations', 'k8s\api\admissionregistration\v1\MutatingWebhookConfigurationList'],
        'ValidatingWebhookConfigurationList' => ['/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations', 'k8s\api\admissionregistration\v1\ValidatingWebhookConfigurationList'],
        'CustomResourceDefinitionList'       => ['/apis/apiextensions.k8s.io/v1/customresourcedefinitions', 'k8s\apiextensionsApiserver\pkg\apis\apiextensions\v1\CustomResourceDefinitionList'],
        'APIServiceList'                     => ['/apis/apiregistration.k8s.io/v1/apiservices', 'k8s\kubeAggregator\pkg\apis\apiregistration\v1\APIServiceList'],
        'ControllerRevisionList'             => ['/apis/apps/v1/controllerrevisions', 'k8s\api\apps\v1\ControllerRevisionList'],
        'DaemonSetList'                      => ['/apis/apps/v1/daemonsets', 'k8s\api\apps\v1\DaemonSetList'],
        'DeploymentList'                     => ['/apis/apps/v1/deployments', 'k8s\api\apps\v1\DeploymentList'],
        'ReplicaSetList'                     => ['/apis/apps/v1/replicasets', 'k8s\api\apps\v1\ReplicaSetList'],
        'StatefulSetList'                    => ['/apis/apps/v1/statefulsets', 'k8s\api\apps\v1\StatefulSetList'],
        'HorizontalPodAutoscalerList'        => ['/apis/autoscaling/v1/horizontalpodautoscalers', 'k8s\api\autoscaling\v1\HorizontalPodAutoscalerList'],
        'HorizontalPodAutoscalerList1'       => ['/apis/autoscaling/v2beta1/horizontalpodautoscalers', 'k8s\api\autoscaling\v2beta1\HorizontalPodAutoscalerList'],
        'HorizontalPodAutoscalerList2'       => ['/apis/autoscaling/v2beta2/horizontalpodautoscalers', 'k8s\api\autoscaling\v2beta2\HorizontalPodAutoscalerList'],
        'CronJobList'                        => ['/apis/batch/v1/cronjobs', 'k8s\api\batch\v1\CronJobList'],
        'CronJobList1'                       => ['/apis/batch/v1beta1/cronjobs', 'k8s\api\batch\v1beta1\CronJobList'],
        'JobList'                            => ['/apis/batch/v1/jobs', 'k8s\api\batch\v1\JobList'],
        'CertificateSigningRequestList'      => ['/apis/certificates.k8s.io/v1/certificatesigningrequests', 'k8s\api\certificates\v1\CertificateSigningRequestList'],
        'LeaseList'                          => ['/apis/coordination.k8s.io/v1/leases', 'k8s\api\coordination\v1\LeaseList'],
        'EndpointSliceList'                  => ['/apis/discovery.k8s.io/v1/endpointslices', 'k8s\api\discovery\v1\EndpointSliceList'],
        'EndpointSliceList1'                 => ['/apis/discovery.k8s.io/v1beta1/endpointslices', 'k8s\api\discovery\v1beta1\EndpointSliceList'],
        'FlowSchemaList'                     => ['/apis/flowcontrol.apiserver.k8s.io/v1beta1/flowschemas', 'k8s\api\flowcontrol\v1beta1\FlowSchemaList'],
        'PriorityLevelConfigurationList'     => ['/apis/flowcontrol.apiserver.k8s.io/v1beta1/prioritylevelconfigurations', 'k8s\api\flowcontrol\v1beta1\PriorityLevelConfigurationList'],
        'NodeMetricsList'                    => ['/apis/metrics.k8s.io/v1beta1/nodes', 'k8s\metrics\pkg\apis\metrics\v1beta1\NodeMetricsList'],
        'PodMetricsList'                     => ['/apis/metrics.k8s.io/v1beta1/pods', 'k8s\metrics\pkg\apis\metrics\v1beta1\PodMetricsList'],
        'IngressClassList'                   => ['/apis/networking.k8s.io/v1/ingressclasses', 'k8s\api\networking\v1\IngressClassList'],
        'IngressList'                        => ['/apis/networking.k8s.io/v1/ingresses', 'k8s\api\networking\v1\IngressList'],
        'NetworkPolicyList'                  => ['/apis/networking.k8s.io/v1/networkpolicies', 'k8s\api\networking\v1\NetworkPolicyList'],
        'RuntimeClassList'                   => ['/apis/node.k8s.io/v1/runtimeclasses', 'k8s\api\node\v1\RuntimeClassList'],
        'RuntimeClassList1'                  => ['/apis/node.k8s.io/v1beta1/runtimeclasses', 'k8s\api\node\v1beta1\RuntimeClassList'],
        'PodDisruptionBudgetList'            => ['/apis/policy/v1/poddisruptionbudgets', 'k8s\api\policy\v1\PodDisruptionBudgetList'],
        'PodDisruptionBudgetList1'           => ['/apis/policy/v1beta1/poddisruptionbudgets', 'k8s\api\policy\v1beta1\PodDisruptionBudgetList'],
        'PodSecurityPolicyList'              => ['/apis/policy/v1beta1/podsecuritypolicies', 'k8s\api\policy\v1beta1\PodSecurityPolicyList'],
        'ClusterRoleBindingList'             => ['/apis/rbac.authorization.k8s.io/v1/clusterrolebindings', 'k8s\api\rbac\v1\ClusterRoleBindingList'],
        'ClusterRoleList'                    => ['/apis/rbac.authorization.k8s.io/v1/clusterroles', 'k8s\api\rbac\v1\ClusterRoleList'],
        'RoleBindingList'                    => ['/apis/rbac.authorization.k8s.io/v1/rolebindings', 'k8s\api\rbac\v1\RoleBindingList'],
        'RoleList'                           => ['/apis/rbac.authorization.k8s.io/v1/roles', 'k8s\api\rbac\v1\RoleList'],
        'PriorityClassList'                  => ['/apis/scheduling.k8s.io/v1/priorityclasses', 'k8s\api\scheduling\v1\PriorityClassList'],
        'CSIDriverList'                      => ['/apis/storage.k8s.io/v1/csidrivers', 'k8s\api\storage\v1\CSIDriverList'],
        'CSINodeList'                        => ['/apis/storage.k8s.io/v1/csinodes', 'k8s\api\storage\v1\CSINodeList'],
        'StorageClassList'                   => ['/apis/storage.k8s.io/v1/storageclasses', 'k8s\api\storage\v1\StorageClassList'],
        'VolumeAttachmentList'               => ['/apis/storage.k8s.io/v1/volumeattachments', 'k8s\api\storage\v1\VolumeAttachmentList'],
        'CSIStorageCapacityList'             => ['/apis/storage.k8s.io/v1beta1/csistoragecapacities', 'k8s\api\storage\v1beta1\CSIStorageCapacityList'],
    ];

    /**
     * @var \GuzzleHttp\Client $curl
     */
    private $curl;

    private $options = [];

    /**
     * @param string $uri Example: http://127.0.0.1:8080
     * @param array $option @see GuzzleHttp\Client
     */
    public function __construct(string $uri, array $option = [])
    {
        $this->curl = new \GuzzleHttp\Client($option + [
            'base_uri'      => $uri,
            'http_errors'   => false,
            'verify'        => false,
            'timeout'       => 5,
        ]);
    }

    public function __call($name, $arguments)
    {
        if (\substr($name, 0, 3) !== 'get') return null;
        $resource = \substr($name, 3);
        if (!isset(self::METHOD[$resource])) return null;
        $r = $this->curl->get(self::METHOD[$resource][0], $this->options);
        if ($r->getStatusCode() !== 200) return null;
        $class = self::METHOD[$resource][1];
        return new $class(\json_decode($r->getBody(), true));
    }

    public function AuthBasic(string $username, string $password, string $method = 'basic')
    {
        $this->options = ['auth' => [$username, $password, $method]];
    }

    public function AuthToken(string $token)
    {
        $this->options = ['headers' => ['Authorization' => 'Bearer ' . $token]];
    }
}
