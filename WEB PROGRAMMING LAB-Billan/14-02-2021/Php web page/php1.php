
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `login`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Conatct</th>
	<th>Email</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['Roll'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Mob'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?> 

</body>
</html>