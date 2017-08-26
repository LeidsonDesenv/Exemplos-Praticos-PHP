<?php
	session_start("num_list");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Testes em PHP Puro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1"/>
	 <link rel="stylesheet" href="style/bootstrap.css" >
	  <!-- JQuery CDN -->
		<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>

	  <!-- Javascript CDN -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	  crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
<header>
	<div class="jumbotron">
		<h1>Exemplos Práticos PHP</h1>
		<p>Aprendendo Um Pouco Mais a Cada Dia</p>
	</div>
</header>
<div class="row">

<div class="col-md-6  col-md-offset-3 col-sm-8  col-sm-offset-2 ">
	<form class="form" action="QueueController\setQueueItem.php" method="post">
		<strong>Digite o número :</strong>
		<input class="form-control" type="number" name="number" autofocus><br/>
		<button type="submit" class="form-control btn btn-success" id="Send" name="send">Incluir na Lista</button>
	</form>





		<?php
			if(count($_SESSION) > 0){ //inicio do bloco que só aparece se tiver itens na lista da session
					var_dump($_SESSION);
				//echo "Lista de itens <br/>"
				//echo "<ul>";
				//	foreach($_SESSION["ListaDeInts"] as $item){
				//		echo " <li> Item : " . $item . "</li>";
				//	}
				//echo "</ul>";


		 ?>
    <a href="QueueController/delLastItem.php" class="form-control btn btn-danger" id="Send" name="delItem">Deletar Último Item</a>
		<a href="QueueController\getMinSession.php" class="form-control btn btn-primary" id="btnSmall" name="returnSmallest">Retornar Menor Número</a>
		<input class="form-control" type="number" name=""
		 <?php if(isset($_SESSION["small_num"]) &&  $_SESSION["show"] == true )  echo "value =". $_SESSION["small_num"] ." "  ?>
		 >
		<a href="QueueController/delList.php" class="form-control btn btn-warning" id="Send" name="delList">Deletar Lista</a>

		<?php
	} //fim do bloco que só aparece se tiver itens na lista da session
		 ?>
</div>
</div> <!-- end div row -->
</div> <!-- bootstrap container -->
</body>
</html>
