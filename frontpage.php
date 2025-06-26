<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amphiter </title>
  <link rel="stylesheet" type="text/css" href="css/frontpage.css" />
  <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
</head>
<style> @import url("https://fonts.googleapis.com/css2?family=Anton&family=Special+Gothic+Expanded+One&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Special+Gothic+Expanded+One&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
    
    /* Fonte:
       font-family: "Anton", sans-serif;
       font-style: normal; 
    */
    
    :root {
      --colorBack: #040305;
      --colorPurple: #9800ce;
    }
    
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background-image: url(/imagens_frontpage/wallpaper_preto_textura_ondulado.jpg);
      background-size: cover;
      background-color: #121212;
      color: white;
      font-size: 16px;
      font-style: normal;
      font-optical-sizing: auto;
    }
    
    /* Gradiente fixo no topo */
    .section-gradiente {
      width: 100%;
      z-index: 1000;
    }
    
    .box-gradiente {
      position: fixed;
      top: 25px;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 30px;
      z-index: 1000;
    }
    
    .card-titulo-gradiente {
      background: rgba(5, 5, 5, 0.9);
      border-radius: 30px;
      box-shadow: 15px 15px 30px #191919, -15px -15px 30px rgb(60, 60, 60);
      padding: 20px 40px;
      text-align: center;
      margin-bottom: 30px;
      font-family: "Special Gothic Expanded One", sans-serif;
      color: #730ec7;
      animation: fadeInDown 1.5s ease-in-out;
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
    
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Estilização geral de links */
    a {
      color: inherit;
      text-decoration: none;
    }
    
    .titulo-mundo {
      font-family: "Special Gothic Expanded One", sans-serif;
      display: flex;
      justify-content: center;
      align-items: baseline;
    }
    
    /* Texto com brilho */
    .txt-brilho {
      letter-spacing: 2px;
      animation: brilho 2.5s ease-in-out infinite;
      font-size: 1em;
    }
    
    .container-card-gradiente {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .container-card-gradiente span:nth-of-type(2) {
      animation-delay: 0.35s;
    }
    
    .container-card-gradiente span:nth-of-type(3) {
      animation-delay: 0.65s;
    }
    
    .container-card-gradiente span:nth-of-type(4) {
      animation-delay: 0.9s;
    }
    
    @keyframes brilho {
      0% {
        color: #fff;
        text-shadow: 0 0 12px var(--colorPurple), 0 0 50px var(--colorPurple),
          0 0 100px var(--colorPurple);
      }
    
      10%,
      90% {
        color: var(--colorGray);
        text-shadow: none;
      }
    }
    
    /* Título com degradê animado */
    .itens-links {
      margin-left: 20px;
      font-size: 1.1rem;
      transition: color 0.3s;
    }
    
    /* Botão animado */
    
    .animated-button {
      margin-top: 15px;
      position: relative;
      display: flex;
      align-items: center;
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
    
    /* Fim - Animaçao do botão dos links */
    
    .container-principal {
      padding-top: 180px;
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 20px;
      font-family: "Anton", sans-serif;
      max-width: 1000px;
      margin: 25px auto;
    }
    
    .card-principal {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: rgba(5, 5, 5, 0.9);
      box-shadow: 0 0 25px 5px #7700ff;
      padding: 40px 30px;
      border-radius: 20px;
      width: 70%;
      max-width: 550px;
      font-size: 19px;
      gap: 40px;
      text-align: center;
      
    }
    
    .hexagono {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 15px;
      border-radius: 50%;
      box-shadow: 0 0 20px #7700ff88;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 15px 0 10px 0 ;
      transition: transform 0.4s ease;
      width: 135px;
      height: 135px;
    }
    
    .hexagono:hover {
      transform: scale(1.5);
    }
    
    .hexagono img {
      max-width: 100px;
      height: 90px;
      width: auto;
    }
    
    h1 {
      text-align: center;
      font-size: 49px;
      line-height: 100%;
      word-spacing: 10px;
    }
    
    h1 .titulo-card {
      background: linear-gradient(to right,
          #7700ff,
          #41008b,
          #a700b6,
          #7700ff,
          #41008b,
          #a700b6);
      background-size: 400% 100%;
      animation: degrade_texto 8s ease-in-out infinite;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    @keyframes degrade_texto {
      0% {
        background-position: 0% 50%;
      }
    
      50% {
        background-position: 100% 50%;
      }
    
      100% {
        background-position: 0% 50%;
      }
    }
    
    
    ul {
      display: flex;
      flex-direction: column;
      gap: 3.5px;
      list-style: none;
    }
    
    li {
      display: flex;
      align-items: center;
      gap: 5px;
    }
    
    .secao-principal {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
    
    .imagem-card {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      border-bottom: 2px solid #7700ff;
    }
    
    .imagem-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: relative;
      z-index: 0;
    }
    
    .imagem-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
    
    
    /* Carrossel */
    .carrocel-1 {
      width: 100%;
      height: 250px;
      overflow: hidden;
      position: relative;
      display: flex;
      align-items: center;
      background-color: #111;
      margin: 0;
    }
    
    .carrocel-1-slide-track {
      display: flex;
      width: calc(100% * 2);
      animation: scroll 20s linear infinite;
    }
    
    .carrocel-1-slide-track:hover {
      animation-play-state: paused;
    }
    
    @keyframes scroll {
      0% {
        transform: translateX(0);
      }
    
      100% {
        transform: translateX(-50%);
      }
    }
    
    .slide {
      flex: 0 0 calc(100% / 3);
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 15px;
      box-sizing: border-box;
      overflow: hidden;
      border-radius: 12px;
      position: relative;
    }
    
    .slide img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
      border-radius: inherit;
      transition: transform 0.3s ease;
    }
    
    .slide:hover img {
      transform: scale(1.03);
    }
    
    /* Footer */
    .footer {
      color: white;
      padding: 30px 20px 15px;
      font-family: "Anton", sans-serif;
      font-size: 15px;
      border-top: 2px solid #7700ff;
    }
    
    .footer-container {
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 15px;
      align-items: center;
      text-align: center;
    }
    
    .footer-status {
      background-color: #222;
      border-left: 4px solid #7700ff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 0 10px #7700ff33;
    }
    
    .footer-tag {
      font-family: "Special Gothic Expanded One", sans-serif;
      color: #ae00ff;
      display: block;
      margin-bottom: 10px;
    }
    
    .footer-info,
    .footer-bottom {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #666666;
    }
    
    /* Responsivo */
    @media (max-width: 480px) {
      .card-titulo-gradiente {
        font-size: 40px;
        padding: 10px;
      }
    
      h1 {
        font-size: 30px;
      }
    
      .footer-container {
        gap: 10px;
      }
    
      .slide {
        flex: 0 0 100%;
      }
    }</style>
<body>
  <main>
    <!-- Seção de Gradiente -->

      <section class="section-gradiente">
        <div class="box-gradiente">
          <div class="card-titulo-gradiente"> <!-- aqui está o título animado -->
            <div class="container-card-gradiente">
              <h1 class="titulo-mundo">
                Amphiter <!-- Ve com o Freitas se tiro ou não o card móvel  -->
              </h1>
            </div>
          </div>

          <!-- links abaixo -->
          <div class="itens-links">
            <a href="aboutus.php">
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Sobre nós</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
              </button>
            </a>
            <a href="fichas.php">
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Fichas</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
              </button>
            </a>
            <a href="login.php">
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Login</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
              </button>
            </a>
            <a href="logout.php">
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
                <span class="text">Sair</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
              </button>
            </a>
          </div>
        </div>
      </section>
      

      <!-- Seção Principal -->
      <section class="secao-principal">
        <div class="imagem-card">
          <img src="imagens/Wallpaper_principal.png" alt="Fundo" />
        </div>
        <div class="container-principal">
          <div class="card-principal">
            <div class="hexagono">
              <img width="47.11" height="37.95" src="pasta.ficha/logo/Logo Dragão - Sem Fundo .png"
                alt="Logo MundoRPG" />
            </div>
            <h1>
              Bem<span class="titulo-card">-Vindo</span> ao
              <span class="titulo-card">Amphiter</span>
            </h1>
            <p class="texto-card-principal">
              Desperte sua imaginação e crie histórias épicas em um universo
              feito por você. O destino dos reinos está nas suas mãos — e a
              jornada começa agora.
            </p>
            <ul>
              <li>
                <img src="imagens/ul sf.png" width="15" height="15" alt="check" />
                Crie fichas únicas para seus heróis e vilões
              </li>
              <li>
                <img src="imagens/ul sf.png" width="15" height="15" alt="check" />
                Explore ferramentas que ampliam sua criatividade
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Carrossel -->
      <div class="carrocel-1">
        <div class="carrocel-1-slide-track">
          <div class="slide">
            <img src="imagens/Carrocel_1.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_2.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_3.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_1.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_2.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_3.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_1.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_2.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_3.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_1.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_2.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_3.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_1.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_2.png" alt="" />                  
          </div>
          <div class="slide">
            <img src="imagens/Carrocel_3.png" alt="" />                  
          </div>
        </div>
      </div>

      <!-- Rodapé -->
      <footer class="footer">
        <div class="footer-container">
          <div class="footer-status">
            <span class="footer-tag">Amphiter - V1.0 (LANÇAMENTO)</span>
            <p>
              Em sua versão de lançamento, estamos desenvolvendo mais
              atualizações para o site.
            </p>
          </div>
          <div class="footer-info">
            <span>São Paulo, Brasil</span>
          </div>
          <div class="footer-bottom">
            <p>&copy; 2025 Amphiter. Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
  </main>
</body>

</html>
