<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "cse311l_section_2_fall_20";

$connection = mysqli_connect($server_name, $user_name, $password, $database);

if ($connection == false) {
 echo "Error connecting. " . mysqli_connect_error();
}


$sql = "SELECT manager_id, min(salary) from employees where manager_id is not null group by manager_id having min(salary) > 6000 order by min(salary) desc;";
$result = mysqli_query($connection, $sql);


if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
  echo " "  . $row["manager_id"] . "   " . $row["min(salary)"] ." \n";
 }
} else {
 echo "0 results found";
}

mysqli_close($connection);
