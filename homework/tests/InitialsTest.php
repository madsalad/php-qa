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
        $this->assertEquals('����� �. �.', $this->result->crop('����� ����� ���������'));
    }

    public function test_name_cutter_case_2()
    {
        $this->assertEquals('������� �. �.', $this->result->crop('������� ������ ����������'));
    }

    public function test_name_cutter_case_3()
    {
        $this->assertEquals('�������� ���������', $this->result->crop('��������� �������� ��������'));
    }
}