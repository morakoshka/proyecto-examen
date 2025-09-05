<?php

$host = 'localhost';
$dbname = 'usuarios';
$dbusernme = 'root';
$dbpassword = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusernme, $dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Connection failed: " . $e -> getMessage());
}

?>