<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Room Description</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

    require_once "data.php";

    $id = $_GET['id'];

    $DBconn = getDBConnection();
    $sql = getRoomDescrSQL();

    $stmt = $DBconn -> prepare($sql);
    $stmt -> bind_param("i", $id);
    $stmt -> execute();
    $stmt -> bind_result($roomFloor, $roomBeds);

    $stmt -> fetch();
    echo "Floor: " . $roomFloor . " " . "Beds: " . $roomBeds;

    DBClose($stmt, $DBconn);
?>
    
</body>
</html>