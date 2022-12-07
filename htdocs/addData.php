<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $dbhost = 'sql313.epizy.com';
        $dbuser = 'epiz_31779976';
        $dbpassword = 'XeEKeYqjiUoY';
        $database = 'epiz_31779976_sryhoneydb';
        $conn = new mysqli($dbhost,$dbuser,$dbpassword,$database);    
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if(isset($_POST['reason']) && isset($_POST['times'])){
            $reason = $_POST['reason'];
            $times = $_POST['times'];
            $who = $_POST['who'];

            $sql = "INSERT INTO Counter (reason,timesCounter,who) VALUES ('$reason', '$times', '$who')";
        }
        
        
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();


    }

    
       

?>

</body>
</html>