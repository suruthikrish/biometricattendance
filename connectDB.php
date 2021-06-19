<!-- <?php
/* Database connection settings */
	// $servername = "localhost";
    // $username = "root";		//put your phpmyadmin username.(default is "root")
    // $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    // $dbname = "biometricattendace";
    
	// $conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// if ($conn->connect_error) {
    //     die("Database Connection failed: " . $conn->connect_error);
    // }
?> -->

<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>