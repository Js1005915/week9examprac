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
    <table>
        <thead>
            <tr>
                <th style="text-align:left;">ID</th>
                <th style="text-align:left;">Model</th>
                <th style="text-align:right;">Type</th>
                <th style="text-align:right;">HourlyRate</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fill main table -->
             <?php
             $sql = sqlAllBikesByPrice();
             $result = $pdo->query($sql);
             while($row = $result->fetch()): ?>
             <tr>
                <td> <?=$row['bike_id']?>  </td>
                <td> <?=$row['model']?>  </td>
                <td> <?=$row['type']?>  </td>
                <td> <?=number_format((float)$row['hourly_rate'],2)?>  </td>
             </tr>

             <?php endwhile; ?>
        </tbody>
    </table>

    
</body>
</html>