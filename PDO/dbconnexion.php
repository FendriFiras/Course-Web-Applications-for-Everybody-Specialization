<?php
function connect($base, $param)
{
    include_once($param . ".php");
    $dsn = "mysql:host=" . MYHOST . "; dbname=" . $base;
    $user = MYUSER;
    $pass = MYPASS;
    try {
        $conn = new PDO($dsn, $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        return $conn;
    } catch (PDOException $except) {
        echo "Echec de la connexion: " . $except– > getMessage();
        return FALSE;
    }
}
