<?php

use homework\NeedForHelp\NeedForHelp;
use PHPUnit\Framework\TestCase;

class NeedForHelpTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new NeedForHelp();
    }

    public function test_sum_case_1()
    {
        $this->assertEquals(6, $this->result->calculator(3));
    }

    public function test_sum_case_2()
    {
        $this->assertEquals(5050, $this->result->calculator(100));
    }
}