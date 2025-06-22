
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Faça seu Login</title>
    <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
<style> 
h1 {
color: white;
display: flex;
justify-content: center;
}
body {
background-color: black;

}

a {
display: flex;
justify-content: center ;

}


.animated-button {
      margin-top: 300px;
      position: relative;
      display: flex;
      justify-content: center;
      gap: 4px;
      padding: 16px 36px;
      border: 4px solid;
      border-color: transparent;
      font-size: 16px;
      background-color: black;
      border-radius: 100px;
      font-weight: 600;
      color: #ae00ff;
      box-shadow: 0 0 0 2px #ae00ff;
      cursor: pointer;
      overflow: hidden;
      transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .animated-button svg {
      position: absolute;
      width: 24px;
      fill: #ae00ff;
      z-index: 9;
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .animated-button .arr-1 {
      right: 16px;
    }
    
    .animated-button .arr-2 {
      left: -25%;
    }
    
    .animated-button .circle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 20px;
      height: 20px;
      background-color: #ae00ff;
      border-radius: 50%;
      opacity: 0;
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .animated-button .text {
      position: relative;
      z-index: 1;
      transform: translateX(-12px);
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .animated-button:hover {
      box-shadow: 0 0 0 12px transparent;
      color: #212121;
      border-radius: 12px;
    }
    
    .animated-button:hover .arr-1 {
      right: -25%;
    }
    
    .animated-button:hover .arr-2 {
      left: 16px;
    }
    
    .animated-button:hover .text {
      transform: translateX(12px);
    }
    
    .animated-button:hover svg {
      fill: #212121;
    }
    
    .animated-button:active {
      scale: 0.95;
      box-shadow: 0 0 0 4px #ae00ff;
    }
    
    .animated-button:hover .circle {
      width: 220px;
      height: 220px;
      opacity: 1;
    }
    
</style>
</head>
<body>
    <h1>SAIU DO LOGIN COM SUCESSO!</h1>
<a href="frontpage.php">
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
                <span class="text">VOLTAR PARA PÁGINA INICIAL</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
              </button>
            </a>

     
</body>



<?php
session_start(); // Inicia a sessão
session_destroy(); // Encerra a sessão do usuário
// header("Location: logout2.php"); // Redireciona para a página de login
exit();
?>
</html>
