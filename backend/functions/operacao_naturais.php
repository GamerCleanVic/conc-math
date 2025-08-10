<?php
$tamanho = 10;
$conj_naturais = [$tamanho];
function naturais(){
  echo 'Conjunto do Naturais = { '; 
  for($i = 0; $i < 10; $i++){
      $aux = $conj_naturais[$i] = $i;
      if($i >= 0){
        echo $aux.', ';
      }else{
        echo "Não é um n° Natural!";
      }
  }
  echo ' ...}<br><br>';
  echo "<h1>Operações com nºs naturais</h1>";
  echo "<div class='mainDiv'>";
  echo "<div class='card'><br><font>Soma</font><br><hr>";  
  for($i = 0; $i < 10; $i++){
      $aux = $conj_naturais[$i] = $i;
      if($i >= 0){
        echo ($aux).' + '.($aux+1).' = '.(($aux) + ($aux+1)).'<br><hr>';
      }else{
        echo "Não é um n° Natural!";
      }
  } echo '</div>';
  echo "<div class='card'><br><font>Subtração</font><br><hr>";  
  for($i = 0; $i < 10; $i++){
      $aux = $conj_naturais[$i] = $i;
      if($aux >= $i && $i != (preg_match('/^-\d+$/', $aux))){
        echo ($aux).' - '.($aux-1).' = '.(($aux) - ($aux-1)).'<br><hr>';
      }
  }echo '</div>';

  echo "<div class='card'><br><font>Multiplicação</font><br><hr>";  
  for($i = 0; $i < 10; $i++){
      $aux = $conj_naturais[$i] = $i;
      if($i >= 0){
        echo ($aux).' x '.($aux+1).' = '.(($aux) * ($aux+1)).'<br><hr>';
      }else{
        echo "Não é um n° Natural!";
      }
  }echo '</div>';
  echo "<div class='card'><br><font>Divisão</font><br><hr>";  
  foreach($conj_naturais as $item_i){
      foreach($conj_naturais as $item_j){
        if($item_i > 0 && $item_j > 0 && $item_i == $item_j || $item_j == 1){
          echo ($item_i).' / '.($item_j).' = '.(($item_i) / ($item_j)).'<br><hr>';
        }
      }
  }echo '</div>';
  echo "<div>";
}
echo naturais();
