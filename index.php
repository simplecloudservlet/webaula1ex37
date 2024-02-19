<!-- TODO1: PHP: Crie uma funcao que exiba o conteudo de um vetor global -->
<!-- TODO2: PHP: Crie uma funcao que insira um elemento no fim do vetor -->
<!-- TODO3: PHP: Crie uma funcao que insira vários elementos de uma única vez no vetor -->
<!-- TODO4: PHP: Crie uma funcao que exclua um elemento do vetor -->
<!-- TODO5: PHP: Crie uma funcao que exclua todos os elementos do vetor -->
<!-- TODO6: PHP: Crie uma funcao que exiba todos os elementos do vetor -->
<!-- TODO7: PHP: Crie uma funcao que exiba o número de elementos do vetor -->
<!-- TODO8: PHP: Crie uma funcao que faça a junção dos elementos de dois vetores -->
<!-- TODO9: PHP: Crie uma funcao que exiba os elementos que diferem de dois vetores -->
<!-- TODO10: PHP: Crie uma funcao que exiba os elementos que existem em comum entre dois vetores -->
<!-- TODO11: PHP: Crie uma funcao que exiba os elementos de um vetor que estao dentro de um intervalo -->

<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php 
		//
		$vetor = [1,2,3,4,5,6];

		function f1(){
			global $vetor;  //

			echo 'Funcao f1(): ' . $vetor[2] . '<br>';
			$vetor[2]++;
		}

		f1(); //Invoca a funcao

		echo 'Funcao f1(): ' . $vetor[2] . '<br>';
	?>
<br>
<br>

		<!-- TODO2 -->
		<?php 
		function f2(){

			$vetor = [];

			$vetor[] = 5;
			$vetor[] = 6;

			echo 'TODO2: ';
			var_dump($vetor);
		}

		//Invoca a funcao
		f2();

		?>
<br>
<br>

		<!-- TODO3 -->
		<?php 
		function f3(){

			$vetor = [];

			array_push($vetor, 1,2,3); //Inclui varios elementos de uma unica vez no vetor

			echo 'TODO3: ';
			var_dump($vetor);
		}

		//Invoca a funcao
		f3();

		?>
<br>
<br>

		<!-- TODO4 -->
		<?php 
		function f4(){

			$vetor = [];

			array_push($vetor, 1,2,3); //Inclui varios elementos de uma unica vez no vetor

			unset($vetor[1]); //Exclui um elemento do vetor. A posicao '$vetor[1]' permanece vazia

			echo 'TODO4: ';
			var_dump($vetor);
		}

		//Invoca a funcao
		f4();

		?>
<br>
<br>

		<!-- TODO5 -->
		<?php 
		function f5(){

			$vetor = [];

			array_push($vetor, 1,2,3); //Inclui varios elementos de uma unica vez no vetor

			unset($vetor); //Exclui todos os elementos do vetor

			echo 'TODO5: ';
			var_dump($vetor);
		}

		//Invoca a funcao
		f5();

		?>
<br>
<br>

<!-- TODO6 -->
<?php 
		function f6(){

			$vetor = [];

			array_push($vetor, 1,2,3); //Inclui varios elementos de uma unica vez no vetor

			echo 'TODO6: ';
			foreach($vetor as $item){
				echo $item . ', ';
			}

		}

		//Invoca a funcao
		f6();

		?>
<br>
<br>

<!-- TODO7 -->
<?php 
		function f7(){

			$vetor = [];

			array_push($vetor, 1,2,3); //Inclui varios elementos de uma unica vez no vetor

			echo 'TODO7: ' . count($vetor);

		}

		//Invoca a funcao
		f7();

		?>
<br>
<br>

<!-- TODO8 -->
<?php 
		function f8(){

			$vetor1 = [1,2,3];
			$vetor2 = [4,5,6];
			
			$vetor3 = array_merge($vetor1,$vetor2);

			echo 'TODO8: ';
			foreach($vetor3 as $item){
				echo $item . ', ';
			}
			//var_dump($vetor3);

		}

		//Invoca a funcao
		f8();

		?>
<br>
<br>

<!-- TODO9 -->
<?php 
		function f9(){

			$vetor1 = [1,2,3];
			$vetor2 = [4,5,6];
			
			$vetor3 = array_diff($vetor1,$vetor2); //Indica os elementos do $vetor1 que não estão no $vetor2.

			echo 'TODO9: ';
			foreach($vetor3 as $item){
				echo $item . ', ';
			}
			//var_dump($vetor3);

		}

		//Invoca a funcao
		f9();

		?>
<br>
<br>

<!-- TODO10 -->
<?php 
		function f10(){

			$vetor1 = [1,2,3];
			$vetor2 = [3,2,6];
			
			$vetor3 = array_intersect($vetor1,$vetor2); //Indica os elementos em comum.

			echo 'TODO10: ';
			foreach($vetor3 as $item){
				echo $item . ', ';
			}
			//var_dump($vetor3);

		}

		//Invoca a funcao
		f10();

		?>
<br>
<br>

<!-- TODO11 -->
<?php 
		function f11(){

			$vetor1 = [1,2,3,4,5,6];
			
			//Indica os elementos do intervalo.
			//arg1: $vetor
			//arg2: inicio
			//arg3: número de elementos a partir do 'arg2'
			$vetor3 = array_slice($vetor1,2,3); 

			echo 'TODO11: ';
			foreach($vetor3 as $item){
				echo $item . ', ';
			}
			//var_dump($vetor3);

		}

		//Invoca a funcao
		f11();

		?>
<br>
<br>

<form action='calcular.php' method="get">
		Número1: <input name="n1" type="text" required autofocus />
		<br>
		Número2: <input name="n2" type="text" required />
		<br>
		<input type="submit">
</form>
	
</body>

</html>