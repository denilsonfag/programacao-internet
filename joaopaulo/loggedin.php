<?php # loggedin.php 


session_start();
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

	
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Bem vindo';
include ('includes/header.html');
include ('includes/navigation.html');

// Print a customized message:
echo "<h1>Conteúdo exclusivo:</h1>";


echo '<!-- Por João Paulo Zorek--> 
<!DOCTYPE html>             
<html lang="pt-br">         
  <head>                    
    <meta charset="utf-8">  
    
    <link href="../styles/blog.css" rel="stylesheet" type="text/css">
    <title>Conteúdo Links </title>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Averia+Sans+Libre");

    body{
        font-family: "Averia Sans Libre";
    }
        #interface {
          
          background-color:#212121;
          color: white;
          padding: 30px;  
        }
		h2{
		    color: white;
		}
      a:link {
          color: green; 
          background-color: transparent; 
          text-decoration: none;
      }

      a:visited {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:hover {
          color: red;
          background-color: transparent;
          text-decoration: underline;
      }

      a:active {
          color: blue;
          background-color: transparent;
          text-decoration: underline;
      }
      #interface{
      display: flex;
      flex-flow: row wrap;
    }

    #interface > *{
      flex: 1 100%;
    }

    </style>
  </head>

  <body> 
  	<div id="interface">
  	  <h1>Vamos aprender sobre links?</h1> 
      
	  	<h2>Links</h2>
	  	<p>Os links são encontrados em quase todas as páginas da web. Quando um usuário clica em um link ele é redirecionado a uma nova página. Curiosidade: porque a tag <code>&lt;a&gt;</code> se chama "a" e nao <code>&lt;link&gt;</code>? Resposta no fim da página.</p>  

	  	<p>Este é um exemplo de link: <a href="http://aminoapps.com/page/memes-hu3-br/1109290/meu-cachorro-pediu-o-link">Link</a></p>

	  	<p>Os links são definidos pela tag 	<code>&lt;a href=""&gt;	&lt;/a&gt;</code>.</p>
	  	<p>O texto que fica dentro da tag <code>
	  		&lt;a href=""&gt;Este texto aqui &lt;/a&gt;</code> será o texto exibido no link:</p>
	  	<p><a href="">Este texto aqui</a></p>

	  	<h2>Links locais</h2>
	  	<p>Um link local (link para o mesmo site) é especificado com um URL relativo (sem http: // www ....).</p>
	  	<p><a href="#">Link</a></p>

      <h2>Abrir link em uma nova guia</h2>
      <p>Um link pode ser aberto em uma nova guia do navegador, para isto basta apenas adicionar o atributo target e seta-lo como "_blank" <code>target="_blank"</code></p>
      <p><a href="https://www.google.com" target="_blank">Google</a></p>
      

      <h2>Saltar para um lugar na página</h2>
      <p>Podemos utilizar um link também para redirecionar em um ponto específico na página colocando no href o id da tag que você deseja <code>href="#id"</code></p>
      <p><a href="#interface">Ir para o topo</a></p>

      <h3>Resposta:</h3>
      <p>Porque o "a" representa "action" quando clicado desencadeia uma ação.</p>
      
  	</div>
  	
  </body>
</html>
';
echo '<br>';
echo '<!DOCTYPE html>             
<html lang="pt-br">         
  <head>                    
    <meta charset="utf-8">  
    <link href="../styles/blog.css" rel="stylesheet" type="text/css">
    <title>Conteúdo Margens</title>
    <style>
      #margin p {
              margin-top: 100px;
              margin-bottom: 100px;
              margin-right: 150px;
              margin-left: 80px;
              background-color: #38633c;
      }
        #interface {
          font-family: Roboto, Trebuchet, sans-serif;
          background-color:#212121;
          color: white;
          padding: 30px;  
        }
		h2{
		    color: white;
		}
      a:link {
          color: green; 
          background-color: transparent; 
          text-decoration: none;
      }

      a:visited {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:hover {
          color: red;
          background-color: transparent;
          text-decoration: underline;
      }

      a:active {
          color: blue;
          background-color: transparent;
          text-decoration: underline;
      }
    </style>
  </head>

  <body> 
  	<div id="interface">
  	  <h1>Vamos aprender sobre Margens?</h1> 
	  	<h2>Margens</h2>
	  	<p>As propriedades da margem CSS são usadas para gerar espaço em torno de elementos. Existem propriedades CSS para definir a margem para cada lado de um elemento (superior, direito, inferior e esquerdo).</p>
      <p>O CSS possui propriedades para especificar a margem para cada lado de um elemento: 
        <code>
          <ul>
              <li>margin-top</li>
              <li>margin-right</li>
              <li>margin-bottom</li>
              <li>margin-left</li>
          </ul>
        </code>
      </p>  
        <p>As propriedades de margens podem assumir os seguintes valores:
          <ul>
              <li><code>auto</code> - O navegador calcula a margem;</li>
              <li><code>length</code> - Especifica uma margem em px, pt, cm, etc;</li>
              <li><code>%</code> - Especifica uma margem em porcentagem da largura do elemento;</li>
              <li><code>inherit</code> - Especifica que a margem deve ser herdada do elemento pai.</li>
          </ul>
        </p>

        <p>Dica: valores negativos são permitidos.</p>
        <p>O exemplo a seguir define margens diferentes para os quatro lados de um elemento   &lt;div id = &quot;margin&quot;&gt;:</p>
        <p>
          <code>
            #margin {<br />
              margin-top: 100px;<br />
              margin-bottom: 100px;<br />
              margin-right: 150px;<br />
              margin-left: 80px;<br />
            }
          </code>
        </p> 
        <div id = "margin">
          <p>Paragrafo com a margim formatada.</p>
        </div> 
        <p>A margem também pode ser definida de forma curta, respeitando a ordem margin-top, margin-right, margin-bottom, margin-left. Exemplo:</p>
        <p>
          <code>
            p {<br />
              margin: 100px 150px 100px 80px;<br />
            }
          </code>
        </p> 
        <p>Se a propriedade da margem tiver um valor só ele é aplicado a todos os lados, se tiver mais de um o estilo é aplicado seguindo a ordem citada acima.</p>


  	</div>
  	
  </body>
