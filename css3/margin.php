<!-- Por João Paulo Zorek--> 
<!DOCTYPE html>             
<html lang="pt-br">         
  <head>                    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
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
      @import url('https://fonts.googleapis.com/css?family=Averia+Sans+Libre');

    body{
        font-family: 'Averia Sans Libre';
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
    *{
      max-width: 100%;
    }
    @media all and (min-width: 100px){
      #interface > *{
        flex: 100%;
      }
    }

    @media all and (min-width: 800px) {
      #side-menu{
        flex: 1;
        padding-right: 3%;
      }
      #interface > section{
        flex: 4;
      }
    }
    </style>
  </head>

  <body> 
  	<div id="interface">
      <header id="page-header">
      <?php include '../page-header.html'; ?>
    </header>
    
    <nav id="side-menu">
      <?php include '../side-menu.html'; ?>
    </nav>
    <section>
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

      
    </section> 
    <footer id="page-footer">
      <?php include '../page-footer.html'; ?>
    </footer>
  </div>
  	
  </body>
</html>
