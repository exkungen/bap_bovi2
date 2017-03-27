<?php
/**
 * Created by PhpStorm.
 * User: menou
 * Date: 13-3-2017
 * Time: 09:37
 */


$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str);
$str_camel = ucwords($str);
$str_lower_first = lcfirst($str);
$str_replace = str_replace("PHP","HTML",$str);
$str_reverse = strrev($str);
$str_upper = strtoupper($str);
$str_shuffle = str_shuffle($str);
$str_word = str_word_count($str);
$str_length = strlen($str);
$str_pos = strpos($str,"PHP");
$str_repeat = str_repeat($str,13);

echo '<b> output: </b.>';
echo '<p>' . $str_lower. '</p>';
echo '<p>' . $str_camel. '</p>';
echo '<p>' . $str_lower_first. '</p>';
echo '<p>' . $str_replace. '</p>';
echo '<p>' . $str_reverse. '</p>';
echo '<p>' . $str_upper. '</p>';
echo '<p>' . $str_shuffle. '</p>';
echo '<p>'. "De String heeft zoveel worden".'</p>';
echo '<p>' . $str_word. '</p>';

echo '<p>'. "De String heeft zoveel lengte".'</p>';
echo '<p>' . $str_length. '</p>';
echo '<p>'. "De PHP begint bij regel nummer:".'</p>';
echo '<p>'. $str_pos . '</p>';
echo '<p>'. "we herhalen de zin 13 keer:".'</p>';
echo '<p>'. $str_repeat . '</p>';



