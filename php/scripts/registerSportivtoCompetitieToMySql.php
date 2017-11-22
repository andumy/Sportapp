<?php

require 'dbconnection.php';
require 'sessionActivation.php';


function get_string_between($string, $start, $end){
    $split_string       = explode($end,$string);
    foreach($split_string as $data) {
         $str_pos       = strpos($data,$start);
         $last_pos      = strlen($data);
         $capture_len   = $last_pos - $str_pos;
         $return[]      = substr($data,$str_pos+strlen($start),$capture_len);
    }
    return $return;
}


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hashstr = $db->real_escape_string($_POST["hash"]);
    }

    $hash = get_string_between($hashstr, '[hash]', '[/hash]');

    


    
?>