</html>
';
echo '<br>';
echo '<!-- Por João Paulo Zorek--> 
<!DOCTYPE html>             
<html lang="pt-br">         
  <head>                    
    <meta charset="utf-8">  
    <link href="../styles/blog.css" rel="stylesheet" type="text/css">
    <title>Conteúdo Padding</title>
    <style>
      #padding {
              padding-top: 50px;
              padding-bottom: 30px;
              padding-right: 50px;
              padding-left: 80px;
              background-color: #38633c;
      }
        #interface {
          font-family: Roboto, Trebuchet, sans-serif;
          background-color:#212121;
          color: white;
          padding: 30px;  
        }
		h2{
		    color: white;
		}
      a:link {
          color: green; 
          background-color: transparent; 
          text-decoration: none;
      }

      a:visited {
          color: green;
          background-color: transparent;
          text-decoration: none;
      }

      a:hover {
          color: red;
          background-color: transparent;
          text-decoration: underline;
      }

      a:active {
          color: blue;
          background-color: transparent;
          text-decoration: underline;
      }
    </style>
  </head>

  <body> 
  	<div id="interface">
  	  <h1>Vamos aprender sobre Padding?</h1> 
	  	<h2>Padding</h2>
	  	<p>
As propriedades de padding CSS são usadas para gerar espaço em torno do conteúdo. O padding limpa uma área ao redor do conteúdo (dentro da borda) de um elemento. Com CSS, você tem controle total sobre o padding. Existem propriedades CSS para configurar o padding para cada lado de um elemento (superior, direito, inferior e esquerdo).</p>
      <p>O CSS possui propriedades para especificar o padding para cada lado de um elemento: 
        <code>
          <ul>
              <li>padding-top</li>
              <li>padding-right</li>
              <li>padding-bottom</li>
              <li>padding-left</li>
          </ul>
        </code>
      </p>  
        <p>As propriedades de padding podem assumir os seguintes valores:
          <ul>
              <li><code>length</code> - Especifica o padding em px, pt, cm, etc;</li>
              <li><code>%</code> - Especifica o padding em porcentagem da largura do elemento;</li>
              <li><code>inherit</code> - Especifica que o padding deve ser herdado do elemento pai.</li>
          </ul>
        </p>

        <p>O exemplo a seguir define padding diferente para os quatro lados de um elemento   &lt;div id = &quot;padding&quot;&gt;:</p>
        <p>
          <code>
            #padding {<br />
                 padding-top: 50px;<br />
                 padding-bottom: 30px;<br />
                 padding-right: 50px;<br />
                 padding-left: 80px;<br />
            }
          </code>
        </p> 
        <div id = "padding">
          <p>Paragrafo com o padding formatado.</p>
        </div> 
        <p>O padding também pode ser definido de forma curta, respeitando a ordem padding-top, padding-right, padding-bottom, padding-left. Exemplo:</p>
        <p>
          <code>
            p {<br />
              padding: 50px 30px 50px 80px;<br />
            }
          </code>
        </p> 
        <p>Se a propriedade de padding tiver um valor só ele é aplicado a todos os lados, se tiver mais de um o estilo é aplicado seguindo a ordem citada acima.</p>
        <br />
        


  	</div>
  	
  </body>
</html>
';

include ('includes/footer.html');

?>