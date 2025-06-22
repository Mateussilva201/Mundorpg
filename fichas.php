<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fichas de Personagem</title>
  <link rel="stylesheet" href="/css/fichas.css" />
  <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Anton&family=Special+Gothic+Expanded+One&display=swap");

:root {
  --colorBack: #040305;
  --colorPurple: #9800ce;
}

*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #222;
  font-size: 16px;
  font-style: normal;
  font-optical-sizing: auto;
}

/* Título com degradê animado */
.itens-links {
  display: flex;
  justify-content: flex-end;
  gap: 25px;
  flex-wrap: wrap;
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
  padding: 20px 20px;
  text-align: center;
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

a {
  color: inherit;
  text-decoration: none;
}

main {
  background-image: url("imagem_ficha/2150461591.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-color: #121212;  color: white;
}

.container-principal {
  
  padding-top: 130px;
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;

  font-family: "Anton", sans-serif;


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
  font-size: 21px;
  gap: 40px;
  text-align: center;
  margin: 0 0 42px;
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
  text-transform: uppercase;
  word-spacing: 10px;
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

.footer {
  color: white;
  padding: 20px 20px 15px;
  font-family: "Anton", sans-serif;
  font-size: 15px;
  border-top: 2px solid #7700ff;
}

.footer-container {
  max-width: 1000px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 20px;    
  align-items: center;
  text-align: center;
}

.footer-status {
  background-color: #222;
  border-left: 4px solid #7700ff;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 0 10px #7700ff33;
  margin: 20px 0 4px;
}

.footer-tag {
  font-family: "Special Gothic Expanded One", sans-serif;
  font-weight: bold;
  color: #ae00ff;
  display: block;
  margin-bottom: 5px;
}

.footer-info,
.footer-bottom {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #666666;
}

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
}
</style>
<body>
  <!-- Gradiente fixo no topo -->
  <section class="section-gradiente">
    <div class="box-gradiente">
      <div class="card-titulo-gradiente">
        <h1>FICHAS DE<span class="titulo-card"> <br>PERSONAGEM</span></h1>

      </div>
      <div class="itens-links">
        <a href="frontpage.php">
          <button class="animated-button">
            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
              </path>
            </svg>
            <span class="text">New World</span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
              </path>
            </svg>
          </button>
        </a>

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
      </div>

    </div>

  </section>

  <!-- Conteúdo Principal -->
  <main class="container-principal">
    <div class="card-principal">
      <div class="hexagono">
        <img src="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" alt="Ícone de Dado">
      </div>
      <p>Bem-vindo à seção de fichas de personagem! Aqui você pode criar, visualizar e gerenciar suas fichas de RPG com
        facilidade.</p>

      <ul>
        <li><img src="imagens/ul sf.png" width="15" height="15" alt="check" /> Crie personagens únicos com atributos personalizados</li>
        <li><img src="imagens/ul sf.png" width="15" height="15" alt="check" /> Salve e edite fichas diretamente no site</li>
        <li><img src="imagens/ul sf.png" width="15" height="15" alt="check" /> Acesse suas fichas de qualquer dispositivo</li>
      </ul>

      <a href="Hub_fichas.php">
        <button class="animated-button">
          <span class="circle"></span>
          <span class="text">Criar Nova Ficha</span>
          <svg class="arr-1" viewBox="0 0 46 16">
            <path d="M0 8h44M36 1l8 7-8 7" />
          </svg>
          <svg class="arr-2" viewBox="0 0 46 16">
            <path d="M0 8h44M36 1l8 7-8 7" />
          </svg>
        </button>
      </a>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-status">
        <span class="footer-tag">Amphiter - V1.0 (LANÇAMENTO)</span>
        <p>Em sua versão de lançamento, estamos desenvolvendo mais atualizações para o site.</p>
      </div>
      <div class="footer-info">
        &copy; 2025 - Amphiter.  Todos os direitos reservados.
      </div>
    </div>
  </footer>
</body>

</html>