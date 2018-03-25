<?php

use homework\CountIt\CountIt;
use PHPUnit\Framework\TestCase;

class CountItTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new CountIt();
    }

    public function test_count_case_1()
    {
        $this->assertEquals(3, $this->result->count(554354321, 5));
    }

    public function test_count_case_2()
    {
        $this->assertEquals(5, $this->result->count(5719461516417718987, 1));
    }
}