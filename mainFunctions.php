<?php
  /*Følgende funksjon skal koble mot databasen*/

  function dbConnect (){
    //Cobler mot databasen.
    $dbhost = 'localhost';
    $dbuser = 'admin';
    $dbpass = 'admin';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(!$conn){
      die('Could not connect to DB'.mysql_error());
    }
    mysql_select_db('bread_shop');

  }

  /*Følgende funksjon skal lukke koblingen mot databasen.*/
  function dbClose(){
    //Lukker koblingen mot databasen.
    mysql_close($conn);
  }

  /*Funksjonen skal få oversikt over alle brøene. Resultat skal sorteres og "pakkes" inn i trykkbare knapper(radioknapper)*/
  function getAlleBrod()
  {
    //kobler mot database
    //Får oversikt over alle brød som er tilgjengelig
    //Pakker disse inn i en tabell
  }

  /*Funksjon for bestillingAvBrod skal ta som barametere type, a ntall og
  tidspunkt.*/
  function bestillingAvBrod($type, $antall, $tidspunkt){
    //Kunden får oversikt over alle brøene som er tilgjengelig

    //kunden får oversikt over hvor mange brød man kan bestillinger

    //Kunden velger tidspunkt nå brød skal hentes.

    //Informasjon sendes mot database i tabellen som man trenger.
  }








 ?>
