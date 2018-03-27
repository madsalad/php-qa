<?php

use homework\AvitoParser\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    private $result;

    public function setUp()
    {
        $this->result = new Parser();
    }

    public function test_pars_phone()
    {
        $this->assertEquals('+7(985)808-86-90', $this->result->parsPhone("Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>"));
    }

    public function test_pars_link()
    {
        $this->assertEquals('https://example.com', $this->result->parsLink("Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>"));
    }
}