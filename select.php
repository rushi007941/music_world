<?php
$link = mysqli_connect("localhost", "rushi", "hello", "project");

$sql = "SELECT  first_name, last_name, email_address FROM person";
$result = $link->query($sql);

if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
         echo"<br>". " - Name: ". $row["first_name"]. " -  last_Name: ". $row["last_name"] . "email_address: ". $row["email_address"].  "<br>";
     }
} else {
     echo "0 results";
}

$link->close();
?>
