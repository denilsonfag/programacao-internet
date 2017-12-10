<?php
    $dbhost = '127.0.0.1:3306';
    $dbuser = 'root';
    $dbpass = '';

    echo 'A testar conexão com DBMG:';    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
        echo 'Conexão sem sucesso';
        die('Sem conexão: ' . mysqli_error());
    }
    echo ' Conexão estabelecida com SUCESSO.';
    echo '<br><br> Testando conexão com tabela:';
    
    $db = mysqli_select_db( $conn, "danielf");
            
    $sql ='\n". "$sql  = \'SELECT * FROM `login`"';
    $result = mysqli_query($conn, "select * from login");   

    var_dump ($result);
    var_dump ($sql);

    
    //var_dump ($result)
    
    if(($db)){
        echo 'Tabela "dfrutos" foi encontrada.';
    } else {
        echo ' Tabela "dfrutos" NÃO foi encontrada.';
    }
        
    mysqli_close($conn);
?>