<?php
    $dbhost = '127.0.0.1:3306';
    $dbuser = 'root';
    $dbpass = '';

    echo 'A testar conexão com DBMG:';    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn ) {
        echo 'Connected NOT successfully';
        die('Could not connect: ' . mysqli_error());
    }
    echo ' Conexão estabelecida com SUCESSO.';
    echo '<br><br> Testando conexão com tabela:';
    
    $db = mysqli_select_db( $conn, "company");
            
    $sql ='\n". "$sql  = \'SELECT * FROM `login`"';
    $result = mysqli_query($conn, "select * from login");    
    //var_dump ($result)
    
    if(($db)){
        echo 'Tabela "company" foi encontrada.';
    } else {
        echo ' Tabela "company" NÃO foi encontrada.';
    }
        
    mysqli_close($conn);
?>