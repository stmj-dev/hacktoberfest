<?php

function replaceComma($amount)
{
    return number_format((float) str_replace(',', '', $amount), 2, '.', '');
}

function floatDotFormat($amount)
{
    return number_format($amount, 2, '.', ',');
}


function floatFormat($amount)
{
    return number_format($amount, 2, '.', '');
}

function checkNumber($number)
{
    $ex_number = explode('.', $number);

    if (!isset($ex_number[1])) {
        return number_format($number);
    }
        
    if ($ex_number[1] == 00) {
        return number_format($number);
    } 
        
    return floatDotFormat($number);
}

function replaceDot($amount)
{
    return str_replace('.', '', $amount);
}

function commasSeparator($num)
{
    return number_format($num, 2, ',', '.');
}

function thousandFormater(int $number)
{
    $units = ['', 'K', 'M', 'B', 'T'];
    for ($i = 0; $number >= 1000; $i++) {
        $number /= 1000;
    }

    return round($number, 1) . $units[$i];
}

function thousands_currency_format($num)
{
    if ($num > 1000) {
        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = ['k', 'm', 'b', 't'];
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;
    }

    return $num;
}
