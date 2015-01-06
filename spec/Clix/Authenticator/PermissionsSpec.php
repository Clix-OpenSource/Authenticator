<?php

namespace spec\Clix\Authenticator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PermissionsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Clix\Authenticator\Permissions');
    }

    function it_should_validate_permission()
    {
        $this->hasAccess('access.permission')->shouldReturn(true);
    }

}
