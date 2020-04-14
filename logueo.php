<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospital2";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_POST['username'];
$pass = $_POST['password'];
$query=mysqli_query($conn, "SELECT * FROM tuser WHERE U_username ='".$nombre."' and U_password='".$pass."'");
$nr =mysqli_num_rows($query);
if ($nr ==1) {
 header("Location: index.php");
}

else if ($nr == 0) {
 echo "usuario incorrecto";
}

?>