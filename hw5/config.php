<?php
    const SERVER = "localhost";
    const LOGIN = "root";
    const PASS = "";
    const DB = "gallery";

    $connect = mysqli_connect(SERVER, LOGIN, PASS, DB);
    
    if (!$connect) {
        echo "Невозможно установить соединение с базой данных";
    }
?>