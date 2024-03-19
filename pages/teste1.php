<?php
 session_start();
 if(isset($_SESSION['oi'])){
  echo $_SESSION['oi']."<br>";
 }else{
    echo "Não existe sessão<br>";
 } 
  if(isset($oi)){
   echo $oi;
  }else{ echo "Não existe a variável oi";}
  echo "<br> Senha criptografada<br>"; 
  echo sha1("1");
  echo "<br> Senha criptografada<br>"; 
  echo sha1("1");
?>