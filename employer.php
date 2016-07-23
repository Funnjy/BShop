<?php
  include 'mainFunctions.php';
  dbConnect();
?>
<!DOCTYPE>
<html>
<meta></meta>
<head><title>Employer page</title></head>
<body>

  <script>function validateForm(){                                  <!--Validation javascript for form under.-->
    var x = document.forms["leggInnBreadForm"]["breadName"].value;
    if(x == null || x == ""){
      alert("Alle felter må fulles ut!");
      return false;
    }
  }</script>

  <p>Legg inn brød ved å fylle ut form under.</p>                   <!--form for å legge inn nye brød i systemet.-->
  <form name="leggInnBreadForm" method="post" action="employer.php" onsubmit="return validateForm()">
    <table width="600" border="1" cellspacing="1" cellpadding="2">
      <tr>
        <td>Bread Name:<input type="text" name="breadName" ></td>
        <td>Bread Producent:
          <?php
            $query = mysql_query("SELECT name FROM produsent");
            echo '<select name="produsent">';
            while ($row = mysql_fetch_array($query)) {
              echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
            }
            echo '</select>';
          ?>
        </td>
        <td>Amount: <input type="text" name="breadAmount"></td>
        <td>Wight: <input type="text" name="breadWight"></td>
        <td>Description: <input type="text" name="description"></td>
        <td><button type="submit" name="leggInn">Legg inn</button></td>
      </tr>
    </table>
  </form>
  <?php
    $conn=mysqli_connect("localhost","admin","admin","bread_shop");
    $sql = "INSERT INTO vare (name, produsent, vekt, mengde, beskrivelse) VALUES ('$_POST[breadName]','$_POST[produsent]', '$_POST[breadWight]', '$_POST[breadAmount]', '$_POST[description]')";
    if(isset($_POST['leggInn'])){
      if($conn->query($sql)=== TRUE){
        echo "Informasjon ble lagt til";
      }
      else {
        echo "FEIL: ".$sql."</br>".$conn->error;
      }
    }
    $conn->close();
  ?>
</body>
<footer></footer>
</html>
