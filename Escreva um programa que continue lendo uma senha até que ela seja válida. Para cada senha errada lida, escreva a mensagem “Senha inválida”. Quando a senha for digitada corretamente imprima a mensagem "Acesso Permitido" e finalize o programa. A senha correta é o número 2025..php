<?php


$senhaCorreta = 2025;


while (true) {
  
  echo "Digite sua senha: ";
  $senhaDigitada = (int) fgets(STDIN);

  
  if ($senhaDigitada === $senhaCorreta) {
   
    echo "Acesso Permitido!\n";
    break;
  } else {
   
    echo "Senha inválida.\n";
  }
}

?>
