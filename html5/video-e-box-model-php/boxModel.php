<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css" >
    <title>Programação para Internet</title>

    <style>

        @import url('https://fonts.googleapis.com/css?family=Raleway');

        p {
            color: white;
            border: 2px solid #561c1c;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .corpo {
            margin: auto;
            height: 100px;
            width: 50%;

        }

        .corpomenu {
            border: 25px;
            padding: 25px;
            margin: left    ;
            height: 100px;
            width: 50%;

        }

        .titulo{
            padding: 150px;
            margin: auto;
            height: 100px;
            width: 50%;
        }

        .voltar{
            width: 300px;
            border: 25px;
            margin: 10px;
            height: 100px;
        }

        .img{
            margin: auto;
        }


        .ex1{
            border-style: dotted dashed solid double;
            border-color: red green blue yellow;
        }

        .ex2{
            border-style: solid;
            border-color: red green blue yellow;
        }

        .ex3{
            border: 2px solid  yellow;
            border-radius: 20px;
        }

        body{
            background-color: black;
            font-family: Raleway;
        }

        a:hover {
            color: white;
        }

        a:active {
            color: #561c1c;
        }

        a{
            color: white;
        }

            #sidebar nav ul li{
                display: inline;
                border: 2px solid #561c1c;
                border-radius: 10px;
                padding: 10px;
                width: 200px;
            }

            @media all and (min-width: 600px) {
                #sidebar {
                    flex: 1;
                }
                #sidebar nav ul li{
                    display: block;
                }
            }

    </style>

</head>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include 'page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu.html'; ?>
        </nav>

        <article>
            <div class="voltar">
    <p><a href="index.html">Página inicial!</a></p>

    <section id="sidebar">
      <nav>
        <ul>
          <li><a href="#conteudo">Conteúdo (content)</a><br/></li>
          <li><a href="#margens">Margens (margin)</a><br/></li>
          <li><a href="#bordas">Bordas (border)</a><br/></li>
          <li><a href="#espacamento">Espaçamento (padding)</a><br/></li>
        </ul>
      </nav>
    </section>
    </div>


    <div class="titulo">
    <h1>Box Model com CSS<br/>Aprendendo o funcionamento dos elementos em HTML</h1>
    </div>

    <div class="corpo">
    <figure class="img">
        <img src="../../images/box-model.png" alt="Box Model" title="Exemplo de Box Model" width="783" height="300" />
        <figcaption>Exemplo de Box Model</figcaption>
    </figure>

    <p>
    <a name="conteudo"><strong>Content</strong></a></br></br>
    <strong>O conteúdo é tudo aquilo que ficar dentro do espaçamento, bordas e margens, seja texto, imagem vídeo ou o que for!</strong>
    </p>

    <p>
    <a name="margens"><strong>Margin</strong></a></br></br>
    A margem nada mais é do que o espaçamento externo do elemento ao qual ela for aplicada.</br>
    Você pode utilizar da seguinte forma:</br></br>
    margin-top: irá definir a margem superior do elemento;</br></br>
    margin-right: irá definir a margem direita do elemento;</br></br>
    margin-left: irá definir a margem esquerda do elemento;</br></br>
    margin-bottom: irá definir a margem inferior do elemento;</br></br>
    margin: dessa maneira você pode definir margens diferentes ao mesmo tempo na ordem:</br></br>
    <strong>TOPO, DIREITA, BAIXO e ESQUERDA.</strong></br></br>
    Para definir o tamanho da margem utiliza-se a unidade de medida pixel (px), portanto, poderiamos definir da seguinte forma:</br></br>
    <strong>margin: 10px 20px 10px 20px</strong></br></br>
    Dessa maneira teriamos o topo com 10 pixels, o lado direito com 20, a parte de baixo com 10 e o lado esquerdo com 20!
    </p>


    <p>
    <a name="bordas"><strong>Border</strong></a></br>
    Bordas, como o próprio nome diz, irão definir como as bordas do elemento ao qual elas forem aplicadas irão aparentar.</br></br>
    A propriedade de bordas é umas das mais variáveis, pois é possível trabalhar com ela de diversas maneiras, aqui abordaremos 3 maneiras de forma simples,</br></br>
    mas<a href="https://www.w3schools.com/css/css_border.asp"> <strong>AQUI</strong> </a> você pode encontrar um material mais avnçado e completo, vamos lá!!</br></br>
    Iremos abordar:</br></br>
    border-style: com essa prorpiedade podemos mudar o estilo da borda!</br></br>
    border-color: com essa propriedade podemos mudar a cor da borda do elemento!</br></br>
    border-radius: com essa propriedade podemos arredondar as bordas do nosso elemento!</br></br>
    Todas essas propriedades nós iremos configurar com a unidade de medida pixel (px).</br></br>
    Alguns exemplos:</br></br>
    </p>

    <div class="ex1">
        <h1>Aqui temos um exemplo de borda com estilo dotted (pontilhada), dashed (tracejada), solid (sólida) e double (dupla)!</h1>
    </div>

    </br></br>

    <div class="ex2">
        <h1>Aqui temos um exemplo de borda colorida!</h1>
    </div>

    </br></br>

    <div class="ex3">
        <h1>Aqui temos um exemplo de borda arredondada!</h1>
    </div>

    <p>
    <a name="espacamento"><strong>Padding</strong></a></br></br>
    Padding é o preenchimento do elemento, ou seja, o espaçamento interno do elemento.</br>
    Você pode utilizar da seguinte forma:</br></br>
    padding-top: irá definir o espaçamento superior do elemento;</br></br>
    padding-right: irá definir o espaçamento direita do elemento;</br></br>
    padding-left: irá definir o espaçamento esquerda do elemento;</br></br>
    padding-bottom: irá definir o espaçamento inferior do elemento;</br></br>
    padding: dessa maneira você pode definir espaçamentos diferentes ao mesmo tempo na ordem:</br></br>
    <strong>TOPO, DIREITA, BAIXO e ESQUERDA.</strong></br></br>
    Para definir o tamanho do espaçamento utiliza-se a unidade de medida pixel (px), portanto, poderiamos definir da seguinte forma:</br></br>
    <strong>padding: 10px 20px 10px 20px</strong></br></br>
    Dessa maneira teriamos o topo com 10 pixels, o lado direito com 20, a parte de baixo com 10 e o lado esquerdo com 20!
    </p>



    </div>

        </article>

        <footer id="page-footer">
            <?php include 'page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
