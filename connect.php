<?php
$email = $_POST{"email"};
$password = $_POST{"password"};


$conn = new mysqli("local host", "", "", "");
if($conn->connect_error){
die("connection failed  : " .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(email, password)
  values(?, ?)");
  $stmt->bind_param("s, s",$email, $password);
  $stmt->execute();
 echo "Succesfull";
  $stmt->close();
  $conn->close();
}
?>