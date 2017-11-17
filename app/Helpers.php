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
