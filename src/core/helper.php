<?php



// mmkn a7tagha w mmkn laa


function view($path , $data=[]) {
    extract($data);
    require_once "../src/views/".$path.".php";
}


?>