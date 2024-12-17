<?php

namespace App\Console\Commands;

class GoogleTranslates
{
    public static function translate($text, $from, $to)
    {
        return $text . " (translated from $from to $to)";
    }
}
