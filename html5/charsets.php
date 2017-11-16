<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>HTML 5</title>
</head>
<style>
    #interface{
        display: flex;
        flex-flow: row wrap;
    }

    #interface > * {     /* regra aplicada a todos os subelementos dos seletores  */
        border: 1px solid;
        flex: 1 100%;
    }

    @media all and(min-width: 800px) {
        #side-menu{
            flex: 1;
            order: 1;
        }
        #artigo {
            flex: 4;
            order: 2;
        }
        #page-footer {
            order: 3;
        }

    }
</style>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <nav id="side-menu">
            <?php include 'side-menu-h.html'; ?>
        </nav>

        <article id = "artigo">
            <br/>
            <p class="pcenter">HTML 5</p>
            <br>
        </article>

        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
