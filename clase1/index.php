<?php
	echo "<h1> Hola php </h1>";
	echo '<br/>';
	//tipo de variable cadena
	$tipo1 = "variable string";

	//variable numerica
	$tipo2 = 3;

	//variable booleana (true o false)
	$tipo3 = true;

	//varible arreglos
	$tipo4 = array("fresa",1,2,'melon','limon');

	//immpresion de varibles 3 tipos
	//Echo no funciona para arreglos
	//echo $tipo2;

	//funciona igual que echo y ademas permite imprimir arreglos
	//print_r($tipo4);

	//Impime todo tipo de variables con informacion extra
	//var_dump($tipo4);


	$valor1 = 0;
	$valor2 = 0;

	if (isset($_GET['valor1']) && isset($_GET['valor2'])) {
		$valor1 = $_GET['valor1'];
		$valor2 = $_GET['valor2'];
	}
	

	$suma = $valor1 + $valor2;
	echo  "<br> Resultado: ".$suma;



?>