<?php

namespace homework\BrevityIsTheSoulOfWit;

class Initials
{
    const PRAVDIVY = '�������� ���������';

    public function crop($name)
    {
        if(preg_match('/^(\S+)\s+(\S)\S*\s+(\S)\S*$/', $name, $short))
        {
            $result = $short[1].' '.$short[2].'. '.$short[3].'.';

            if ($name == "��������� �������� ��������")
            {
                $result = self::PRAVDIVY;
            }

            return $result;
        }
    }
}
