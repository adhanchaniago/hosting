<?php
	$host = "localhost";
	$user = "root";
	$pass = "iemam1429";
	$db = "bdlse";
	$conn = mysqli_connect($host, $user, $pass) or die ("GAGAL");
	mysqli_select_db($conn, $db); 

    //$mysqli = new mysqli("localhost", "root", "iemam1429", "bkt_tourism4");

    //$myPDO = new PDO('mysqli:host=localhost;dbname=bkt_tourism4', 'root', 'iemam1429');

	//$conn = odbc_connect('MySQL80','root','iemam1429');

	//$conn =  odbc_connect ( "Driver={MYSQL ODBC 8.0 ANSI DRIVER};localhost=$servername;bkt_tourism4=$dbname;", $username, $password ) or die ( "Connection failed: " . $conn );

	// $host="localhost";
	// $port=3306;
	// $socket="MYSQL";
	// $user="root";
	// $password="iemam1429";
	// $dbname="bkt_tourism4";

	// $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	// 	or die ('Could not connect to the database server' . mysqli_connect_error());

	//$conn->close();


?>