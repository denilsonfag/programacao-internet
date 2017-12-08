<?php
    include('session.php');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>danielf</title>
    <link href="style.css" rel="stylesheet" type="text/css">
        </head>

    <body>
        <div id="profile">
            <b id="welcome"> Bem Vindo <i><?php echo $login_session; ?> </i> !!!</b>
            <!--
            <b id="logout"><a href="logout.php">Log Out</a></b>
            -->
            <p>Você será redirecionado para a tela principal em <span id="counter">10</span> segundo(s).</p>

        </div>
    
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 0) {
                    location.href = '../trabalhos/svg.php';
                }
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
            setInterval(function() {
                countdown();
            }, 1000);
        </script>
        </body>
    </html>