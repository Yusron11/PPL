<?php

namespace App\Helpers;

class Helper
{
    public static function harga($input)
    {
        $hasil = "Rp " . number_format($input,0,',','.');
        return $hasil;
    }
}