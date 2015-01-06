<?php

namespace spec\Clix\Authenticator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Clix\Authenticator\User');
    }
}
