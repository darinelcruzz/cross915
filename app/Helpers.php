<?php

use Michelf\Markdown;

function usesas($ctrl, $fun, $as = null)
{
    if ($as) {
        return ['uses' => "$ctrl@$fun", 'as' => $as];
    }
    return ['uses' => "$ctrl@$fun", 'as' => $fun];
}

function toMD($text)
{
    return Markdown::defaultTransform($text);;
}

function fdate($original_date, $format = 'Y-m-d', $original_format = 'Y-m-d H:i:s')
{
    $date = Date::createFromFormat($original_format, $original_date);
    return $date->format($format);
}
