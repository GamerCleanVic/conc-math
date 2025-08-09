<?php
$tamanho = 10;
$conj_naturais = [$tamanho];
function naturais(){
  echo 'Conjunto do Naturais = { '; 
  for($i = 0; $i < 10; $i++){
      if($i >= 0 ){
        echo ($conj_naturais[$i] = $i).', ';
      }else{
        echo "Não é um n° Natural!";
      }
  }
  echo ' ...}';
}
echo naturais();
