<!-- 
Wellinton Vieira
Programação para Internet I
 -->

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="../css/stylePage.css">
		<title>Principal</title>
		<?php  
			session_start();
			if((!isset ($_SESSION['usuario']) == true)){
				unset($_SESSION['usuario']);
				header('location:../index.php');
			}
		?>
	</head>
	<body>
		<div id="pagina">
			
			<img src="../images/ifsc.png" id="logo">

			<h1 id="titulo"><u>Formatação Básica de Texto</u></h1><br>
			<hr>	

			<img src="../images/html_img1.png" id="logo_html_css">

			<p>
				As headings &lt;h1&gt; a &lt;h6&gt;<br><br>
				De acordo com a especificação HTML 5, ela é usada para dar uma ênfase ao texto, ou seja, colocar destaque a palavra ou frase, como títulos e subtílos, podendo ser alterada com o uso de CSS, elas ão elementos que representam os seis níveis de titulos de cabeçalhos dos documentos. Um elemento título descreve brevemente o tema da seção.
			</p>

			<p>Exemplo:</p>
			
			<div id="exemploh1ah6">
				<h1> Programação para Internet I </h1>
				<h2> Programação para Internet I </h2>
				<h3> Programação para Internet I </h3>
				<h4> Programação para Internet I </h4>
				<h5> Programação para Internet I </h5>
				<h6> Programação para Internet I </h6>
			</div>
			
			<hr>

			<p>
				A Tag &lt;p&gt;<br><br>
				Esta tag define um parágrafo. Os navegadores adicionam automaticamente algum espaço (margem) antes e depois de cada elemento. As margens podem ser modificadas com CSS (com as propriedades da margem).
			</p>
			
			<p>Exemplo:</p>

			<p id="paragrafo">	
				Pode parecer um pouco estranho ouvir falar sobre HTML em um site voltado para a programação, pois ao contrário do que muitos pensam, HTML não é linguagem de programação. Mas sua importância é tanta, que o estudo do HTML é obrigatório para todos desenvolvedores Web. Como já dissemos ao longo de diversos artigos de nosso site, o computador foi feito para computar. Ou seja, contar, realizar cálculos, fazer operações matemáticas de uma maneira bem veloz. E para superar alguns segundos de cálculos de um moderno computador, seria necessário todas as pessoas que já viveram fizessem contas durante décadas em calculadoras. 
			</p>

			<p id="paragrafo">
				Ok, esse foi o primeiro propósito da computação. Mas logo se viu que só fazer as contas não era muito útil. Essa informação precisava ser compartilhada, enviada para outros locais. E aí que entrou a internet. E estas são as duas principais utilidades de um computador: fazer cálculos e compartilhar essas informações.
			</p>

			<img src="../images/html_img2.png" id="logo_html_html">

			<p id="paragrafo">
				Até meados da década de 90, praticamente só as linguagens para desktop reinavam. E o motivo era claro: pouquíssimas pessoas usavam internet, e em décadas anteriores somente o governo e militares usavam a grande rede. E hoje a internet é…bom, nem precisa falar da importância dela. O principal motivo de venda de computadores é um só: acessar a internet, trocar informações, se comunicar. Não é por menos que o desenvolvimento Web se tornou tão importante, e muitas pessoas simplesmente só querem saber de criar aplicações para a internet: redes sociais, jogos online, programas de troca de mensagens, sites de vendas etc. Mas antes de entrarmos mais em detalhes sobre as linguagens de programação usadas para criar sistemas para internet (como JavaScript e PHP), precisamos aprender a base, o mais essencial, o pontapé inicial que muitas vezes passa despercebido: o HTML.
			</p>

			<hr>

			<p>
				A Tag &lt;br&gt;<br><br>
				Esta tag quebra uma linha em texto.
			</p>

			<p>Exemplo:</p>
			
			<p id="paragrafo">
				Como dissemos logo de cara, HTML não é uma linguagem de programação, é uma linguagem de marcação, como seu próprio nome diz (HTML é HyperText Markup Language), e foi inventada na época em que os cientistas e militares estavam começando a trocar informações sobre os cálculos computacionais. 
			</p><br>	

			<p id="paragrafo">
				De uma maneira bem direta, a linguagem de marcação é um conjunto de regras e códigos para definir como um conteúdo da web vai ser definido, como uma página será formatada e exibida. E o que raios isso significa? Que marcação é essa? Imagine um livro. Ele tem sua capa, suas cores, títulos, sumário, quando o capítulo termina numa página, o próximo capítulo só inicia em outra página, existe um espaçamento entre um parágrafo e outro, as palavras estrangeiras são em itálico, citações são feitas entre aspas etc etc.
				Isto são regras de formatação, um conjunto de modelos, ordens, para que o texto seja exibido. Por exemplo: podeRíaMos esCreverAssim,oTextoÉoMesmo,maS_a-Organização-Éhorrível.
			</p><br>

			<p id="paragrafo">	
				O HTML não vai se importar com o conteúdo, com o texto que escrevi, e sim sua organização.
				Ele que diz quando vai existir um espaço, um parágrafo, um título com letra maior, com cores diferentes, onde uma figura vai ficar na página, ele vai dizer que o menu fica ao lado e o cabeçalho em cima etc. É a marcação, a formatação do conteúdo. Imagine esta página sem título, sem espaçamento, tudo com o mesmo tamanho de fonte, cor, a figura por cima do texto ou depois dele (quando deveria ficar ao lado, para ilustrar).
			</p><br>
			
			<p id="paragrafo">	
				Esse é o trabalho do HTML, cuidar da organização, da exibição do conteúdo. E não importa se seu conteúdo é uma rede social, um artigo científico, um e-mail para seu chefe ou as imagens e textos de um jogo online: toda informação precisa ser bem organizada, ser exibida de uma maneira esteticamente agradável, numa ordem que faça sentido. Em outras palavras: HTML é importante para tudo, em termos de criação de sites.
			</p><br>
			
			<hr>

			<img src="../images/html5.png" id="logo_html5">

			<p>
				A Tag &lt;hr&gt;<br><br>
				Esta tag é utilizada para separa um conteúdo de uma página, por exemplo, separar sessões numa página, ou uma mudança de tópicos.
			</p>

			<p>Exemplo:</p>
			
			<p id="paragrafo">
				Até há alguns anos atrás, em toda página que você criava, tinha que decidir o tamanho do título de cada página, a cor das fontes, a figura do background, o espaçamento, tamanho das figuras e tudo que se refere ao estilo de um página. Imagine um portal, com a globo.com, que tem milhões de páginas. Isso era um trabalho absurdo, medonho. E quem criava o texto, tinha que se preocupar com a organização e o estilo. Mas, para sua felicidade, hoje em dia usamos um troço chamado CSS (Cascade Sheet Style), que nada mais é que uma série de regras que definem um estilo.
			</p>

			<hr>

			<p id="paragrafo">
				Assim, criamos um arquivo ditando as regras: o espaçamento entre um parágrafo e outro é tal ; a cor do título é tal ; o tamanho da fonte do título é essa, e a do texto aquela. Ah, é uma imagem? Então seu tamanho é esse. É um subtítulo? Então a cor e tamanho da fonte será esta. A seção é a de moda? Então a cor é rosa. Essa página vai ficar na seção de esporte? Então use um tema com cor verde. Ou seja, definimos uma folha de estilos, uma folha com um conjunto de regras. E em vez de, em cada página, definir esses estilos, a página simplesmente vai consultar a folha de estilo CSS: "Hey CSS, esse título, é que cor? E o tamanho? E o espaçamento?
				Onde boto essa figura?"
			</p>

			<hr>

			<p>
				A Tag &lt;pre&gt;<br><br>
				Esta tag conforme a especificação HTML5 define um texto pré-formatado. O texto em um elemento, é exibido em uma fonte de largura fixa (geralmente Courier), e preserva espaços e quebras de linha.
			</p>

			<p>Exemplo:</p>

			<pre>
