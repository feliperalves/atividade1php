<?php
const aniversario = 21;
    $numero = rand (1, 31);
    $tentativas = 0;
    do{
        $numero = rand (1, 31);
        $tentativas = $tentativas + 1;
    } while ($numero != aniversario);
    echo "O dia do seu nascimento foi $numero e o número de tentativas foi $tentativas"

    

?>