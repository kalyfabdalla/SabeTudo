<?php
    if(isset($_COOKIE['id'])) {
    $datetime = $_POST["datetime"]; //You have to get the form data
    $moves = $_POST["moves"];
    $time = $_POST["time"];
    $filename = $_COOKIE['id'];
    $file = fopen('../scores/'. $filename, 'a+');
    $content = $datetime .'; ' .$moves .'; ' .$time ."\n";
    fwrite($file , $content); //Now lets write it in there
    fclose($file); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    }
?>
