<?php
$db = new PDO('mysql:host=localhost;dbname=DressMe;charset=utf8mb4', 'benutzer', '12345');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>