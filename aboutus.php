<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre Nós</title>
  <link rel="stylesheet" href="/css/aboutus.css" />
  <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
</head>
<style>@import url("https://fonts.googleapis.com/css2?family=Anton&family=Special+Gothic+Expanded+One&display=swap");

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
      font-family: "Anton", sans-serif;
      font-style: normal;
      font-optical-sizing: auto;
      font-size: 16px;
      background-image: url('/imagens_frontpage/wallpaper_preto_textura_ondulado.jpg');
      background-size: cover;
      background-color: #121212;
      color: white;
    }
    
    a {
      color: inherit;
      text-decoration: none;
    }
    
    /* HEADER */
    .section-gradiente {
      width: 100%;
      z-index: 1000;
    }
    
    .box-gradiente {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 30px;
      z-index: 1000;
      background-size: 200% 200%;
      animation: degrade-animado 2.5s infinite alternate;
    }
    
    .card-titulo-gradiente {
      background: rgba(5, 5, 5, 0.9);
      border-radius: 30px;
      box-shadow: 15px 15px 30px #191919, -15px -15px 30px #3c3c3c;
      padding: 20px 40px;
      text-align: center;
      font-family: "Special Gothic Expanded One", sans-serif;
      color: #730ec7;
      animation: fadeInDown 1.5s ease-in-out;
    }
    
    .container-card-gradiente {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .titulo-mundo {
      display: flex;
      justify-content: center;
      align-items: baseline;
      font-size: 49px;
      text-transform: uppercase;
      word-spacing: 10px;
    }
    
    .txt-brilho {
      letter-spacing: 2px;
      animation: brilho 2.5s ease-in-out infinite;
      font-size: 1em;
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
    
    .container-card-gradiente span:nth-of-type(5) {
      animation-delay: 1.25s;
    }
    
    .container-card-gradiente span:nth-of-type(6) {
      animation-delay: 1.55s;
    }
    
    
    @keyframes brilho {
      0% {
        color: #fff;
        text-shadow: 0 0 12px var(--colorPurple), 0 0 50px var(--colorPurple), 0 0 100px var(--colorPurple);
      }
    
      10%,
      90% {
        color: var(--colorGray);
        text-shadow: none;
      }
    }
    
    @keyframes degrade-animado {
      0% {
        background-position: 0% 0%;
      }
    
      100% {
        background-position: 100% 100%;
      }
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
    
    /* BOTÕES */
    .itens-links a {
      margin-left: 20px;
      font-size: 1.1rem;
      background-color: #111;
    }
    
    /* Botão animado */
    .animated-button {
      position: relative;
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 16px 36px;
      border: 4px solid transparent;
      font-size: 16px;
      background-color: inherit;
      border-radius: 100px;
      font-weight: 600;
      color: #8d0bc0;
      box-shadow: 0 0 0 2px #ae00ff;
      cursor: pointer;
      overflow: hidden;
      transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .animated-button svg {
      position: absolute;
      width: 24px;
      fill: #8d0bc0;
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
      background-color: #a12fff;
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
    
    .animated-button:hover .circle {
      width: 220px;
      height: 220px;
      opacity: 1;
    }
    
    .animated-button:active {
      scale: 0.95;
      box-shadow: 0 0 0 4px #a12fff;
    }
    
    /* MAIN */
    main {
      background-image: url('imagens/fundo_dragao_masmorra.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      position: relative;
      z-index: 0;
      padding: 40px 0;
    }
    
    main::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #121212cc;
      z-index: -1;
    }
    
    .contato-section {
      padding: 40px 5vw;
    }
    
    .contato-titulo {
      text-align: center;
      font-size: 38px;
      margin-bottom: 20px;
    }
    
    .titulo-card {
      background: linear-gradient(to right, #7700ff, #41008b, #a700b6, #7700ff, #41008b, #a700b6);
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
    
    .contato-suporte {
      text-align: center;
      box-shadow: 0 0 25px 5px #7700ff;
      border: 2px solid #ae00ff;
      border-radius: 10px;
      padding: 20px;
      margin: 0 auto 30px auto;
      max-width: 340px;
      background-color: #191919;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    
    .suporte-info a {
      color: #ae00ff;
    }
    
    .suporte-info a:hover {
      text-decoration: underline;
    }
    
    .equipe {
      margin: auto 400px;
      padding: 0 5vw;
    }
    
    .patroes-titulo {
      font-size: 24px;
      margin-bottom: 15px;
    }
    
    .cards-contato {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    
    .card-contato {
      box-shadow: 0 0 10px 5px #7700ff;
      border: 2px solid #ae00ff;
      background-color: #191919;
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
      font-family: 'Anton', sans-serif;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }
    
    .card-contato>div {
      flex: 1;
      min-width: 250px;
    }
    
    .card-contato u,
    .card-contato span:not(.descricao-card) {
      display: block;
      color: white;
      margin-bottom: 5px;
    }
    
    .descricao-card {
      text-align: left;
      font-size: 18px;
      color: white;
      flex: 1;
      max-width: 45%;
      margin-top: 10px;
    }
    
    /* FOOTER */
    .footer {
      color: white;
      padding: 30px 20px 15px;
      font-family: "Anton", sans-serif;
      font-size: 15px;
      border-top: 2px solid #7700ff;
      background-color: #111;
    }
    
    .footer-container {
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 25px;
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
      font-family: 'Special Gothic Expanded One', sans-serif;
      font-weight: bold;
      color: #ae00ff;
      margin-bottom: 5px;
      display: block;
    }
    
    .footer-info,
    .footer-bottom {
      color: #777;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    /* RESPONSIVO */
    @media (max-width: 768px) {
      .card-titulo-gradiente {
        width: 90%;
        font-size: 40px;
      }
    
      .contato-section {
        padding: 30px 20px;
      }
    
      .equipe {
        margin: 0;
        padding: 0 20px;
      }
    
      .contato-suporte {
        padding: 15px;
        margin: 0 20px 30px 20px;
      }
    }
    
    @media (max-width: 480px) {
      .card-titulo-gradiente {
        font-size: 30px;
        padding: 15px;
      }
    
      .contato-titulo {
        font-size: 26px;
      }
    
      .footer-container {
        padding: 10px;
      }
    
      .footer-logo span {
        font-size: 16px;
      }
    }</style>
<body>
  <!-- Header -->
  <header class="section-gradiente">
    <div class="box-gradiente">
      <div class="card-titulo-gradiente">
        <div class="container-card-gradiente">
          <h1 class="titulo-mundo">
            <span class="txt-brilho">E</span>
            <span class="txt-brilho">Q</span>
            <span class="txt-brilho">U</span>
            <span class="txt-brilho">I</span>
            <span class="txt-brilho">P</span>
            <span class="txt-brilho">E</span>
          </h1>
        </div>
      </div>

      <!-- Botões animados -->
      <div class="itens-links">
        <a href="frontpage.php">
          <button class="animated-button">
            <svg viewBox="0 0 24 24" class="arr-2">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" />
            </svg>
             <span class="text">New World</span> 
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" />
            </svg>
          </button>
        </a>

        <a href="fichas.php">
          <button class="animated-button">
            <svg viewBox="0 0 24 24" class="arr-2">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" />
            </svg>
            <span class="text">Fichas</span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" />
            </svg>
          </button>
        </a>
      </div>
    </div>
  </header>
  <!-- Fim Header -->

  <!-- Main -->
  <section class="fundo-dragon">
    <div class="conteudo">
      <main class="contato-section">
        <h2 class="contato-titulo">
          CONTATO <span class="titulo-card">NEW WORLD</span>
        </h2>

        <!-- Bloco de Suporte -->
        <div class="contato-suporte">
          PRECISA DE AJUDA?
          <div class="suporte-info">
            <br />Discord: LeviathanGames#1234<br />
            E-MAIL:
            <a href="mailto:leviathanrpg@lev.com.br">leviathangameswork@gmail.com</a>
          </div>
        </div>

        <!-- Bloco de Equipe -->
        <div class="equipe">
          <h3 class="patroes-titulo">
            <span class="titulo-card">PATRÕES</span>
          </h3>
          <div class="cards-contato">
            <div class="card-contato">
              <div>
                <u>RICARDO DANTAS</u>
                <span>WEB DESIGNER</span>
                <span>PROGRAMADOR</span>
                <span>LÍDER DO PROJETO</span>
              </div>
              <span class="descricao-card">
                O MAGO DO DESIGN, E LEITOR DE E-MAILS
                <small>(PODE DEMORAR)</small>
              </span>
            </div>

            <div class="card-contato">
              <div>
                <u>MATEUS SILVA</u>
                <span>PROGRAMADOR</span>
              </div>
              <span class="descricao-card">
                O FEITIÇEIRO DA PROGRAMAÇÃO
              </span>
            </div>

            <div class="card-contato">
              <div>
                <u>MATHEUS FREITAS</u>
                <span>IDEALIZADOR</span>
                <span>DESIGNER</span>
              </div>
              <span class="descricao-card">
                O DRUIDA DA ÁREA CRIATIVA RESPONSÁVEL PELAS LOGOS E IDEIAS
              </span>
            </div>

            <div class="card-contato">
              <div>
                <u>MATEUS RIBEIRO</u>
                <span>APRESENTADOR</span>
              </div>
              <span class="descricao-card">
                O CLÉRIGO DOCUMENTADOR OFICIAL DO PROJETO
              </span>
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <!-- Fim Main -->

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-status">
        <span class="footer-tag">Amphiter - V1.0 (LANÇAMENTO)</span>
        <p>
          Em sua versão de lançamento, estamos desenvolvendo mais atualizações
          para o site.
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
  <!-- Fim Footer -->
</body>

</html>
