<?php namespace Clix\Authenticator\Contracts;

interface Permissions
{
    public function hasAccess($permission);
} 
