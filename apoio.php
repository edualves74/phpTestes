<?php
/**
 * CREATED IN PHP
 * User: António Eduardo
 * Date: 8/8/2021
 * Descrição: Recebe os dados do formulário e faz tratamento de dados
 */

    $categorias = [];
    $categorias []= 'infantil';
    $categorias []= 'adolescente';
    $categorias [] = 'adulto';
    $categorias [] = 'idoso';

/** DADOS VINDOS DO FORMULÀRIO */

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    
/** PARA TESTAR O QUE RECEBEU ( para efeitos de Debug )    

    var_dump($nome);
    var_dump($idade);

*/ 

/** VALIDAÇÃO DOS DADOS  */

if (empty($nome)) {
    echo " O nome não pode ser vazio ! ";
}

if (strlen($nome) < 3) {
    echo " O nome tem de ter mais do que três caracteres.";
}


/** TRATAMENTO DE DADOS */

 
    if ($idade >= 6 && $idade <= 12) {
        for ($i=0; $i <= count($categorias); $i++){
            echo "O nadador ".$nome." compete na categoria ".$categorias($i);
        }
    }
    else if ($idade >= 13 && $idade <= 18 ) {
        for ($i=0; $i <= count($categorias); $i++){
            echo "O nadador ".$nome." compete na categoria ".$categorias($i);
        }
    }
    else { for ($i=0; $i <= count($categorias); $i++){
            echo "O nadador ".$nome." compete na categoria ".$categorias($i);
        }
    }
    



?>