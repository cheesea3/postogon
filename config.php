<?php
//This is how we get what page we should be on based on URL.
$GLOBALS['url_loc'] = explode('/', htmlspecialchars(strtok($_SERVER['REQUEST_URI'], '?'), ENT_QUOTES));

$GLOBALS['config']['url_offset'] = 1; 

if($GLOBALS['config']['url_offset'] > 0){
    $x = 0; while($x < ($GLOBALS['config']['url_offset'])){ unset($GLOBALS['url_loc'][$x]); $x++; }
    $GLOBALS['url_loc'] = array_values($GLOBALS['url_loc']);
}

switch($GLOBALS['url_loc'][1]){
    case "/":
    break;
    case "signup":
        include('../backend/index.php');	
    break; 
    default:
        include('../backend/index.php');	
}
?>
