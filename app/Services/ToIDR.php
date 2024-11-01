<?php

namespace Kamela\Services;

class ToIDR
{


    public static function convert(int $number): string
    {

        return number_format($number, 0, ',', '.');
    }
};
