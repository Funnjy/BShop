
<?php

$conn=mysqli_connect("localhost","admin","admin","bread_shop");
  echo "HALLO";
  include 'mainFunctions.php';

  if(isset( $_POST['data']) && !empty($_POST['data'])){
    $data = $_POST['data'];
  }
  else{
    header('location: employer.php');
    exit();
  }
  $mysqli->query($conn, "INSERT INTO vare (name, produsent, vekt, mengde, beskrivelse) VALUES ('$_POST[breadName]','$_POST[produsent]', '$_POST[breadWight]', '$_POST[breadAmount]', '$_POST[description]')");
  
  $mysqli->close;

 ?>
