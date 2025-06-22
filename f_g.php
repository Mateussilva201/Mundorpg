<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha Genérica</title>
  <link rel="stylesheet" href="f_g.css">
  <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
  
</head>
<style> /* Fonte medieval opcional (Google Fonts) */
@import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');

:root {
  --bg-dark: #1a0d2e;
  --bg-panel: #27153d;
  --accent-purple: #8e44ad;
  --text-light: #f2e9ff;
  --border-highlight: #b084eb;
  --shadow: 0 0 10px rgba(142, 68, 173, 0.5);
}

* {
  max-width: 100%;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  text-decoration: none;
  /* outline: 2px solid red; */
}

body {
  background-color: var(--bg-dark);
  color: var(--text-light);
  font-family: 'MedievalSharp', cursive;
  padding: 1rem;
}

header.cabecalho {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
  border-bottom: 2px solid var(--accent-purple);
  padding-bottom: 1rem;
}

header .logo {
  width: 80px;
  height: auto;
}

.titulo h1 {
  font-size: 2rem;
  color: var(--accent-purple);
}

.info-principal {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-top: 0.5rem;
}

.info-principal input {
  background-color: var(--bg-panel);
  border: 1px solid var(--border-highlight);
  color: var(--text-light);
  padding: 0.4rem;
  flex: 1 1 200px;
  box-shadow: var(--shadow);
  border-radius: 5px;
}

main.ficha {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  outline: 2px solid red;
}

.atributos,
.status,
.pericias,
.ataques,
.equipamentos,
.caracteristicas {
  background-color: var(--bg-panel);
  padding: 1rem;
  border: 1px solid var(--border-highlight);
  border-radius: 10px;
  box-shadow: var(--shadow);
}

.atributos,
.salvaguardas {
  height: 470px;
}

.combate {
  max-height: 470px;
}

.atributo {
  margin-bottom: 0.5rem;
}

.atributo label {
  display: block;
  margin-bottom: 0.2rem;
  color: var(--accent-purple);
}

.atributo input {
  width: 100%;
  padding: 0.3rem;
  background-color: #1a0d2e;
  border: 1px solid var(--border-highlight);
  color: var(--text-light);
  border-radius: 4px;
}

section label {
  color: white;
  display: block;
  margin-top: 0.5rem;
}

section input {
  width: 100%;
  padding: 0.4rem;
  background-color: #1a0d2e;
  border: 1px solid var(--border-highlight);
  color: var(--text-light);
  border-radius: 4px;
}

textarea {
  width: 100%;
  height: 300px;
  background-color: #1a0d2e;
  border: 1px solid var(--border-highlight);
  color: var(--text-light);
  padding: 0.5rem;
  resize: vertical;
  border-radius: 5px;
  box-shadow: var(--shadow);
  font-family: 'MedievalSharp', cursive;
}

h2 {
  color: var(--accent-purple);
  margin-bottom: 0.5rem;
  font-size: 1.3rem;
  border-bottom: 1px solid var(--border-highlight);
  padding-bottom: 0.3rem;
}


.ficha-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.linha {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.card {
  background-color: #1a001f;
  border: 1px solid #a64ac9;
  padding: 15px;
  border-radius: 10px;
  flex: 1;
  min-width: 220px;
  box-shadow: 0 0 10px rgba(166, 74, 201, 0.3);
}

.card h2 {
  margin-bottom: 10px;
  color: #d9aaff;
  border-bottom: 1px solid #a64ac9;
  padding-bottom: 4px;
}

.card input,
.card textarea {
  width: 100%;
  height: 90%;
  margin-bottom: 10px;
  padding: 8px;
  background-color: #2a003f;
  color: white;
  border: 1px solid #b27be5;
  border-radius: 6px;
}

.notas {
  padding-bottom: 40px;
}

/* Button */
.cta {
  display: flex;
  padding: 11px 33px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  background: #6225e6;
  transition: 1s;
  box-shadow: 6px 6px 0 black;
  transform: skewX(-15deg);
  border: none;
  cursor: pointer;
}

.cta:focus {
  outline: none;
}

.cta:hover {
  transition: 0.5s;
  box-shadow: 10px 10px 0 black;
}

.cta .second {
  transition: 0.5s;
  margin-right: 0px;
}

.cta:hover .second {
  transition: 0.5s;
  margin-right: 45px;
}

.span {
  transform: skewX(15deg);
}

.second {
  width: 20px;
  margin-left: 30px;
  position: relative;
  top: 12%;
}

.one {
  transition: 0.4s;
  transform: translateX(-60%);
}

.two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.cta:hover .three {
  animation: color_anim 1s infinite 0.2s;
}

.cta:hover .one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.cta:hover .two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: #9500f8;
  }

  100% {
    fill: white;
  }
}

