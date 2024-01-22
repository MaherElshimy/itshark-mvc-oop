<?php



// mmkn a7tagha w mmkn laa
function view($path , $data=[]) {
    extract($data);
    require_once "../src/views/".$path.".php";
}

function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    die();
}

function redirect($url) {
    header("location: $url");
}
?>