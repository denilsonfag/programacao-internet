<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <link rel="stylesheet" href="../styles/main.css" >
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
  <title>Operadores no PHP 5</title>
  <style>
    *{
      max-width: 100%;
    }

    a{
      text-decoration: none;
    }

    ul li a:hover{
      font-size: 20px;
      color: #f90056;
    }

    footer[class="pcenter"] a{
      display: block;
    }

    #page-header *, #page-footer *{
      font-family: 'Mandali', sans-serif;
    }

    #artigo *:not(code){
      font-family: 'Muli', sans-serif;
    }

    #artigo{
      padding: 8px;
    }

    #page-header, #artigo, #page-footer{
      font-size: 20px;
    }

    #page-header{
      background-image: linear-gradient(to bottom, #b3b3b3, white);
    }

    #page-footer{
      background-image: linear-gradient(to top, #999999, white);
    }

    .borda{
      border: 1px solid;
      padding: 5px;
    }

    /* Imagens */

    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /*img[alt^="maujor"]{*/
      /*width: 150px;*/
      /*height: 150px;*/
    /*}*/

    /* Tabelas */

    table{
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }

    td, th{
      padding: 8px;
      border-bottom: 1px solid #cccccc;
    }

    th{
      background-color: #999999;
    }

    tr:hover{
      background-color:#cccccc;
    }

    /* Códigos */

    .codigo{
      background-color: #272822;
      padding: 10px;
    }

    .amarelo{
      color: #e6d95c;
    }
    
    .azul{
      color: #66d9ef;
    }

    .branco{
      color: #ffffff;
    }

    h1 + h4, #interface > header > h1, #interface > footer > p{
      color: #757150;
    }

    .rosa, p > strong, #artigo > header > h1{
      color: #f90056;
    }

    .roxo{
      color: #ae81ff;
    }
  </style>
