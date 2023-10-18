<?php 
include("dbcon.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

#create connection
date_default_timezone_set('[Europe/Dublin]');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, surname FROM member";
$result = mysqli_query($conn, $sql);

echo "<select name='memberID>";

#HTML
while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    
    echo "<option value='$id'>$fn $sn</option>";
}
echo '</select>';

mysqli_close($conn); 
?>