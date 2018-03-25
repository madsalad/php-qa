<?php

use homework\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new FizzBuzz();
    }

    public function test_game_logic_case_1()
    {
        $this->assertEquals(1, $this->result->gameLogic(1));
    }

    public function test_game_logic_case_2()
    {
        $this->assertEquals(2, $this->result->gameLogic(2));
    }

    public function test_game_logic_case_3()
    {
        $this->assertEquals('fizz', $this->result->gameLogic(3));
    }
    public function test_game_logic_case_4()
    {
        $this->assertEquals('buzz', $this->result->gameLogic(5));
    }

    public function test_game_logic_case_6()
    {
        $this->assertEquals('fizz', $this->result->gameLogic(9));
    }

    public function test_game_logic_case_7()
    {
        $this->assertEquals('fizzbuzz', $this->result->gameLogic(15));
    }
}