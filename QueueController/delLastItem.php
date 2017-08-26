<?php
session_start("num_list");

 //$teste = count($_SESSION["ListaDeInts"]);
 //echo $teste;
if( isset($_SESSION["ListaDeInts"]) && (count($_SESSION["ListaDeInts"]) > 0) )
{
  array_pop($_SESSION["ListaDeInts"]);
}
  header('Location:  ..\index.php' );

 ?>
