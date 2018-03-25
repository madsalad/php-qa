<?php

namespace homework\AvitoParser;

class Parser
{
    public function parsPhone($string)
    {
        $phone = preg_replace("/[^+()-.0-9]|[.,]/",'', $string);
        return $phone;
    }

    public function parsLink($string)
    {
        $marker = stripos($string, 'http');

        if($marker)
        {
            $link = substr($string, $marker);
            $link = preg_replace("!(?<=.com).+!is", "", $link);
            return $link;
        }
    }
}