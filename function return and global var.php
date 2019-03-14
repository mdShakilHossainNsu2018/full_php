<?php
/**
 * Created by PhpStorm.
 * User: shakil
 * Date: 3/12/19
 * Time: 5:37 PM
 */
//function add($a, $b){
//    return $a+$b;
//}
//
//echo add(4,7);

// global var

$constant = 20;
$user = $_SERVER['REMOTE_ADDR'];
function globalVar(){
    global $constant,$user;
    echo ' global '.$constant.' user '.$user;
}

//globalVar($constant,19);
globalVar();