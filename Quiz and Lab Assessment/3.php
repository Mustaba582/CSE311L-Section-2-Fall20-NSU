<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "cse311l_section_2_fall_20";

$connection = mysqli_connect($server_name, $user_name, $password, $database);

if ($connection == false) {
 echo "Error connecting. " . mysqli_connect_error();
}


$sql = "SELECT ";
$result = mysqli_query($connection, $sql);


if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_array($result)) {
  echo "fname: " . $row["level"] . " CourseCount : " . $row["AVG(S.age)"] . " \n";
 }
} else {
 echo "0 results found";
}

mysqli_close($connection);
