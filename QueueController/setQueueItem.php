<?php
session_start("num_list");
require_once "..\Models\Queue.php";


if(isset($_POST["number"]) && isset($_POST["send"])){
  $lista = new Queue();
  if( !empty( trim($_POST["number"]) ) ){
    $lista->pushQueue( (int)$_POST["number"] );
    foreach($lista->list as $item){
      $_SESSION["ListaDeInts"][] = $item;
    }
  }
  header('Location:  ..\index.php' );
}
 ?>
