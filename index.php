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

    $nota = 3;
    if($nota >= 8){
        echo "<p>Aprovado</p>";
    }else if($nota >= 5){
        echo "<p>Recuperação</p>";  
    }else{
        echo "<p>Reprovado</p>";
    }

    $idade = 20;
    if($idade>=18){
        echo "pode entrar <br> ";
    }else {
        echo "rejeitado";
    }

    $dia = 3;
    switch($dia){
        case 1:
            echo "Domingo <br>";
            break;
        case 2:
            echo "Segundo <br>";
            break;
        case 3:
            echo "terça <br>";
            break; 
        case 4:
            echo "quarta <br>";
            break;  
        case 5:
            echo "Quinta <br>";
            break; 
        case 6:
            echo "Sexta <br>";
            break;
         case 7:
            echo "Sábado <br>";
            break; 
         default:
         echo "Dia inválido amigo <br>";
         break;      
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
