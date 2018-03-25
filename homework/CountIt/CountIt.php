<?php

namespace homework\CountIt;

class CountIt
{
    public function count($number, $char)
    {
        $result = substr_count($number, $char);

        return $result;
    }
}