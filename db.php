<?php

function connectDB()
{
    $host = "localhost";
    $dbname = "library";
    $user = "root";
    $password = "";
    $conn = null;

    try {

        $dsn = "mysql:host=$host;dbname=$dbname;";
        $conn = new PDO($dsn, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Error connecting" . $e->getMessage();
    }

    return $conn;
}
