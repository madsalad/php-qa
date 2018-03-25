<?php

use homework\ReversedStrings\ReversedStrings;
use PHPUnit\Framework\TestCase;

class ReversedStringsTest extends TestCase
{
    private $rev;

    public function setUp()
    {
        $this->rev = new ReversedStrings();
    }

    public function test_revers_for_numbers()
    {
        $this->assertEquals(321, $this->rev->revers(123));
    }

    public function test_revers_for_letters()
    {
        $this->assertEquals('abc', $this->rev->revers('cba'));
    }



}