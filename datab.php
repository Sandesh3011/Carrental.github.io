<?php
        // servername => localhost
        // username => root
        // password => empty
        // databse name => clientdata

        $conn = mysqli_connect("localhost", "root", "" , "fdata");

        if($conn == false)
        {
            echo "Connection Failed".mysqli_connect_error();
        }
        include("connection.php");
        if($_POST['button'])
        {
            $fname =  $_REQUEST['fname'];
            $lname = $_REQUEST['lname'];
            // $Date = $_REQUEST['Date'];
            // $mobile = $_REQUEST['mobile'];
            // $email = $_REQUEST['email'];
            // $address = $_REQUEST['address'];
            // $file = $_REQUEST['file'];
    
            $sql = "INSERT INTO data VALUES ('$fname','$lname'')";
    
            mysqli_query($conn,$sql);
            
            header('location: index.html');
        }
?>