<?php

namespace k8s\api\core\v1;

/**
 * WindowsSecurityContextOptions contain Windows-specific options and credentials.
 */
class WindowsSecurityContextOptions extends \k8s\Resource
{
    /**
     * @var string $gmsaCredentialSpec
     * GMSACredentialSpec is where the GMSA admission webhook (https:\/\/github.com\/kubernetes-sigs\/windows-gmsa) inlines the contents of the GMSA credential spec named by the GMSACredentialSpecName field.
     */
    public $gmsaCredentialSpec;

    /**
     * @var string $gmsaCredentialSpecName
     * GMSACredentialSpecName is the name of the GMSA credential spec to use.
     */
    public $gmsaCredentialSpecName;

    /**
     * @var boolean $hostProcess
     * HostProcess determines if a container should be run as a 'Host Process' container. This field is alpha-level and will only be honored by components that enable the WindowsHostProcessContainers feature flag. Setting this field without the feature flag will result in errors when validating the Pod. All of a Pod's containers must have the same effective HostProcess value (it is not allowed to have a mix of HostProcess containers and non-HostProcess containers).  In addition, if HostProcess is true then HostNetwork must also be set to true.
     */
    public $hostProcess;

    /**
     * @var string $runAsUserName
     * The UserName in Windows to run the entrypoint of the container process. Defaults to the user specified in image metadata if unspecified. May also be set in PodSecurityContext. If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsUserName;

    public function __construct($data)
    {
        $this->gmsaCredentialSpec = isset($data['gmsaCredentialSpec']) ? $data['gmsaCredentialSpec'] : null;
        $this->gmsaCredentialSpecName = isset($data['gmsaCredentialSpecName']) ? $data['gmsaCredentialSpecName'] : null;
        $this->hostProcess = isset($data['hostProcess']) ? $data['hostProcess'] : null;
        $this->runAsUserName = isset($data['runAsUserName']) ? $data['runAsUserName'] : null;
    }
}
