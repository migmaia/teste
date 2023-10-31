<?php
  // Verifica a resposta do usuário
  $resposta = $_POST["pergunta"];

  // Redireciona o usuário para a página apropriada
  if ($resposta == "sim") {
    header("Location: pagina-sim.php");
  } else {
    header("Location: pagina-nao.php");
  }
?>