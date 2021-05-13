<?php

    function getDBConnection(
                                $servername = "localhost",
                                $username = "root",
                                $password = "root",
                                $dbname = "dbhotel"
                            ) {

        
        $connection = new mysqli($servername, $username, $password, $dbname);

        if($connection && $connection -> connect_error) {

            echo "Connection failed " . $connection -> connect_error;
        } else {

            return $connection;
        }
    }

    function DBClose($stmt, $connection) {

        $stmt -> close();
        $connection -> close();
    }

    function getRoomsSQL() {

        return "SELECT stanze.room_number, stanze.id FROM stanze";
    } 

    function getRoomDescrSQL() {

        return "SELECT floor, beds 
                FROM stanze 
                WHERE id = ?";
    }

?>
