<?php
session_start("num_list");
session_destroy();
header('Location:  ..\index.php' );
?>
