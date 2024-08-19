<?php
//exercício 2
$idade=4;
if($idade>=5 && $idade<=10){
    echo("Categoria A");
}else if($idade>=11 && $idade<=16){
    echo("Categoria B");
}else if($idade>=17 && $idade<=22){
    echo("Categoria C");
}else if($idade>22){
    echo("Categoria D");
}else{
    echo"Idade Inválida";
}


//exercício 1
echo"<hr>";

$A=12;
$B=10;
$C=12;

if($A<$B+$C && $B<$A+$C && $C<$A+$B){
   if($A==$B && $B==$C){
      echo"Equilátero";
   }else{
    if($A!=$B && $B!=$C && $A!=$C){
      echo"EScaleno";
    }else{
      echo"Isóseles";
    }   
}

}else{
    echo"Não forma triângulo";
}

//exercício 3
echo"<hr>";
$codigo=3;
$quantidade=2;
$total;
$nome="Produto não encontrado";
switch($codigo){
    case 1:
        $total=$quantidade*3.45;
        $nome="Bolo de Cenoura";
        break;
    case 2:
        $total=$quantidade*4.55;
        $nome="Chocolate Gurada-chuva";
        break;
    case 3:
        $total=$quantidade*6.4;  
        $nome="Copo de Iogurte";
        break;
    case 4:
        $total=$quantidade*9.4;
        $nome="Coxinha";
        break;
    case 5:
        $total=$quantidade*4.75;
        $nome="Salgadinho";
        break;
}


?>