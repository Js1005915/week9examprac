<?php 


include 'functions.php';
include 'database.php';


$pdo = db();


$sql = sqlAllCustomers();
echo("<pre>$sql</pre>");

$result = $pdo->query($sql)





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>