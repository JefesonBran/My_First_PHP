<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label>Nome:</label><input type="text"
        name="txt_name"> 
        <label>Escolha um Checkbox</label>
        <input type="checkbox" name="opcao1">Opção1<br>
        <input type="checkbox" name="opcao2">Opção2<br>
        <label>Escolha um Radio</label>
        <input type="radio" name="op" value="op2">
        <input type="radio" name="op" value="op2">
        <label>Escolha uma opção:</label>
        <select name="option">
            <option value="Value1">Valor1</option>
            <option value="Value2">Valor2</option>
        </select>
        <input type="submit" value="Enviar"> 
    </form>
    <?php
    if(isset($_GET['txt_nome'])){
    $nome=$_GET['txt_nome'];
    $check1=$_GET['option1'];
    $check2=$_GET['option2'];
    $radio=$_GET['op'];
    $option=$_GET['option'];
    echo"Nome:$nome<br>";
    echo"Checkbox1:$check1<br>";
    echo"Radio:$radio<br>";
    echo"option:$option<br>";

    }
    //verificando checkbox
    if(isset($_GET['option1'])){
        echo"Primeira opção marcada!";
    }
    if(isset($_GET['option2'])){
        echo"Segunda opção marcada!";
    }
    ?>
</body>
</html>
