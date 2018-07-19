<?php

namespace spec;

use StringCaculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCaculatorSpec extends ObjectBehavior
{
    function it_return_0_for_an_emty_string()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_return_sum_of_number_have_in_string()
    {
        $this->add('1,2')->shouldEqual(3);
    }

    function it_allows_space_in_string()
    {
        $this->add('1 , 45')->shouldEqual(46);
    }

    function it_ignores_any_number_that_is_1000_or_greater()
    {
        $this->add('1,2,1000')->shouldEqual(3);
    }

    function it_allows_new_line_specific_word_in_string()
    {
        $this->add('2,2,\n\n2')->shouldEqual(6);
    }

    function it_disallow_negative_numbers_in_string()
    {
        $this->shouldThrow('InvalidArgumentException')->duringAdd('3,-2');
    }

}