Assim você pode ter bilhões de páginas, mas o estilo delas quem vai definir é um único arquivo. 
Se todos seus títulos são em azul e você quiser mudar para vermelho, vai nessa folha de estilos 
e altera somente lá, pois é dessa fonte que todas as páginas vão consultar para saber que cor usar 
nos títulos. Daí, você altera só uma vez em um lugar, e esse efeito se espalha por todo o seu site. 
Bacana, esse CSS não? Não é à toa que só vemos cursos e tutoriais como "HTML & CSS", essa dupla é 
inseparável hoje em dia. Outro fato bacana é que você pode ter alguém só pra escrever o conteúdo de 
texto de um site (um jornalista, por exemplo), contratar um Webdesigner para definir a parte gráfica 
e estética do site, e um desenvolvedor Web para trabalhar somente com o PHP, HTML e JavaScript. 
Ou seja, o cara que cria o texto não tem que se estressar com estilo e detalhes estéticos, quem 
criar a folha de estilos CSS é que faz isso. O programador PHP também não vai se importar com a 
criação do conteúdo, só com o HTML, JavaScript e PHP. Ele programa "essa menu fica do lado, esses 
links aqui e o conteúdo do artigo aqui, o que vai ter nesse artigo ou o design do site não me importa"
			</pre>
			
			<hr>

			<p>
				A Tag &lt;code&gt;<br><br>
				Esta tag permite que você formate o texto para fazê-lo parecer antigos estilos de computador. Isso ofrece um tamanho e distancia específicas ao código de computador.
			</p>
			
			<p>Exemplo:</p>

			<p>Esse é um exemplo de <a href="http://www.google.com" title="Google"><code>Link da Google</code></a> formatado com a tag code.</p>

			<hr>

			<p>
				A Tag &lt;var&gt;<br><br>
				Esta tag representa uma variável em uma expressão matemática ou um contexto de programação.
			</p>

			<p>Exemplo:</p>
				
			<p> 
				Uma simples equação: <var>x</var> = <var>y</var> + 2 
			</p>
			
			<hr>

			<p id="centro">
				<u>Referência</u><br>
				<a href="https://www.w3schools.com/" target="_blank">
				<img src="../images/w3schools.png" target="_blank" title="https://www.w3schools.com/"></a>
			</p>
		</div>
	</body>
</html>