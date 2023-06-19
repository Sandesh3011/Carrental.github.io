<?php
        // servername => localhost
        // username => root
        // password => empty
        // databse name => clientdata

        $conn = mysqli_connect("localhost", "root", "" , "clientdata");

        if($conn == false)
        {
            echo "Connection Failed".mysqli_connect_error();
        }
?>