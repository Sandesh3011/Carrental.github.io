
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          
            <?php  
        // servername => localhost
        // username => root
        // password => empty
        // database name => clientdata
            
        //mysqli connect() Function:opens a new connection to the MySQL server.
            //mysqli_connect(host, username, password, dbname, port, socket)
            
        $conn = mysqli_connect("localhost", "root", "", "clientdata");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());//connect_error() Function:Return the error description from the last connection error, if any
        }
         
        // Taking all 2 values from the form data(input)
        $fname =  $_REQUEST['fname'];//$_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
        $lname = $_REQUEST['lname'];
        $Date = $_REQUEST['Date'];
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
         
        // Performing insert query execution
        // here our table name is IT
        $sql = "INSERT INTO fdata  VALUES ('$fname','$lname',' $Date ','$stime','$etime','$mobile','$email','$address' )";
        //The INSERT INTO statement is used to insert new records in a table.
           /* INSERT INTO table_name (column1, column2, column3, ...)
            VALUES (value1, value2, value3, ...); 
or  
            INSERT INTO table_name VALUES (value1, value2, value3, ...);            */
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("thank you for booking"); //nl2br() Function:Insert line breaks where newlines (\n) occur in the string
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
        
    </body>
</html>
