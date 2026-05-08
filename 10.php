<?php
    $rand = rand();
    if(!isset($_COOKIE['random']))
    {
        setcookie("random", $rand, time()+60, "/", "", false, true);
    }
    else
    {
        $rand = $_COOKIE['random'];
    }
    echo $rand;
?>
