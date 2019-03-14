<?php
/**
 * Created by PhpStorm.
 * User: shakil
 * Date: 3/10/19
 * Time: 4:41 PM
 */

$i ="This is a string";

if (preg_match("/is/",$i)){
    echo "match";
}else{
    echo "sorry";
}