</head>
<body>
  <div id="interface">
    <header id="page-header">
      <?php include '../page-header.html'; ?>
    </header>
    
    <section>
    	<div id="artigo">
  	    <header class="pcenter">
  	      <h1 class="pcenter">Operadores no PHP</h1>
  	      <h4 class="pcenter">
  	        Fazendo aritmética, atribuições e comparações.
  	      </h4>
  	    </header>
  	    
  	    <hr>
  	    
  	    <section>
  	      <article>
  	        <h2>1. Sintaxe</h2>
  	        <p>O esqueleto de um código PHP é definido por:</p>

  	        <div class="codigo">
  	          <code class="branco">&lt;?php</code>
              <code class="branco">?></code>
  	        </div>
  	      </article>
  	      
  	      <hr>
  	      
  	      <article>
  	        <h2>2. Operadores</h2>
  	          <p>
  	            Operadores são utilizados para fazer aritmética, atribuição e comparações. Existem grupos de operadores para realizar tais tarefas.
  	          </p>

  	          <article>
  	            <h3>2.1 Operadores Aritméticos</h3>
  	            <p>
  	              São utilizados para operações <strong>matemáticas</strong> com números, assim como <strong>incremento</strong> e <strong>decremento</strong> de variáveis:
                </p>

                <table>
                  <tr>
                    <th>Operador</th>
                    <th>Nome</th>
                  </tr>
                  <tr>
                    <td>+</td>
                    <td>Adição</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Subtração</td>
                  </tr>
                  <tr>
                    <td>*</td>
                    <td>Multiplicação</td>
                  </tr>
                  <tr>
                    <td>/</td>
                    <td>Divisão</td>
                  </tr>
                  <tr>
                    <td>%</td>
                    <td>Módulo</td>
                  </tr>
                  <tr>
                    <td>**</td>
                    <td>Exponenciação</td>
                  </tr>
                  <tr>
                    <td>++$x</td>
                    <td>Pré-incremento</td>
                  </tr>
                  <tr>
                    <td>$x++</td>
                    <td>Pós-incremento</td>
                  </tr>
                 <tr>
                    <td>--$x</td>
                    <td>Pré-decremento</td>
                  </tr>
                  <tr>
                    <td>$x--</td>
                    <td>Pós-decremento</td>
                  </tr>
                </table>

                <p>
                  Exemplos:
  	            </p>

  	            <div class="codigo">
  	              <code class="branco">&lt;?php</code>
  	              <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">=</code>
                  <code class="roxo">2</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$y</code>
                  <code class="rosa">=</code>
                  <code class="roxo">3</code><code class="branco">;</code>
                  <br>
                  <code class="rosa">&nbsp;&nbsp;++</code><code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">+</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code><code class="rosa">++</code><code class="branco">;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">-</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="rosa">&nbsp;&nbsp;--</code><code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">*</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code><code class="rosa">--</code><code class="branco">;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">/</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">%</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$x</code>
                  <code class="rosa">**</code>
                  <code class="branco">$y</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">?></code>
  	            </div>

                <p>Saída:</p>

                <div class="borda">
                  <?php
                    $x = 3;
                    $y = 2;
                    ++$y;
                    echo $x + $y . "<br>";
                    $x++;
                    echo $x - $y . "<br>";
                    --$y;
                    echo $x * $y . "<br>";
                    $x--;
                    echo $x / $y . "<br>";
                    echo $x % $y . "<br>";
                    echo $x ** $y . "<br>";
                  ?>
                </div>
  	          </article>

  	          <article>
  			        <h3>2.2 Operadores de Atribuição</h3>
  			        <p>
  	              Utilizados para modificar valores de variaveis, através do operador <strong>"="</strong>:
                </p>

                <table>
                  <tr>
                    <th>Operador</th>
                    <th>Nome</th>
                  </tr>
                  <tr>
                    <td>=</td>
                    <td>Atribuição</td>
                  </tr>
                  <tr>
                    <td>+=</td>
                    <td>Adição</td>
                  </tr>
                  <tr>
                    <td>-=</td>
                    <td>Subtração</td>
                  </tr>
                  <tr>
                    <td>*=</td>
                    <td>Multiplicação</td>
                  </tr>
                  <tr>
                    <td>/=</td>
                    <td>Divisão</td>
                  </tr>
                  <tr>
                    <td>%=</td>
                    <td>Módulo</td>
                  </tr>
                </table>

                <p>
                  Exemplos:
                </p>
                  
  			        <div class="codigo">
                  <code class="branco">&lt;?php</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">=</code>
                  <code class="roxo">2</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$y</code>
                  <code class="rosa">=</code>
                  <code class="roxo">3</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$z</code>
                  <code class="rosa">=</code>
                  <code class="amarelo">"Resultado: "</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">+=</code>
                  <code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$z</code>
                  <code class="rosa">.</code>
                  <code class="branco">$x</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">-=</code>
                  <code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$z</code>
                  <code class="rosa">.</code>
                  <code class="branco">$x</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">*=</code>
                  <code class="branco">$y;</code>
                  <br> 
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$z</code>
                  <code class="rosa">.</code>
                  <code class="branco">$x</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">/=</code>
                  <code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$z</code>
                  <code class="rosa">.</code>
                  <code class="branco">$x</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">&nbsp;&nbsp;$x</code>
                  <code class="rosa">%=</code>
                  <code class="branco">$y;</code>
                  <br>
                  <code class="azul">&nbsp;&nbsp;echo</code>
                  <code class="branco">$z</code>
                  <code class="rosa">.</code>
                  <code class="branco">$x</code>
                  <code class="rosa">.</code>
                  <code class="amarelo">"&lt;br&gt;"</code><code class="branco">;</code>
                  <br>
                  <code class="branco">?></code>
                </div>
  			      </article>

              <p>Saída (bugada):</p>

              <div class="borda">
                <?php
                  $x = 3;
                  $y = 2;
                  $z = "Resultado: ";
                  $x += $y;
                  echo $z . $x . "<br>";
                  $x -= $y;
                  echo $z . $x . "<br>";
                  $x *= $y;
                  echo $z . $x . "<br>";
                  $x /= $y;
                  echo $z . $x . "<br>";
                  $x %= $y;
                  echo $z . $x . "<br>";
                ?>
              </div>

              <hr>
  			      
  			      <article>
  			        <h3>2.3 Operadores de Comparação</h3>
  			        <p>
  	              Usados para criar condições lógicas, sendo o retorno <strong>verdadeiro</strong> ou <strong>falso</strong>.
  	            </p>

                <article>
                  <h4>2.3.1 Operadores de Comparação Comuns</h4>
                  <table>
                    <tr>
                      <th>Operador</th>
                      <th>Nome</th>
                    </tr>
                    <tr>
                      <td>==</td>
                      <td>Igual</td>
                    </tr>
                    <tr>
                      <td>===</td>
                      <td>Idêntico</td>
                    </tr>
                    <tr>
                      <td>!= , &lt;&gt;</td>
                      <td>Não igual</td>
                    </tr>
                    <tr>
                      <td>!==</td>
                      <td>Não idêntico</td>
                    </tr>
                    <tr>
                      <td>></td>
                      <td>Maior que</td>
                    </tr>
                    <tr>
                      <td><</td>
                      <td>Menor que</td>
                    </tr>
                    <tr>
                      <td>>=</td>
                      <td>Maior ou igual que</td>
                    </tr>
                    <tr>
                      <td><=</td>
                      <td>Menor ou igual que</td>
                    </tr>
                  </table>

                  <p>
                    A diferença entre a comparação igual e a idêntica dá-se nos tipos de dados das variáveis, sendo verificado, na última, se os tipos de dados das variáveis comparadas são idênticos (vaja o exemplo na comparação da variável $y com $z). Exemplos:
                  </p>

                  <div class="codigo">
                    <code class="branco">&lt;?php</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$x</code>
                    <code class="rosa">=</code>
                    <code class="roxo">2</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$y</code>
                    <code class="rosa">=</code>
                    <code class="roxo">3</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$z</code>
                    <code class="rosa">=</code>
                    <code class="amarelo">"3"</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"$x == y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">==</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$y === z: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$y</code>
                    <code class="rosa">===</code>
                    <code class="branco">$z</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x != y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">!=</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$y !== z: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$y</code>
                    <code class="rosa">!==</code>
                    <code class="branco">$z</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x > y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">></code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x < y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa"><</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x >= y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">>=</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x <= y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa"><=</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="branco">?></code>
                  </div>

                  <p>Saída:</p>

                  <div class="borda">
                    <?php
                      $x = 2;
                      $y = 3;
                      $z = "3";
                      echo "$x == $y: ";
                      var_dump($x == $y);
                      echo "<br>$y === $z: ";
                      var_dump($y === $z);
                      echo "<br>$x != $y: ";
                      var_dump($x != $y);
                      echo "<br>$y !== $z: ";
                      var_dump($y !== $z);
                      echo "<br>$x > $y: ";
                      var_dump($x > $y);
                      echo "<br>$x < $y: ";
                      var_dump($x < $y);
                      echo "<br>$x >= $y: ";
                      var_dump($x >= $y);
                      echo "<br>$x <= $y: ";
                      var_dump($x <= $y);
                    ?>
                  </div>
                </article>

                <article>
                  <h4>2.3.2 Operadores de Comparação Lógica</h4>
                  
                  <table>
                    <tr>
                      <th>Operador</th>
                      <th>Nome</th>
                      <th>Condição para saída true</th>
                    </tr>
                    <tr>
                      <td>and , &amp;&amp;</td>
                      <td>And</td>
                      <td>Dois lados verdadeiros</td>
                    </tr>
                    <tr>
                      <td>or , ||</td>
                      <td>Or</td>
                      <td>Um dos lados verdadeiro</td>
                    </tr>
                    <tr>
                      <td>xor</td>
                      <td>Xor</td>
                      <td>Um dos lados verdadeiro, mas não os dois</td>
                    </tr>
                    <tr>
                      <td>!</td>
                      <td>Not</td>
                      <td>Negação de um estado</td>
                    </tr>
                  </table>

                  <p>Exemplos:</p>

                  <div class="codigo">
                    <code class="branco">&lt;?php</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$x</code>
                    <code class="rosa">=</code>
                    <code class="roxo">2</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$y</code>
                    <code class="rosa">=</code>
                    <code class="roxo">3</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$z</code>
                    <code class="rosa">=</code>
                    <code class="amarelo">"3"</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"$x == $y and $y === $z: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">==</code>
                    <code class="branco">$y</code>
                    <code class="rosa">and</code>
                    <code class="branco">$y</code>
                    <code class="rosa">===</code>
                    <code class="branco">$z</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x != $y or $y !== $z: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">!=</code>
                    <code class="branco">$y</code>
                    <code class="rosa">or</code>
                    <code class="branco">$y</code>
                    <code class="rosa">!==</code>
                    <code class="branco">$z</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x > $y xor $x < $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="branco">$x</code>
                    <code class="rosa">></code>
                    <code class="branco">$y</code>
                    <code class="rosa">xor</code>
                    <code class="branco">$x</code>
                    <code class="rosa"><</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;! $x >= $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">(</code><code class="rosa">!</code>
                    <code class="branco">$x</code>
                    <code class="rosa">>=</code>
                    <code class="branco">$y</code><code class="branco">);</code>
                    <br>
                    <code class="branco">?></code>
                  </div>

                  <p>Saída:</p>

                  <div class="borda">
                    <?php
                      $x = 2;
                      $y = 3;
                      $z = "3";
                      echo "$x == $y and $y === $z: ";
                      var_dump($x == $y and $y === $z);
                      echo "<br>$x != $y or $y !== $z: ";
                      var_dump($x != $y or $y !== $z);
                      echo "<br>$x > $y xor $x < $y: ";
                      var_dump($x > $y xor $x < $y);
                      echo "<br>! $x >= $y: ";
                      var_dump(! $x >= $y);
                    ?>
                  </div>
                </article>

  	          <article>
  	            <h3>2.4 Operadores de String</h3>
  	            <p>
  	              Necessário quando trabalha-se com strings. Usa-se o operador <strong>"."</strong> chamado <strong>concatenador</strong>.
  	            </p>
                <table>
                    <tr>
                      <th>Operador</th>
                      <th>Nome</th>
                      <th>Descrição</th>
                    </tr>
                    <tr>
                      <td>.</td>
                      <td>Concatenação</td>
                      <td>Junção de duas strings</td>
                    </tr>
                    <tr>
                      <td>.=</td>
                      <td>Atribuição de Concatenação</td>
                      <td>Concatena duas strings e atribui em uma string</td>
                    </tr>
                  </table>
                <p>Exemplos:</p>

                <div class="codigo">
                    <code class="branco">&lt;?php</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$x</code>
                    <code class="rosa">=</code>
                    <code class="roxo">2</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$y</code>
                    <code class="rosa">=</code>
                    <code class="roxo">3</code><code class="branco">;</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$z</code>
                    <code class="rosa">=</code>
                    <code class="amarelo">"Saída"</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="branco">$z</code>
                    <code class="rosa">.</code>
                    <code class="amarelo">"x = $x e y = $y&lt;br&gt;"</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="branco">$z</code>
                    <code class="rosa">.</code>
                    <code class="amarelo">"x = "</code>
                    <code class="rosa">.</code>
                    <code class="branco">$x</code>
                    <code class="rosa">.</code>
                    <code class="amarelo">" e y = "</code>
                    <code class="rosa">.</code>
                    <code class="branco">$y;</code>
                    <br>
                    <code class="branco">?></code>
                  </div>

                  <p>Saída:</p>

                  <div class="borda">
                    <?php
                      $x = 2;
                      $y = 3;
                      $z = "Saída: ";
                      echo $z . "x = $x e y = $y<br>";
                      echo $z . "x = " . $x . " e y = " . $y;
                    ?>
                  </div>
  	          </article>
  			    </article>

            <article>
                <h3>2.5 Operadores de Array</h3>
                <p>
                  Útil quando utilizam-se <strong>arrays</strong>.
                </p>
                <table>
                    <tr>
                      <th>Operador</th>
                      <th>Nome</th>
                      <th>Descricao</th>
                    </tr>
                    <tr>
                      <td>+</td>
                      <td>União</td>
                      <td>União de dois arrays</td>
                    </tr>
                    <tr>
                      <td>==</td>
                      <td>Igualdade</td>
                      <td>Compara se pares de chaves/valores são iguais</td>
                    </tr>
                    <tr>
                      <td>===</td>
                      <td>Identidade</td>
                      <td>
                        Compara se pares de chaves/valores na mesma ordem são iguais e tem tipos de dados iguais
                      </td>
                    </tr>
                    <tr>
                      <td>!=, &lt;&gt;</td>
                      <td>Desigualdade</td>
                      <td>Compara se pares de chaves/valores são diferentes</td>
                    </tr>
                    <tr>
                      <td>!==</td>
                      <td>Sem identidade</td>
                      <td>Compara se dois arrays não são idênticos</td>
                    </tr>
                  </table>

                <p>Exemplos:</p>

                <div class="codigo">
                    <code class="branco">&lt;?php</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$x</code>
                    <code class="rosa">=</code>
                    <code class="azul">array</code><code class="branco">(</code><code class="amarelo">'a'</code>
                    <code class="rosa">=></code>
                    <code class="roxo">1</code><code class="branco">,</code>
                    <code class="amarelo">'b'</code>
                    <code class="rosa">=></code>
                    <code class="roxo">2</code><code class="branco">);</code>
                    <br>
                    <code class="branco">&nbsp;&nbsp;$y</code>
                    <code class="rosa">=</code>
                    <code class="azul">array</code><code class="branco">(</code><code class="amarelo">'c'</code>
                    <code class="rosa">=></code>
                    <code class="roxo">3</code><code class="branco">,</code>
                    <code class="amarelo">'d'</code>
                    <code class="rosa">=></code>
                    <code class="roxo">4</code><code class="branco">);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"$x U $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;print_r</code><code class="branco">($x</code>
                    <code class="rosa">+</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x == $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">($x</code>
                    <code class="rosa">==</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x === $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">($x</code>
                    <code class="rosa">===</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x != $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">($x</code>
                    <code class="rosa">!=</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x &lt;&gt; $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">($x</code>
                    <code class="rosa">&lt;&gt;</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;echo</code>
                    <code class="amarelo">"&lt;br&gt;$x !== $y: "</code><code class="branco">;</code>
                    <br>
                    <code class="azul">&nbsp;&nbsp;var_dump</code><code class="branco">($x</code>
                    <code class="rosa">!==</code>
                    <code class="branco">$y);</code>
                    <br>
                    <code class="branco">?></code>
                  </div>

                  <p>Saída:</p>

                  <div class="borda">
                    <?php
                      $x = array('a' => 1, 'b' => 2);
                      $y = array('c' => 3, 'd' => 4);
                      echo "x U y: ";
                      print_r($x + $y);
                      echo "<br>x == y: ";
                      var_dump($x == $y);
                      echo "<br>x === y: ";
                      var_dump($x === $y);
                      echo "<br>x != y: ";
                      var_dump($x != $y);
                      echo "<br>x <> y: ";
                      var_dump($x <> $y);
                      echo "<br>x !== y: ";
                      var_dump($x !== $y);
                    ?>
                  </div>
              </article>

  	        <hr>

  	        <article>
  	          <h2>5. Lista de operadores deste artigo</h2>

  	          <table>
  	            <tr>
  	              <th>Operador</th>
  	              <th>Grupo</th>
                  <th>Nome</th>
  	            </tr>
  	            <tr>
  	              <td>+</td>
                  <td>Operador aritmético</td>
                  <td>Adição</td>
  	            </tr>
  	            <tr>
                  <td>-</td>
                  <td>Operador aritmético</td>
                  <td>Subtração</td>
  	            </tr>
  	            <tr>
                  <td>*</td>
                  <td>Operador aritmético</td>
                  <td>Multiplicação</td>
  	            </tr>
  	            <tr>
                  <td>/</td>
                  <td>Operador aritmético</td>
                  <td>Divisão</td>
  	            </tr>
  	            <tr>
                  <td>%</td>
                  <td>Operador aritmético</td>
                  <td>Módulo</td>
  	            </tr>
  	            <tr>
                  <td>**</td>
                  <td>Operador aritmético</td>
                  <td>Exponenciação</td>
  	            </tr>
  	            <tr>
                  <td>++$x</td>
                  <td>Operador de incremento</td>
                  <td>Pré-incremento</td>
  	            </tr>
  	            <tr>
                  <td>$x++</td>
                  <td>Operador de incremento</td>
                  <td>Pós-incremento</td>
  	            </tr>
  	            <tr>
                  <td>--$x</td>
                  <td>Operador de decremento</td>
                  <td>Pré-decremento</td>
  	            </tr>
  	            <tr>
                  <td>$x--</td>
                  <td>Operador de decremento</td>
                  <td>Pós-decremento</td>
  	            </tr>
  	            <tr>
                  <td>=</td>
                  <td>Operador de atribuição</td>
                  <td>Atribuição</td>
  	            </tr>
  	            <tr>
                  <td>+=</td>
                  <td>Operador de atribuição</td>
                  <td>Adição</td>
  	            </tr>
  	            <tr>
                  <td>-=</td>
                  <td>Operador de atribuição</td>
                  <td>Subtração</td>
  	            </tr>
  	            <tr>
                  <td>*=</td>
                  <td>Operador de atribuição</td>
                  <td>Multiplicação</td>
  	            </tr>
  	            <tr>
                  <td>/=</td>
                  <td>Operador de atribuição</td>
                  <td>Divisão</td>
  	            </tr>
                <tr>
                  <td>%=</td>
                  <td>Operador de atribuição</td>
                  <td>Módulo</td>
                </tr>
                <tr>
                  <td>==</td>
                  <td>Operador de comparação</td>
                  <td>Igual</td>
                </tr>
                <tr>
                  <td>===</td>
                  <td>Operador de comparação</td>
                  <td>Idêntico</td>
                </tr>
                <tr>
                  <td>!=, &lt;&gt;></td>
                  <td>Operador de comparação</td>
                  <td>Não igual</td>
                </tr>
                <tr>
                  <td>!==</td>
                  <td>Operador de comparação</td>
                  <td>Não idêntico</td>
                </tr>
                <tr>
                  <td>></td>
                  <td>Operador de comparação</td>
                  <td>Maior que</td>
                </tr>
                <tr>
                  <td><</td>
                  <td>Operador de comparação</td>
                  <td>Menor que</td>
                </tr>
                <tr>
                  <td>>=</td>
                  <td>Operador de comparação</td>
                  <td>Maior ou igual que</td>
                </tr>
                <tr>
                  <td><=</td>
                  <td>Operador de comparação</td>
                  <td>Menor ou igual que</td>
                </tr>
                <tr>
                  <td>and, &amp;&amp;</td>
                  <td>Operador lógico</td>
                  <td>And</td>
                </tr>
                <tr>
                  <td>or, ||</td>
                  <td>Operador lógico</td>
                  <td>Or</td>
                </tr>
                <tr>
                  <td>xor</td>
                  <td>Operador lógico</td>
                  <td>Xor</td>
                </tr>
                <tr>
                  <td>!</td>
                  <td>Operador lógico</td>
                  <td>Not</td>
                </tr>
                <tr>
                  <td>.</td>
                  <td>Operador de string</td>
                  <td>Concatenação</td>
                </tr>
                <tr>
                  <td>.=</td>
                  <td>Operador de string</td>
                  <td>Atribuição de Concatenação</td>
                </tr>
                <tr>
                  <td>+</td>
                  <td>Operador de array</td>
                  <td>União</td>
                </tr>
                <tr>
                  <td>==</td>
                  <td>Operador de array</td>
                  <td>Igualdade</td>
                </tr>
                <tr>
                  <td>===</td>
                  <td>Operador de array</td>
                  <td>Identidade</td>
                </tr>
                <tr>
                  <td>!=, &lt;&gt;</td>
                  <td>Operador de array</td>
                  <td>Desigualdade</td>
                </tr>
                <tr>
                  <td>!==</td>
                  <td>Operador de array</td>
                  <td>Sem identidade</td>
                </tr>
  	          </table>
  	        </article>
  			  </section>

  	    <hr>

  	    <footer class="pcenter">
  	      <h2 class="rosa">Fonte:</h2>
  	      <a href="https://www.w3schools.com/php/php_operators.asp">
  	        <figure>
  	          <img src="http://mostlywebsites.net/wp-content/uploads/w3schools-logo.jpg" title="PHP 5 Operators" alt="PHP 5 Operators">
  	        </figure>
  	      </a>
  	      <p class="pcenter">#CSTADS - 2017</p>
  	    </footer>
  	  </div>
  	</section>
    
    <footer id="page-footer">
      <?php include '../page-footer.html'; ?>
    </footer>
  </div>
</body>
</html>