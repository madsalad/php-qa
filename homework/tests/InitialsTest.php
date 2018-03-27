<?php

use homework\BrevityIsTheSoulOfWit\Initials;
use PHPUnit\Framework\TestCase;

class InitialsTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new Initials();
    }

    public function test_name_cutter_case_1()
    {
        $this->assertEquals('Сомов И. А.', $this->result->crop('Сомов Игорь Андреевич'));
    }

    public function test_name_cutter_case_2()
    {
        $this->assertEquals('Рыбаков М. Э.', $this->result->crop('Рыбаков Михаил Эдуардович'));
    }

    public function test_name_cutter_case_3()
    {
        $this->assertEquals('Владимир Правдивый', $this->result->crop('Правдивый Владимир Отчество'));
    }
}