<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>CSS 3</title>
</head>
 <style>
     #interface{
         display: flex;
         flex-flow: row wrap;
     }
     #interface > * {
         border: 1px solid;
         flex: 1 100%;

     }

     @media all and (min-width: 800px){
         #side-menu{
             flex: 1;
             order: 1;
         }
         #artigo{
             flex: 4;
             order: 3;

         }
         #page-footer{
             order: 3;
         }

     }




        h1 {
            text-align: center;
            font-size: 20px;
            color: black;
            border-width: medium;
            border-style: inset;
            border-color: blue;
        }


        p {
            text-align: center;
            line-height: 15px;
        }

        .p1 {
            text-align: left;
            line-height: 15px;
        }

        .p2 {
            font-weight: bold;
            text-align: left;
        }

        .p3 {
            text-align: left;
            padding-left: 30px;
        }

        .p4 {
            outline-style: double;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
        }

        .p5 {
            outline-style: ridge;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
        }

        .p6 {
            outline-style: groove;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
            outline-color: red;
        }

    </style>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu-c.html'; ?>
        </nav>

        <article id = "artigo">
             <h1>
            <b>Bordas</b>
        </h1>
        <p class="p2">As propriedades para as bordas, definem as características das quatro bordas de um elemento HTML que são as listadas a seguir:</p>
        <p class="p1">border-width:...............define a espessura da borda</p>
        <p class="p1">border-style:................define o estilo da borda</p>
        <p class="p1">border-color:................define a cor da borda</p>
        <p class="p1">border-top-width:.........define a espessura da borda superior</p>
        <p class="p1">border-top-style:..........define o estilo da borda superior</p>
        <p class="p1">border-top-color:..........define a cor da borda superior</p>
        <p class="p1">border-right-width:.......define a espessura da borda direita</p>
        <p class="p1">border-right-style:........define a estilo da borda direita</p>
        <p class="p1">border-right-color:........define a cor da borda direita</p>
        <p class="p1">border-bottom-width:...define a espessura da borda inferior</p>
        <p class="p1">border-bottom-style:....define o estilo da borda inferior</p>
        <p class="p1">border-bottom-color:....define a cor da borda inferior</p>
        <p class="p1">border-left-width:.........define a espessura da borda esquerda</p>
        <p class="p1">border-left-style:..........define o estilo da borda esquerda</p>
        <p class="p1">border-left-color:.........define a cor da borda esquerda</p>
        <hr />

        <h1> Valores válidos para as propriedades das bordas </h1>
        <p class="p2"> Color: </p>
        <p class="p3">código hexadecimal: #ffc6d9 </p>
        <p class="p3">código hexadecimal: #ffc6d9 </p>
        <p class="p3">código rgb: rgb(255,235,0) </p>
        <p class="p3">código rgba: rgb(255,235,0, 0.7) </p>
        <p class="p3">código hsl: hsl(210,100%,40%) </p>
        <p class="p3">código hsla: hsla(155,80%,35%,0.4) </p>
        <p class="p3">palavra-chave: red, blue, green...etc </p>
        <p class="p3">transparente: transparent </p>
        <hr />

        <p class="p2"> Style: </p>
        <p class="p3">none: nenhuma borda</p>
        <p class="p3">hidden: equivalente a none</p>
        <p class="p3">dotted: borda pontilhada</p>
        <p class="p3">dashed: borda tracejada</p>
        <p class="p3">solid: borda contínua</p>
        <p class="p3">double: borda dupla</p>
        <p class="p3">groove: borda entalhada</p>
        <p class="p3">ridge: borda em ressalto</p>
        <p class="p3">inset: borda em baixo relevo</p>
        <p class="p3">outset: borda em alto relevo</p>
        <hr />

        <p class="p2"> Widht: </p>
        <p class="p3">thin: borda fina</p>
        <p class="p3">medium: borda média</p>
        <p class="p3">thick: borda grossa</p>
        <p class="p3">length: unidade de medida CSS (px, pt, em, cm, ...)</p>
        <hr />

        <h1> Outline </h1>
        <p class="p2">A propriedade CSS outline é uma propriedade abreviada para configurar uma ou mais das propriedades de contorno outline-style, outline-width e outline-color em uma única declaração. Na maioria dos casos o uso abreviado é preferível e mais conveniente.</p>
        <p class="p3">Contornos não ocupam espaços, eles são desenhados acima do conteúdo.</p>
        <p class="p3">Contornos podem não ser retangulares. Eles são retangulares no Gecko/Firefox. Mas por exemplo, Opera desenha uma forma não retangular em torno de uma construção</p>

        <p class="p4">Exemplo</p>
        <p class="p5">Exemplo</p>
        <p class="p6">Exemplo</p>
        </article>



        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>CSS 3</title>