/* Fim Button */

.btn-voltar {
  margin: 0 1% 0 auto;
}

header.cabecalho h1 {
  white-space: normal;
  word-break: break-word;
  overflow-wrap: break-word;
}

header.cabecalho h1 {
  max-width: 100%;
  display: inline-block;
}

main {
  display: flex;
  flex-wrap: wrap;
  /* Permite que os cards pulem linha se necessário */
  gap: 16px;
  /* Espaço entre os cards */
  justify-content: space-evenly;
  /* Distribui os cards */
  align-items: stretch;
  /* Faz os cards se esticarem igualmente em altura */
}

.linha {
  flex: 1 1 300px;
  /* Cresce, encolhe e começa com 300px */
  min-width: 250px;
  max-width: 100%;
  background-color: #1a082f;
  border: 2px solid #800080;
  border-radius: 12px;
  padding: 12px;
}


.ficha-container {
  position: relative;
  width: 100%;
  height: 100vh;
}

.ataques,
.equipamentos,
.habilidades,
.notas {
  position: absolute;
  width: 200px;
  height: 120px;
  padding: 10px;
  box-shadow: 0 0 10px rgba(166, 74, 201, 0.3);
  border-radius: 8px;
}

textarea {
  resize: none;

}

.ataques {
  position: absolute;
  top: 75%;
  left: 25.75%;
  width: 23.65%;
  height: 50.1%;
  padding-bottom: 2%;
}

.equipamentos {
  position: absolute;
  top: 75%;
  right: 25.75%;
  width: 23.60%;
  height: 50.1%;
  padding-bottom: 2%;
}

.habilidades {
  position: absolute;
  top: 75%;
  left: 75.5%;
  width: 23.6%;
  height: 50.1%;
  padding-bottom: 2%;
}

.notas {
  position: absolute;
  top: 130%;
  right: 0.9%;
  width: 73.25%;
  height: 40.2%;
  padding-bottom: 2%;
}


input,
textarea,
select {
  outline: none;
  border: none;
  background: #2c003e;
  /* substitua pela cor que você quiser */
  color: white;
  padding: 5px;
  border-radius: 10px;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type="number"] {
  -moz-appearance: textfield;
  /* Firefox */
}</style>

