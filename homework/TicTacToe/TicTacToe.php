<?php
namespace homework\TicTacToe;

class TicTacToe
{

    public function gameLogic($arr)
    {
        $i = 'o';
        $j = 'x';

        /**
         * Условие победы "о"
         */
        if(($arr[0][0] === $i and $arr[0][1] == $i and $arr[0][2] == $i) // горизонтальные совпадения
        || ($arr[1][0] === $i and $arr[1][1] == $i and $arr[1][2] == $i)
        || ($arr[2][0] === $i and $arr[2][1] == $i and $arr[2][2] == $i)

        || ($arr[0][0] === $i and $arr[1][0] == $i and $arr[2][0] == $i) // вертикальные совпадения
        || ($arr[0][1] === $i and $arr[1][1] == $i and $arr[2][1] == $i)
        || ($arr[0][2] === $i and $arr[1][2] == $i and $arr[2][2] == $i)

        || ($arr[0][0] === $i and $arr[1][1] == $i and $arr[2][2] == $i) // диагональные совпадения
        || ($arr[2][0] === $i and $arr[1][1] == $i and $arr[0][2] == $i))
        {
            return $i;
        }

        /**
         * Условия победы "х"
         */
        else if(($arr[0][0] === $j and $arr[0][1] == $j and $arr[0][2] == $j) // горизонтальные совпадения
        || ($arr[1][0] === $j and $arr[1][1] == $j and $arr[1][2] == $j)
        || ($arr[2][0] === $j and $arr[2][1] == $j and $arr[2][2] == $j)

        || ($arr[0][0] === $j and $arr[1][0] == $j and $arr[2][0] == $j) // вертикальные совпадения
        || ($arr[0][1] === $j and $arr[1][1] == $j and $arr[2][1] == $j)
        || ($arr[0][2] === $j and $arr[1][2] == $j and $arr[2][2] == $j)

        || ($arr[0][0] === $j and $arr[1][1] == $j and $arr[2][2] == $j) // диагональные совпадения
        || ($arr[2][0] === $j and $arr[1][1] == $j and $arr[0][2] == $j))
        {
            return $j;
        }

        /**
         * Игра не завершена
         */
        else if(in_array(null,$arr, true))
        {
            return false;
        }

        /**
         * Ничья
         */
        else
        {
            return false;
        }
    }
}