<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes </h1>
    <?php 
    $nome = "Leandro";
    $idade = "18";
    $fumante = false;
    
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p> ";

    if($idade>=18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>"; 
        echo "<p>Pode entrar na festa</p>";
    }else {
        echo "<p>Sua idade é $idade </p>"; 
        echo "<p>Você não pode entrar na festa</p>";
    }


    /*
    OPERADORES ARITMÉTICOS

    Adição: (+)
    Subtração: (-)
    Multiplicação: (*)
    Divisão: (/)
    Módulo - resto da divisão: (%)
    */
    
    /*
    OPERADORES RELACIONAIS

    ==	= Igual a
    !=	= Diferente de
    ===	= Idêntico a
    !==	= Não idêntico a
    >	= Maior do que
    >=	= Maior ou igual a
    <	= Menor do que
    <=	= Menor ou igual a
    */ 


    
    ?>
</body>    
</html>