<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_REQUEST['q'];

$con = mysqli_connect('localhost','root', '');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"travel");
$sql="SELECT * FROM booking WHERE id_booking = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Location</th>
<th>Guests</th>
<th>Arrivals</th>
<th>Leaving</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id_booking'] . "</td>";
  echo "<td>" . $row['names'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['guests'] . "</td>";
  echo "<td>" . $row['arrivals'] . "</td>";
  echo "<td>" . $row['leaving'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>