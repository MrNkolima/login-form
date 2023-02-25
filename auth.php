<?php

  $email= $_POST["email"];
  $pwd= $_POST["pwd"];

$con=mysqli_connect("127.0.0.1","root","master123") or die("<p> Failed to connect tonserver</p>");
mysqli_select_db($con,"LOGIN") or die("<p> No data base named LOGIN </p>");

$query="SELECT pwd FROM users WHERE emails='$email';";
$real_pwd=mysqli_query($con,$query) or die("<p> Cannot execute query </p>");

if (mysqli_num_rows($real_pwd) >  0) {
  $real_pwd = mysqli_fetch_array($real_pwd);
  $real_pwd = $real_pwd[0];
  if($real_pwd==$pwd){
     echo "<p style='color: green; font-size: 50px;'> Logged in successfully </p>";
     // The header will be here
  }else{
     echo "<p style='color: red; font-weight: 500; '> Wrong username or password </p>";
 }
}else{
    // The user input the non existing email
    echo "<p style='color: red; font-weight: 500'> Wrong username or password </p>";
}
mysqli_close($con);
?>
