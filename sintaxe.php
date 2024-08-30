<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tarefa</title>
</head>
<body>
  <h2>1 - Calculadora Simples</h2>
  <?php
  $numero1=24;
  $numero2=21;
  $operacao="soma";
  if($operacao=="soma"){
    $resultado=$numero1+$numero2;
    echo "<h3>O resultado é $resultado</h3>";
  }
  else if($operacao=="divisão"){
    $resultado=$numero1/$numero2;
    echo "<h3>O resultado é $resultado</h3>";
  }
  else if($operacao=="subtração"){
    $resultado=$numero1-$numero2;
    echo "<h3>O resultado é $resultado</h3>";
  }
  else if($operacao=="multiplicação"){
    $resultado=$numero1*$numero2;
    echo "<h3>O resultado é $resultado</h3>";
  }
  ?>
  <h2>2 - Calculadora de Idade</h2>
  <?php
  $anonascimento=2003;
  $anoatual=2024;
  $resultado=$anoatual-$anonascimento;
  echo "<h3>Minha idade é $resultado</h3>";
  ?>
  <h2>3 - Conversor de Temperatura</h2>
  <?php
  $temperaturacelsius=37;
  $fahrenheit=($temperaturacelsius*9/5)+32;
  echo "<h3>A temperatura convertida é $fahrenheit</h3>";
  ?>
  <h2>4 - Verificação de Paridade</h2>
  <?php
  $numero=21;
  if($numero%2==0){
    echo "<h3>É par</h3>";
  }else{
    echo "<h3>É impar</h3>";
  }
  ?>
  <h2>5 - Verificação de Faixa Etária</h2>
  <?php
  $idade=21;
  if($idade>=0 && $idade<=12 ){
    echo "<h3>É uma criança</h3>";
  }else if($idade>=13 && $idade<=17){
    echo "<h3>É um adolecente</h3>";
  }else if($idade>=18 && $idade<=64){
    echo "<h3>É um adulto</h3>";
  }else if($idade>=65){ 
    echo "<h3>É um idoso</h3>";
  }
  ?>
  <h2>6 - Verificação de Positivo, Negativo ou Zero</h2>
  <?php
  $numero=20;
  if($numero>0){
    echo "<h3>É positivo</h3>";
  }else if($numero<0){
    echo "<h3>É negativo</h3>";
  }else{
    echo "<h3>É zero</h3>";
  }
  ?>
  <h2>7 - Classificação de Nota Escolar</h2>
  <?php
  $nota=50;
  if($nota>=90 && $nota<=100){
    echo "<h3>Nota A</h3>";
  }else if($nota>=89 && $nota<=80){
    echo "<h3>Nota B</h3>";
  }else if($nota>=70 && $nota<=79){
    echo "<h3>Nota C</h3>";
  }else if($nota>=60 && $nota<=69){
    echo "<h3>Nota D</h3>";
  }else if ($nota<60){
    echo "<h3>Nota F</h3>";
  }
  ?>
  <h2>8 - Verificação de Ano Bissexto</h2>
  <?php
  $ano=2023;
  if($ano%4==0 && $ano%100!=0){
    echo "<h3>Ano Bissexto</h3>";
  }else if ($ano%400==0){
    echo "<h3>Ano Bissexto</h3>";
  }else{
    echo "<h3>Ano não Bissexto</h3>";
  }
  ?>
  <h2>9 - Verificação de Tamanho de Senha</h2>
  <?php
        $senha = "Mariana";
        if(strlen($senha) < 8 ){
        echo "<h3>Sua senha tem menos que 8 caracteres ".strlen($senha)."</h3>";
        }
    ?>
  <h2>10 - Contagem do While</h2>
  <?php
        $i = 1;
        while($i<11)
        {
            echo "<h3> $i </h3>";
            $i++;
        }
        ?>
  <h2>11 - Soma de Números com While</h2>
  <?php    
      $soma=0;
      $numero=1;
      while($numero<=100){
        $soma=$soma+$numero;
        $numero++;
      }
      echo "<h3>O resultado da soma é $soma</h3>";
  ?>
  <h2>12 - Tabada com For</h2>
    <?php
      $tabuada=5;
      echo "<h3>Tabuada do $tabuada:<br></h3>";
      for($i=1;$i<=10;$i++){
        $resultado = $tabuada * $i;
       echo "<h3>$tabuada x $i = $resultado</h3>";
       echo "<br>";
      }
    ?>
  <h2>13 - Fatorial com For</h2>
    <?php
      $numero = 7;
      $fatorial = 1;

      for ($i = $numero; $i > 0; $i--) {
        $fatorial = $fatorial * $i;
      }

      echo "<h3>O fatorial de $numero é $fatorial</h3>";
    ?>
  <h2>14 - Números Pares com For</h2>
  <?php
    echo "<h3>Os numeros pares de 1 a 50 é:</h3>";
    for($i=1;$i<=50;$i++){
      if($i%2==0){
        echo "<h3>$i\n</h3>";
      }
    }
  ?>
</body>
</html>