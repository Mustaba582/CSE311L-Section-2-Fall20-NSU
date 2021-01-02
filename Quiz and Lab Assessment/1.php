<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "cse311l_section_2_fall_20";

$connection = mysqli_connect($server_name, $user_name, $password, $database);

if($connection == false){
 echo "Error connecting. " . mysqli_connect_error();
}


$sql = "SELECT First_Name,min(salary),max(salary),sum(salary),avg(salary) from employees group by Job_Id";
$result = mysqli_query($connection, $sql);


if(mysqli_num_rows($result) > 0){
    
 while($row = mysqli_fetch_assoc($result)){
    echo " "  .$row["First_Name"] ."   " .$row["min(salary)"] ."   "  .$row["max(salary)"]  ."  " .$row["sum(salary)"] ."   "  .$row["avg(salary)"]  ." \n";
}
}

else{
 echo "0 results found";
}
mysqli_close($connection);

?>