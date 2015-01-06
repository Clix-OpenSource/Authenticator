<?php namespace Clix\Authenticator\Contracts;

/**
 * Interface Permissions
 * @package Clix\Authenticator\Contracts
 * @author Simon Skinner <s.skinner@clix.co.uk>
 */
interface Permissions
{

    /**
     * @param $permission
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function hasAccess($permission);

    /**
     * @return mixed
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function listAll();
} 
