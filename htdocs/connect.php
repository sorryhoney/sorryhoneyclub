<?php
    if ($_SERVER['REQUEST_METHOD']=='POST' && ISSET($_POST['submit'])) {
        $dbhost = 'sql313.epizy.com';
        $dbuser = 'epiz_31779976';
        $dbpassword = 'XeEKeYqjiUoY';
        $conn = mysql_connect($dbhost,$dbuser,$dbpassword);
        mysql_select_db('epiz_31779976_sryhoneydb',$conn);
    };
    ?>