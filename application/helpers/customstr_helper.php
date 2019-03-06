<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*****************
|-if string length is greater that 50 it will be truncated
|-return string
*/
if ( ! function_exists('truncate_text'))
{
    function truncate_text($str)
    {
        $truncated_text = "";

        if (strlen($str) > 50)
        {
            $truncated_text = substr($str, 0, 50) . '...';
        }
        else {
            $truncated_text = $str;
        }

        return $truncated_text;
    }
}
