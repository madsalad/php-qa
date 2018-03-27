<?php

namespace homework\GetSecondMax;

class GetSecondMax
{
    public function second($arr)
    {
        $arr = array_unique($arr);
        unset($arr[array_search(max($arr), $arr)]);
        $result = max($arr);
        return $result;
    }
}