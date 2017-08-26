<?php
session_start("num_list");
require_once "..\Models\Queue.php";

$lista = new Queue();

if( isset($_SESSION["ListaDeInts"]) && (count($_SESSION["ListaDeInts"]) > 0) ){
  //$small_num = 0;
  $small_num = $lista->minWithSession($_SESSION["ListaDeInts"]);
  $_SESSION["small_num"]  = $small_num;
  $_SESSION["show"] = true;
}
header('Location:  ..\index.php' );
?>
