<?php

namespace spec;

use RomanNumberalsConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumberalsConverterSpec extends ObjectBehavior
{
    function it_return_I_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_return_II_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_return_III_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_return_IV_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_return_V_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }
    function it_return_VI_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    function it_return_VI_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    function it_return_X_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    function it_return_XI_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }
    function it_return_XX_for_20()
    {
        $this->convert(20)->shouldReturn('XX');
    }
    function it_return_L_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }
    function it_return_C_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }
    function it_return_D_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }
    function it_return_M_for_1000()
    {
        $this->convert(1000)->shouldReturn('M');
    }
    function it_return_MCMXCIX_for_1999()
    {
        $this->convert(1999)->shouldReturn('MCMXCIX');
    }
    function it_return_MMMMCMXC_for_4990()
    {
        $this->convert(4990)->shouldReturn('MMMMCMXC');
    }
}
