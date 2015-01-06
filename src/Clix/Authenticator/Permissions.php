<?php

namespace Clix\Authenticator;

use \Clix\Authenticator\Contracts\Permissions as PermissionContract;

class Permissions implements PermissionContract
{

    public function hasAccess($permission)
    {
        return true;
    }
}