</head>
 <style>
     #interface{
         display: flex;
         flex-flow: row wrap;
     }
     #interface > * {
         border: 1px solid;
         flex: 1 100%;

     }

     @media all and (min-width: 800px){
         #side-menu{
             flex: 1;
             order: 1;
         }
         #artigo{
             flex: 4;
             order: 3;

         }
         #page-footer{
             order: 3;
         }

     }




        h1 {
            text-align: center;
            font-size: 20px;
            color: black;
            border-width: medium;
            border-style: inset;
            border-color: blue;
        }


        p {
            text-align: center;
            line-height: 15px;
        }

        .p1 {
            text-align: left;
            line-height: 15px;
        }

        .p2 {
            font-weight: bold;
            text-align: left;
        }

        .p3 {
            text-align: left;
            padding-left: 30px;
        }

        .p4 {
            outline-style: double;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
        }

        .p5 {
            outline-style: ridge;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
        }

        .p6 {
            outline-style: groove;
            outline-width: thick;
            max-width: 80px;
            padding-left: 20px;
            padding-right: 35px;
            text-align: left;
            outline-color: red;
        }

    </style>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu-c.html'; ?>
        </nav>

        <article id = "artigo">
            <h1>
            <b>Bordas</b>
            </h1>
            <p class="p2">As propriedades para as bordas, definem as características das quatro bordas de um elemento HTML que são as listadas a seguir:</p>
            <p class="p1">border-width:...............define a espessura da borda</p>
            <p class="p1">border-style:................define o estilo da borda</p>
            <p class="p1">border-color:................define a cor da borda</p>
            <p class="p1">border-top-width:.........define a espessura da borda superior</p>
            <p class="p1">border-top-style:..........define o estilo da borda superior</p>
            <p class="p1">border-top-color:..........define a cor da borda superior</p>
            <p class="p1">border-right-width:.......define a espessura da borda direita</p>
            <p class="p1">border-right-style:........define a estilo da borda direita</p>
            <p class="p1">border-right-color:........define a cor da borda direita</p>
            <p class="p1">border-bottom-width:...define a espessura da borda inferior</p>
            <p class="p1">border-bottom-style:....define o estilo da borda inferior</p>
            <p class="p1">border-bottom-color:....define a cor da borda inferior</p>
            <p class="p1">border-left-width:.........define a espessura da borda esquerda</p>
            <p class="p1">border-left-style:..........define o estilo da borda esquerda</p>
            <p class="p1">border-left-color:.........define a cor da borda esquerda</p>
            <hr />

            <h1> Valores válidos para as propriedades das bordas </h1>
            <p class="p2"> Color: </p>
            <p class="p3">código hexadecimal: #ffc6d9 </p>
            <p class="p3">código hexadecimal: #ffc6d9 </p>
            <p class="p3">código rgb: rgb(255,235,0) </p>
            <p class="p3">código rgba: rgb(255,235,0, 0.7) </p>
            <p class="p3">código hsl: hsl(210,100%,40%) </p>
            <p class="p3">código hsla: hsla(155,80%,35%,0.4) </p>
            <p class="p3">palavra-chave: red, blue, green...etc </p>
            <p class="p3">transparente: transparent </p>
            <hr />

            <p class="p2"> Style: </p>
            <p class="p3">none: nenhuma borda</p>
            <p class="p3">hidden: equivalente a none</p>
            <p class="p3">dotted: borda pontilhada</p>
            <p class="p3">dashed: borda tracejada</p>
            <p class="p3">solid: borda contínua</p>
            <p class="p3">double: borda dupla</p>
            <p class="p3">groove: borda entalhada</p>
            <p class="p3">ridge: borda em ressalto</p>
            <p class="p3">inset: borda em baixo relevo</p>
            <p class="p3">outset: borda em alto relevo</p>
            <hr />

            <p class="p2"> Widht: </p>
            <p class="p3">thin: borda fina</p>
            <p class="p3">medium: borda média</p>
            <p class="p3">thick: borda grossa</p>
            <p class="p3">length: unidade de medida CSS (px, pt, em, cm, ...)</p>
            <hr />

            <h1> Outline </h1>
            <p class="p2">A propriedade CSS outline é uma propriedade abreviada para configurar uma ou mais das propriedades de contorno outline-style, outline-width e outline-color em uma única declaração. Na maioria dos casos o uso abreviado é preferível e mais conveniente.</p>
            <p class="p3">Contornos não ocupam espaços, eles são desenhados acima do conteúdo.</p>
            <p class="p3">Contornos podem não ser retangulares. Eles são retangulares no Gecko/Firefox. Mas por exemplo, Opera desenha uma forma não retangular em torno de uma construção</p>

            <p class="p4">Exemplo</p>
            <p class="p5">Exemplo</p>
            <p class="p6">Exemplo</p>

        </article>



        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
>>>>>>> OriginalProfessor/master
