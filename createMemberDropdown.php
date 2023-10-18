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

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<TABLE border='1'>";

#HTML
echo "<label for = 'memberID'> Select member:<label>";
echo "<select a name = 'memberID' name='memberID'>";
echo "<option value = ''>-- Select member --</option>";
while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<TR><TD>$id</TD><TD>$fn</TD><TD>$sn</TD></TR>";
}
echo "</TABLE>";

mysqli_close($conn); 
?>