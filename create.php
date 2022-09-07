<html>
<head>
<title>Individual Project</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$conn = mysql_connect($dbhost, $dbuser, $dbpass );
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';
$sql = "CREATE TABLE final_tbl( ".
"id_num int(11) NOT NULL AUTO_INCREMENT, ".
"Name VARCHAR(50), ".
"con_no VARCHAR(100), ".
"socialm VARCHAR(100) NOT NULL, ".
"email VARCHAR(100), ".
"PRIMARY KEY (id_num)); ";
mysql_select_db( 'student' );
$retval = mysql_query($sql, $conn );
if(! $retval )
{
die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
</boddy>
</html>