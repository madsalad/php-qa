<?php

use homework\TicTacToe\TicTacToe;
use PHPUnit\Framework\TestCase;

class TicTacToeTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new TicTacToe();
    }

    public function test_game_result_case_1()
    {
        $this->assertEquals('o', $this->result->gameLogic(
            [
                ['o','o','o'],
                ['x','o','x'],
                ['x','o','o'],
            ]
        ));
    }

    public function test_game_result_case_2()
    {
        $this->assertEquals('o', $this->result->gameLogic(
            [
                ['o','o','o'],
                ['x','x','x'],
                ['x','o','o'],
            ]
        ));
    }

    public function test_game_result_case_3()
    {
        $this->assertEquals(false, $this->result->gameLogic(
            [
                ['o','x','o'],
                ['x','o','o'],
                ['x','o',null],
            ]
        ));
    }

    public function test_game_result_case_4()
    {
        $this->assertEquals(false, $this->result->gameLogic(
            [
                ['o','x','o'],
                ['x','o','o'],
                ['x','o','x'],
            ]
        ));
    }
}