<!--
Instituto Federal de Santa Catarina - Câmpus Canoinhas
Programação para Internet I
Wellinton Vieira
27/10/2017
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>Programação para Internet 1</title>
</head>
	<body>
		<div id="interface">
			<header id="page-header">
            	<?php
            		include '../page-header.html';
            	?>
           </header>
			<article>
				<section>
					<hr>
					<h2>Tipos de dados PHP</h2>
					<p>
						As variáveis ​​podem armazenar dados de diferentes tipos e diferentes
						tipos de dados podem fazer coisas diferentes.
					</p>
					<p>O PHP suporta os seguintes tipos de dados:</p>
					<li>String</li>
					<li>Integer</li>
					<li>Float</li>
					<li>Boolean</li>
					<li>Array</li>
					<li>Object</li>
					<li>NULL</li>
					<li>Resource</li>
					<hr>
				</section>

				<section>
					<h2>PHP String</h2>
					<p>
						Uma string é uma seqüência de caracteres, como "Hello world!".
						Uma string pode ser qualquer texto dentro de aspas.
						Você pode usar aspas simples ou duplas:
					</p>

					<p>Exemplo</p>

					<?php
						$x = "Hello world!";
						$y = 'Hello world!';

						echo $x;
						echo "<br>";
						echo $y;
					?>
					<hr>
				</section>

				<section>
					<h2>INT PHP</h2>
					<p>
						Um tipo de dados inteiros é um número não decimal entre -2.147.483.648 e 2.147.483.647.
						Regras para números inteiros:
						Um número inteiro deve ter pelo menos um dígito
						Um número inteiro não deve ter um ponto decimal
						Um número inteiro pode ser positivo ou negativo
						Os números inteiros podem ser especificados em três formatos: decimal (10-based), hexadecimal (16-based - prefixed with 0x) ou octal (8-based - prefixed with 0)
						No exemplo a seguir, $ x é um número inteiro. A função PHP var_dump () retorna o tipo de dados e o valor:
					</p>

					<p>Exemplo</p>

					<?php
						$x = 5985;
						var_dump($x);
					?>
					<hr>
				</section>
					<h2>PHP Float</h2>
					<p>
						Um flutuador (número de ponto flutuante) é um número com um ponto decimal ou um número em forma exponencial.
						No exemplo a seguir, $ x é um flutuador. A função PHP var_dump () retorna o tipo de dados e o valor:
					</p>
					<p>Exemplo</p>

					<?php
						$x = 10.365;
						var_dump($x);
					?>
					<hr>
				<section>
					<h2>PHP Boolean</h2>
					<p>
						Um booleano representa dois estados possíveis: VERDADEIRO ou FALSO.
						Os booleanos são freqüentemente usados ​​em testes condicionais. Você aprenderá mais sobre testes condicionais em um capítulo posterior deste tutorial.
					</p>
					<p>Exemplo</p>
					<?php
						$x = true;
						$y = false;
						echo $x;
						echo "\n";
						echo $y;
					?>
					<hr>
				</section>

				<section>
					<h2>PHP Array</h2>
					<p>
						Uma matriz armazena vários valores em uma única variável.
						No exemplo a seguir, $ cars é uma matriz. A função PHP var_dump () retorna o tipo de dados e o valor:
					</p>
					<p>Exemplo</p>
					<?php
						$cars = array("Volvo","BMW","Toyota");
						var_dump($cars);
					?>
					<hr>
				</section>
					<h2>PHP Object</h2>
					<p>
						Um objeto é um tipo de dados que armazena dados e informações sobre como processar esses dados.
						Em PHP, um objeto deve ser explicitamente declarado.
						Primeiro devemos declarar uma classe de objeto. Para isso, usamos a palavra-chave da classe. Uma classe é uma estrutura que pode conter propriedades e métodos:
					</p>
					<p>Exemplo</p>
					<?php
						class Car {
						    function Car() {
						        $this->model = "VW";
						    }
						}

						// cria um objeto
						$herbie = new Car();

						// mostra o conteúdo do objeto
						echo $herbie->model;
						?>
					<hr>

				<section>
					<h2>PHP NULL</h2>
					<p>
						Null é um tipo de dados especial que pode ter apenas um valor: NULL.
						Uma variável do tipo de dados NULL é uma variável que não tem valor atribuído a ele.
						Dica: se uma variável for criada sem um valor, é atribuído automaticamente um valor de NULL.
						As variáveis ​​também podem ser esvaziadas definindo o valor para NULL:
					</p>
					<p>Exemplo</p>

					<?php
						$x = "Hello world!";
						$x = null;
						var_dump($x);
					?>
					<hr>
				</section>

				<section>
					<h2>PHP Resource</h2>
					<p>
						O tipo de recurso especial não é um tipo de dados real. É o armazenamento de uma referência a funções e recursos externos ao PHP.
						Um exemplo comum de usar o tipo de dados do recurso é uma chamada de banco de dados.
					</p>
					<hr>
				</section>
			</article>
			<footer id="page-footer">
            	<?php include '../page-footer.html'; ?>
        	</footer>
		</div>
	</body>
</html>
