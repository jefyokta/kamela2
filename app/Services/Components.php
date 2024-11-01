<?php

namespace Kamela\Services;

class Components
{
    public static function title(string $text): string
    {
        return '<h1 class="text-6xl text-center text-teal-300 border-0 font-semibold my-24">' . $text . '</h1>';
    }
    public static function month(int $month)
    {


        $IDmonths = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        return $IDmonths[$month - 1];
    }
}