<body>
  <header class="cabecalho">
    <img src="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" alt="Logo Dragão" class="logo">
    <h1>Ficha de Personagem</h1>
    <div class="btn-voltar">
      <a href="Hub_fichas.php">
        <button class="cta">
          <span class="span">Voltar</span>
          <span class="second">
            <svg width="50px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path class="one"
                  d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                  fill="#FFFFFF"></path>
                <path class="two"
                  d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                  fill="#FFFFFF"></path>
                <path class="three"
                  d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                  fill="#FFFFFF"></path>
              </g>
            </svg>
          </span>
        </button>
      </a>
    </div>
  </header>

  <main class="ficha-container">
    <div class="linha">
      <section class="pericias card">
        <h2>Perícias</h2>
        <label>Acrobacia (Des):<input type="number" name="pericia_acrobacia"></label>
        <label>Arcanismo (Int):<input type="number" name="pericia_arcanismo"></label>
        <label>Atuação (Car):<input type="number" name="pericia_atuacao"></label>
        <label>Enganação (Car):<input type="number" name="pericia_enganacao"></label>
        <label>Furtividade (Des):<input type="number" name="pericia_furtividade"></label>
        <label>História (Int):<input type="number" name="pericia_historia"></label>
        <label>Intimidação (Car):<input type="number" name="pericia_intimidacao"></label>
        <label>Intuição (Sab):<input type="number" name="pericia_intuicao"></label>
        <label>Investigação (Int):<input type="number" name="pericia_investigacao"></label>
        <label>Lidar com Animais (Sab):<input type="number" name="pericia_animais"></label>
        <label>Medicina (Sab):<input type="number" name="pericia_medicina"></label>
        <label>Natureza (Int):<input type="number" name="pericia_natureza"></label>
        <label>Percepção (Sab):<input type="number" name="pericia_percepcao"></label>
        <label>Persuasão (Car):<input type="number" name="pericia_persuasao"></label>
        <label>Prestidigitação (Des):<input type="number" name="pericia_prestidigitacao"></label>
        <label>Religião (Int):<input type="number" name="pericia_religiao"></label>
        <label>Sobrevivência (Sab):<input type="number" name="pericia_sobrevivencia"></label>
      </section>

      <section class="atributos card">
        <h2>Atributos</h2>
        <label>Força: <input type="number" name="forca"></label>
        <label>Destreza: <input type="number" name="destreza"></label>
        <label>Constituição: <input type="number" name="constituicao"></label>
        <label>Inteligência: <input type="number" name="inteligencia"></label>
        <label>Sabedoria: <input type="number" name="sabedoria"></label>
        <label>Carisma: <input type="number" name="carisma"></label>
      </section>

      <section class="salvaguardas card">
        <h2>Salvaguardas</h2>
        <label>Força:<input type="number" name="salva_forca"></label>
        <label>Destreza:<input type="number" name="salva_destreza"></label>
        <label>Constituição:<input type="number" name="salva_constituicao"></label>
        <label>Inteligência:<input type="number" name="salva_inteligencia"></label>
        <label>Sabedoria:<input type="number" name="salva_sabedoria"></label>
        <label>Carisma:<input type="number" name="salva_carisma"></label>
      </section>

      <section class="combate card">
        <h2>Combate</h2>
        <label>Classe de Armadura: <input type="number" name="ca"></label>
        <label>Iniciativa: <input type="number" name="iniciativa"></label>
        <label>Deslocamento: <input type="number" name="deslocamento"></label>
        <label>PV Máximos: <input type="number" name="pv_max"></label>
        <label>PV Atuais: <input type="number" name="pv"></label>
        <label>PV Temporários: <input type="number" name="pv_temp"></label>
      </section>

      <section class="ataques card">
        <h2>Ataques & Conjuração</h2>
        <textarea name="ataques" placeholder="Ataques, magias..."></textarea>
      </section>

      <section class="equipamentos card">
        <h2>Equipamentos</h2>
        <textarea name="equipamentos" placeholder="Itens do personagem..."></textarea>
      </section>

      <section class="habilidades card">
        <h2>Características & Talentos</h2>
        <textarea name="habilidades" placeholder="Habilidades, talentos..."></textarea>
      </section>
      <section class="notas card">
        <h2>Anotações</h2>
        <textarea name="notas" placeholder="Notas adicionais..."></textarea>
      </section>

    </div>


  </main>
  <script> // ID da ficha atual selecionada
const fichaId = localStorage.getItem("fichaSelecionadaId");
const STORAGE_KEY = "ficha_" + fichaId;

// Recupera os dados salvos para essa ficha
const dadosSalvos = JSON.parse(localStorage.getItem(STORAGE_KEY) || "{}");

// Ao carregar, preenche os campos
window.addEventListener("DOMContentLoaded", () => {
  const campos = document.querySelectorAll("input[name], textarea[name]");

  campos.forEach((input) => {
    const nome = input.name;
    if (dadosSalvos[nome]) {
      input.value = dadosSalvos[nome];
    }

    input.addEventListener("input", salvarFicha);
  });

  // Exibe o nome da ficha no título ou header
  const fichas = JSON.parse(localStorage.getItem("fichas") || "[]");
  const ficha = fichas.find((f) => f.id === fichaId);
  if (ficha) {
    document.title = ficha.nome;
    const titulo = document.querySelector(".cabecalho h1");
    if (titulo) titulo.textContent = ficha.nome;
  }
});

// Salvar dados
function salvarFicha() {
  const campos = document.querySelectorAll("input[name], textarea[name]");
  const dados = {};

  campos.forEach((input) => {
    dados[input.name] = input.value;
  });

  localStorage.setItem(STORAGE_KEY, JSON.stringify(dados));
}

// Limpar todos os dados da ficha
const limparBtn = document.getElementById("limpar-ficha");
if (limparBtn) {
  limparBtn.addEventListener("click", () => {
    if (confirm("Tem certeza que deseja limpar esta ficha?")) {
      const campos = document.querySelectorAll("input[name], textarea[name]");
      campos.forEach((input) => (input.value = ""));
      localStorage.removeItem(STORAGE_KEY);
    }
  });
}</script>
</body>

</html>