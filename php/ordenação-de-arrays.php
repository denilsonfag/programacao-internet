<!DOCTYPE html>

<html>
	
<head>
	<!--Autor: Silvio Miranda Junior
	Data: 27/10/2017 -->
	

	<meta charset="UTF-8">
	<title>Ordenação de Arrays PHP</title>
	
	<style type="text/css">
		
		p {
			margin: auto;
			margin-left: 25px;
		}

		h1, h3 {
			text-align: center;
		}

		h2 {
			margin-left: 50px;
		}

		header, footer {
			background-color: lightgreen;
		}


		article {
		    font-family: "Times New Roman", Georgia, Serif;
		}

	</style>

</head>

<body>
	
	<header><h1>Programação para internet 1<h1></header>
	<article>
		<section>
			<h2>Ordenação de arrays</h2>
			<p>Os elementos de um Array podem ser ordenados em ordem alfabética ou numérica, descendente e ascendente.</p>
		</section>

		<hr>

		<section>
			<h2>Funções de ordenação de Arrays usando PHP</h2>
			<p><code>sort()</code> - Ordena um array na ordem ascendente.</p>
			<p><code>rsort()</code> - Ordena um array na ordem descendente.</p>
			<p><code>asort()</code> - Ordena arrays associados na ordem ascendente, de acordo com um valor.</p>
			<p><code>ksort()</code> - Ordena arrays associados na ordem ascendente, de acordo com uma chave.</p>
			<p><code>arsort()</code> - Ordena arrays associados na ordem descendente, de acordo com um valor.</p>
			<p><code>krsort()</code> - Ordena arrays associoados na ordem descendente, de acordo com uma chave.</p>

		</section>

		<hr>

		<section>
			<h2>Ordenando Array na ordem ascendente - <code>sort()</code>.</h2>

			<p>Um array de carros que recebe as strings "Volvo", "BMW" e "Toyota" e depois ordena com a função <code>sort()</code>.</p><br>

			<?php
			$cars = array("Volvo", "BMW", "Toyota");
			sort($cars);


			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
			    echo "<p>" . $cars[$x] . "<p>";
			}
			?>

			<br>
			<p>Um array de números que recebe os números 4, 6, 2, 22, 11 e depois ordena com a função <code>sort()</code>.</p><br>

			<?php
			$numbers = array(4, 6, 2, 22, 11);
			sort($numbers);

			$arrlength = count($numbers);
			for($x = 0; $x < $arrlength; $x++) {
			    echo "<p>" . $numbers[$x] . "</p>";
			}
			?>
		</section>

		<hr>

		<section>
			<h2>Ordenando um Array na ordem descendente - <code>rsort()</code>.</h2><br>

			<p>Um array de carros que recebe as strings "Volvo", "BMW" e "Toyota" e depois ordena com a função <code>rsort()</code>.</p><br>

			<?php
			$cars = array("Volvo", "BMW", "Toyota");
			rsort($cars);

			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
			    echo "<p>" . $cars[$x] . "</p>";
			}
			?>

			<br>
			<p>Um array de números que recebe os números 4, 6, 2, 22, 11 e depois ordena com a função <code>rsort()</code>.</p><br>

			<?php
			$numbers = array(4, 6, 2, 22, 11);
			rsort($numbers);

			$arrlength = count($numbers);
			for($x = 0; $x < $arrlength; $x++) {
			    echo "<p>" . $numbers[$x] . "</p>";
			}
			?>

		</section>

		<hr>

		<section>
			<h2>Ordenando um Array de forma ascendente de acordo com um valor - <code>asort()</code>.</h2><br>
			<p>O exemplo a seguir classifica uma matriz associativa em ordem crescente, de acordo com o valor</p><br>

			<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			asort($age);

			foreach($age as $x => $x_value) {
			    echo "<p>Key = " . $x . ", Value = " . $x_value . "</p>";
			}
			?>

		</section>

		<hr>

		<section>
			<h2>Ordenando um Array de forma ascendente de acordo com uma chave - <code>ksort()</code>.</h2><br>
			<p>O exemplo a seguir classifica uma matriz associativa em ordem crescente, de acordo com a chave.</p><br>

			<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			ksort($age);

			foreach($age as $x => $x_value) {
			    echo "<p>Key = " . $x . ", Value = " . $x_value . "</p>";
			}
			?>
		</section>

		<hr>

		<section>
			<h2>Ordenando um Array de forma descendente de acordo com um valor - <code>arsort()</code>.</h2><br>
			<p>O exemplo a seguir classifica uma matriz associativa em ordem decrescente, de acordo com o valor.</p><br>

			<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			arsort($age);

			foreach($age as $x => $x_value) {
			    echo "<p>Key = " . $x . ", Value = " . $x_value . "</p>";
			}
			?>
		</section>

		<hr>

		<section>
			<h2>Ordenando um Array de forma descendente de acordo com uma chave - <code>krsort()</code>.</h2><br>
			<p>O exemplo a seguir classifica uma matriz associativa em ordem decrescente, de acordo com a chave.</p><br>

			<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			krsort($age);

			foreach($age as $x => $x_value) {
			    echo "<p>Key = " . $x . ", Value = " . $x_value . "</p>";
			}
			?>
		</section>

		<hr>

	</article>

	<footer><h3>Instituto Federal de Santa Catarina - Campus Canoinhas</h3></footer>
</body>

</html>

