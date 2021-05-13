<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Rooms</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php

        require_once "data.php";

        $DBconn = getDBConnection();
        $sql = getRoomsSQL();

        $stmt = $DBconn -> prepare($sql);
        $stmt -> execute();
        $stmt -> bind_result($roomNumber, $roomID);

        while ($stmt -> fetch()) {

            echo "Room number <a href='room.php?id=" . $roomID . "'>" . $roomNumber . "</a><br>";
        }

        DBClose($stmt, $DBconn);
    ?>

</body>
</html>