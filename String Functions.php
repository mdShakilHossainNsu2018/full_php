<?php
/**
 * Created by PhpStorm.
 * User: shakil
 * Date: 3/12/19
 * Time: 7:32 PM
 */

//$string = 'this is an example string .';
//$string_word_counter = str_word_count($string,1);
//$string_word_counter2 = str_word_count($string,2);
//$string_word_counter2_with_dot = str_word_count($string,2, '.');
//echo $string_word_counter;
//print_r($string_word_counter);
//echo '<br>';
//print_r($string_word_counter2);
//echo '<br>';
//print_r($string_word_counter2_with_dot);
//$string = 'this is an example string & this is a tutorial .';
//$string_word_counter = str_word_count($string,1);
//print_r($string_word_counter);
//$string_word_counter = str_word_count($string,1, '&.');
//print_r($string_word_counter);
//
//$string = 'abcdefghijklmnopqrst0123456789';
//$string2 = 'this will be compare with string';
//$string_shuffled = str_shuffle($string);
//echo $string_shuffled;
//$half = substr($string_shuffled, 0, strlen($string_shuffled)/2);
//echo "\n".strrev($string);
//echo "\n".similar_text($string, $string2);
$string = '     this is an example <img src="img.jpg"> string .';

$trim = trim($string,'. ');
echo $trim;

$add_splashes = addslashes($string);
echo "\n<br>".$add_splashes;

echo "\n<br>".htmlentities($add_splashes);

echo "\n".stripslashes($add_splashes);

