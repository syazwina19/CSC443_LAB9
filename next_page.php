<?php
    session_start();
    echo "<html>";

    $sid = session_id();
    echo "Session ID returned by session_id(): ".$sid."\n";
    $sid = $ID;
    echo "Session ID returned by SID: ".$sid."\n";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin has been retrieved: ".$myLogin."\n";
    $myColor = $_SESSION["myColor"];
    echo "Value of myColor has been retrieved: ".$myColor."\n";

    echo "</html>\n";

?>

