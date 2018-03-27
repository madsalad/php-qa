<?php

use homework\GetSecondMax\GetSecondMax;
use PHPUnit\Framework\TestCase;

class GetSecondMaxTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new GetSecondMax();
    }

    public function test_get_second_max_case_1()
    {
        $this->assertEquals('4',$this->result->second([3, 4, 2, 4, 5, 5]));
    }

    public function test_get_second_max_case_2()
    {
        $this->assertEquals('6',$this->result->second([3, 8, 2, 6, 5, 5, 1, 8]));
    }
}