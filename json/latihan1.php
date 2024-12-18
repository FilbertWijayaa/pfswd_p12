<?php

$dbh = new PDO('mysql:host=localhost; dbname=db_oop', 'root', '');
$db = $dbh->prepare('SELECT * FROM user');
$db->execute();

$user = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($user);
echo $data;