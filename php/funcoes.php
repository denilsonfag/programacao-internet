<!-- Por João Paulo Zorek-->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  	<meta charset="utf-8">
	  	<title>Funções</title>
	</head>
	<body>
		<h1>Funções em PHP</h1>
		<p>O verdadeiro poder do PHP vem de suas funções.</p>
		<p>Podemos criar nossas próprias funções.</p>
		<p>Uma função é um bloco de instruções que podem ser usadas repetidamente em um programa.</p>
		<p>Uma função não será executada imediatamente quando uma página é carregada.</p>
		<p>Uma função será executada por uma chamada para a função.</p>

		<h2>Funções definidas pelo usuário</h2>
		<p>Uma função definida pelo usuário começa com a palavra "function".</p>

		<h3>Sintaxe</h3>
		<p><code>function nomeFuncao()	&#123;<br /> codigo a ser executado;<br />	&#125; </code></p>
		<p>Um nome de função pode começar com uma letra ou um sublinhado (não um número).</p>
		<h3>Exemplo</h3>
		<p><code>&lt;?php<br />
			function writeMsg() {<br />
			    echo "Hello world!";<br />
			}<br /><br />
			writeMsg(); // call the function<br />
			?&gt;</code>
		</p>
		<h4>Resultado:</h4>
		<?php
			function writeMsg() {
			    echo "Hello world!";
			}

			writeMsg(); // call the function
		?>
		<h3>Funções com argumentos</h3>
		<p>As informações podem ser passadas para funções através de argumentos. Um argumento é como uma variável.</p>
		<p>Argumentos são especificados após o nome da função, dentro dos parênteses. Você pode adicionar tantos argumentos quanto quiser, basta separá-los com uma vírgula.</p>
		<p>O exemplo a seguir possui uma função com um argumento ($ fname). Quando a função familyName () é chamada, também passamos ao longo de um nome (por exemplo, Jani), e o nome é usado dentro da função, que emite vários nomes diferentes, mas um sobrenome igual:</p>
		<p><code>&lt;?php<br />
			familyName($fname) {<br />
			    echo "$fname Refsnes.&lt;br&gt;";<br />
			}<br /><br />
			familyName("Jani");<br />
			familyName("Hege");<br />
			familyName("Stale");<br />
			familyName("Kai Jim");<br />
			familyName("Borge");<br />
			?&gt;</code>
		</p>
		<h4>Resultado:</h4>
		<?php
		function familyName($fname) {
		    echo "$fname Refsnes.<br>";
		}

		familyName("Jani");
		familyName("Hege");
		familyName("Stale");
		familyName("Kai Jim");
		familyName("Borge");
		?>
		<p>Também podemos usar mais de um argumento.</p>
		<h3>Funções com argumentos default</h3>

		<p>O exemplo a seguir mostra como usar um parâmetro padrão. Se chamamos a função setHeight () sem argumentos, é necessário o valor padrão como argumento:</p>
		<h4>Exemplo</h4>
		<p><code>&lt;?php<br />
			function setHeight($minheight = 50) {<br />
			   echo "The height is : $minheight <br>";<br />
			}<br /><br />
			setHeight(350);<br />
			setHeight(); // will use the default value of 50<br />
			setHeight(135);<br />
			setHeight(80);<br />
			?&gt;</code>
		</p>

		<h3>Funções retornando valores</h3>
		<p>Para que uma função retorne um valor, use a declaração return:</p>
		<h4>Exemplo</h4>
		<p><code>&lt;?php<br />
			function sum($x, $y) {<br />
			   $z = $x + $y;<br />
			   return $z;<br />
			}<br /><br />
			echo "5 + 10 = " . sum(5, 10) . "&lt;br&gt;";<br />
			echo "7 + 13 = " . sum(7, 13) . "&lt;br&gt;";<br />
			echo "2 + 4 = " . sum(2, 4);<br />
			?&gt;</code>
		</p>



	</body>
</html>
