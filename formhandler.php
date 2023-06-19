<?php
    include("connection.php");
    if($_POST['button'])
    {
        $fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $Date = $_REQUEST['Date'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $file = $_REQUEST['file'];

        $sql = "INSERT INTO DATA  VALUES ('$fname','$lname',' $Date ','$mobile','$email','$address','$file')";

        mysqli_query($conn,$sql);
        
        header('location: index.html');
    }
        
?>