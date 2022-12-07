<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Times</title>


    <style>
        body{
            background-color:black;
            color:white;
        }

        form{
            border-style:dotted;
            border-color:blue;
            font-size:large;
            padding: 2%;
        }


    </style>


</head>
<body>

<?php

    function delData(){
            // $dbhost = 'sql313.epizy.com';
            // $dbuser = 'epiz_31779976';
            // $dbpassword = 'XeEKeYqjiUoY';
            // $database = 'epiz_31779976_sryhoneydb';
            // $conn = new mysqli($dbhost,$dbuser,$dbpassword,$database); 

            // $delQuery = "DELETE FROM MyGuests WHERE id = input";

            // if ($conn->query($delQuery) === TRUE) {
            // echo "record DELECTED successfully";
            // }
            // $conn->close();
            // $console.log(input);
            echo "123";
    }



        $dbhost = 'sql313.epizy.com';
        $dbuser = 'epiz_31779976';
        $dbpassword = 'XeEKeYqjiUoY';
        $database = 'epiz_31779976_sryhoneydb';
        $conn = mysql_connect($dbhost,$dbuser,$dbpassword);
        @mysql_select_db($database) or die( "Unable to select database");
        
        $query= "SELECT * FROM Counter";
        $result=mysql_query($query);
        $num=mysql_numrows($result);
        mysql_close();

        print "Reason    Times <br>";
        print "-----------------<br>";


        $i=0;
        while ($i < $num){
            $id = mysql_result($result,$i,'id');
            $reason = mysql_result($result,$i,'reason');
            $Times = mysql_result($result,$i,'timesCounter');
            $who = mysql_result($result,$i,'who');
            $reg_date = mysql_result($result,$i,'reg_date');
            $delId = $id;

            echo "$reason  &  $Times  &  $who  &  $reg_date  & <button id=$id onclick='delData()'> &#10060 </button> <br><br>";
            echo "------------------------<br>";

            $i++;
        }
        ?>

<form action="addData.php" method="POST">
        <label for="reason">For what reason: </label><br>
        <input type="text" name='reason' id='reason' required> <br><br>

        <label for="times">Times? </label><br>
        <select name="times" id="times">
            <option value= 1 >1</option>
            <option value= 2 >2</option>
            <option value= 3 >3</option>
            <option value= 4 >4</option>
            <option value= 5 >5</option>
        </select> <br><br>

        <label for="who">Count on Who? </label><br>
        <select name="who" id="who">
            <option value= 'RR' >RR</option>
            <option value= 'JL' >JL</option>
        </select> <br><br>
        
        <input type="submit" name='submit' id='submit' required> <br>
</form>


    
</body>
</html>