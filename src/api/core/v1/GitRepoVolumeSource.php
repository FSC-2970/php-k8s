<?php

namespace k8s\api\core\v1;

/**
 * Represents a volume that is populated with the contents of a git repository. Git repo volumes do not support ownership management. Git repo volumes support SELinux relabeling.
 * 
 * DEPRECATED: GitRepo is deprecated. To provision a container with a git repo, mount an EmptyDir into an InitContainer that clones the repo using git, then mount the EmptyDir into the Pod's container.
 */
class GitRepoVolumeSource extends \k8s\Resource
{
    /**
     * @var string $directory
     * Target directory name. Must not contain or start with '..'.  If '.' is supplied, the volume directory will be the git repository.  Otherwise, if specified, the volume will contain the git repository in the subdirectory with the given name.
     */
    public $directory;

    /**
     * @var string $repository required
     * Repository URL
     */
    public $repository;

    /**
     * @var string $revision
     * Commit hash for the specified revision.
     */
    public $revision;

    public function __construct($data)
    {
        $this->directory = $data['directory'] ?? null;
        $this->repository = $data['repository'] ?? null;
        $this->revision = $data['revision'] ?? null;
    }
}
