<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Times Counter</h1>
    <!-- <form action="connect.php" method='POST'>
        <label for="user">Name:</label><br>
        <input type="text" name='name' id='name' required> <br>
        <label for="email">Email:</label><br>
        <input type="email" name='email' id='email' required>
        <label for="phone">Phone:</label><br>
        <input type="phone" name='phone' id='phone' required> <br>
       
        <input type="submit" name='submit' id='submit' required> <br>

    </form> -->

    <?php
        $dbhost = 'sql313.epizy.com';
        $dbuser = 'epiz_31779976';
        $dbpassword = 'XeEKeYqjiUoY';
        $database = 'epiz_31779976_sryhoneydb';
        $conn = mysql_connect($dbhost,$dbuser,$dbpassword);
        @mysql_select_db($database) or die( "Unable to select database");
        // $query="CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
        // $query =  "INSERT INTO contacts VALUES ('','John','Smith','01234 567890','00112 334455','01234 567891','johnsmith@gowansnet.com','http://www.gowansnet.com')";
	$query="SELECT * FROM contacts";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$phone=mysql_result($result,$i,"phone");
$mobile=mysql_result($result,$i,"mobile");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");

echo "<b>$first $last</b><br>Phone: $phone<br>Mobile: $mobile<br>Fax: $fax<br>E-mail: $email<br>Web: $web<br><hr><br>";

$i++;

}    
    ?>






</body>
</html>