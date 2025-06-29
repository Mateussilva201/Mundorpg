<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hub das Fichas</title>
  <link rel="stylesheet" href="/pasta.ficha/hub_fichas.css" />
  <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />


</head>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
* {
  margin: 0;
  padding: 0;
  text-decoration: none;
}

body {
  background-color: #111;
  color: white;
  font-family: sans-serif;
  padding: 20px;
}

/* Container para alinhar logo e título lado a lado */
.header-content {
  display: flex;
  align-items: center;
  gap: 20px;
  /* Espaçamento entre logo e h1 */
  padding: 10px 0;
}

/* Estilo da logo */
.logo {
  height: 60px;
  display: block;
}

/* Estilo do título */
h1 {
  font-family: "Josefin Sans", sans-serif;  
  font-style: normal;
  font-weight: 650;
  color: #ae00ff;
  font-size: 50px;
  margin: 0;
  /* Remove margem padrão */
}

/* Botão */

button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ae00ff;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 20px;
  margin-right: 10px;
}

button:hover {
  background-color: #9000d3;
}

.lista-fichas {
  min-height: 585px;
  border-radius: 25px;
  margin-top: 50px;
  box-shadow: 0 0 25px 5px #7700ff;
}

ul {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  padding: 20px;
  justify-content: center;
}

ul li {
  background-color: #313131;
  padding: 15px 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px #ae00ff4d;
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: 200px;
  transition: transform 0.3s ease, opacity 0.3s ease;
  opacity: 0;
  transform: scale(0.9);
  animation: aparecer 0.3s forwards;
}

ul li:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px #6200ff80;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

@keyframes aparecer {
  to {
    opacity: 1;
    transform: scale(1);
  }
}

li.fadeout {
  opacity: 0 !important;
  transform: scale(0.8) !important;
  transition: all 0.3s ease;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ae00ff;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 20px;
  margin-right: 10px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
  background-color: #9000d3;
  transform: scale(1.05);
}

.nome-ficha {
  cursor: text;
  flex: 1;
  font-size: 18px;
}

.input-edit {
  font-size: 16px;
  padding: 5px;
  border-radius: 4px;
  border: 1px solid #888;
  background-color: #333;
  color: white;
}

.ficha-generica {
  background-color: #e6e6fa;
  border-left: 4px solid #9370db;
}

/* Personalização da checkbox */
.container {
  display: inline-block;
  position: relative;
  cursor: pointer;
  user-select: none;
  margin-right: 18px;
  vertical-align: middle;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: relative;
  display: inline-block;
  height: 1.3em;
  width: 1.3em;
  background-color: #ccc;
  border-radius: 5px;
  box-shadow: 1px 1px 0px rgb(183, 183, 183);
  transition: all 0.2s ease;
}

/* Quando marcado */
.container input:checked + .checkmark {
  background-image: linear-gradient(45deg, rgb(100, 61, 219), rgb(217, 21, 239));
  box-shadow: 3px 3px 0px rgb(183, 183, 183);
}

/* Checkmark: visual do traço */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
  left: 0.45em;
  top: 0.25em;
  width: 0.25em;
  height: 0.5em;
  border: solid white;
  border-width: 0 0.15em 0.15em 0;
  transform: rotate(45deg);
}

/* Exibe o traço ao marcar */
.container input:checked + .checkmark:after {
  display: block;
}

/* From Uiverse.io by cssbuttons-io */ 
button {
  align-items: center;
  background-image: linear-gradient(144deg, #af40ff, #5b42f3 50%, #8a028a);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #ffffff;
  display: flex;
  font-size: 18px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 3px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
  transition: all 0.3s;
}

button:active,
button:hover {
  outline: 0;
}

button span {
  background-color: rgb(5, 6, 45);
  padding: 20px 25px;
  border-radius: 6px;
  transition: 300ms;
}

button:hover span {
  background: none;
}

button:active {
  transform: scale(0.9);
}

.btns {
  display: flex;
}

span.text {
  display: inline-block;
  text-align: center;
  white-space: nowrap;
  padding: 10px 20px;
  width: auto;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  
}

button.voltar {

  font-size: 16px;
  padding: 2px;
  min-width: 88px;
  border-radius: 8px;
  background-image: linear-gradient(144deg, #af40ff, #5b42f3 50%, #00ddeb);
  box-shadow: rgba(151, 65, 252, 0.2) 0 10px 20px -5px;
  border: 0;
  cursor: pointer;
  transition: all 0.3s;
}

button.voltar span {
  display: block;
  background-color: rgb(5, 6, 45);
  padding: 12px 20px;
  border-radius: 6px;
  transition: 300ms;
}

button.voltar:hover span {
  background: none;
}

button.voltar:active {
  transform: scale(0.95);
}
</style>
<body>
  <header>
    <div class="header-content">
      <h1>Menu de Fichas</h1>
    </div>
  </header>

  <main>
    <div class="btns">
      <a class="link" href="fichas.php"><button class="voltar"><span class="text">Voltar</span></button></a>   

      <button id="addFichaGenerica"><span class="text">Criar Ficha Generica</span></button>
      <button id="addFichaBtn"><span class="text">Criar Ficha Nova</span></button>
      <button id="removerFichasBtn"><span class="text">Remover Fichas Selecionadas</span></button>
      <button id="selecionarTodasBtn"><span class="text">Selecionar Todas</span></button>
    </div>
    <div class="lista-fichas">
    <ul id="listaFichas"></ul>
    </div>
  </main>

  <script>let contadorFichas = 1;
    const btnAdicionar = document.getElementById("addFichaBtn");
    const btnRemover = document.getElementById("removerFichasBtn");
    const lista = document.getElementById("listaFichas");
    const btnSelecionarTodas = document.getElementById("selecionarTodasBtn");
    const btnAdicionarGenerica = document.getElementById("addFichaGenerica");
    
    let isMouseDown = false;
    let tudoSelecionado = false;
    
    // Função principal que adiciona a ficha
    function adicionarFicha(nome = "Ficha Nova", marcada = true, id = Date.now(), destino = "f_g.php") {
      const novaFicha = document.createElement("li");
      novaFicha.dataset.id = id;
      novaFicha.dataset.destino = destino;
    
      // Checkbox estilizada com label
      const labelContainer = document.createElement("label");
      labelContainer.classList.add("container");
    
      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.checked = marcada;
    
      // Evita que o clique na checkbox acione o redirecionamento
      checkbox.addEventListener("click", function (e) {
        e.stopPropagation();
      });
    
      checkbox.addEventListener("change", salvarFichas);
    
      const checkmarkDiv = document.createElement("div");
      checkmarkDiv.classList.add("checkmark");
    
      labelContainer.appendChild(checkbox);
      labelContainer.appendChild(checkmarkDiv);
    
      // Nome da ficha
      const textoFicha = document.createElement("span");
      textoFicha.textContent = nome;
      textoFicha.classList.add("nome-ficha");
    
      // Editar nome ao clicar
      textoFicha.addEventListener("click", function (e) {
        e.stopPropagation();
        const input = document.createElement("input");
        input.type = "text";
        input.value = textoFicha.textContent;
        input.classList.add("input-edit");
    
        textoFicha.replaceWith(input);
        input.focus();
    
        function salvar() {
          textoFicha.textContent = input.value || nome;
          input.replaceWith(textoFicha);
          salvarFichas();
        }
    
        input.addEventListener("blur", salvar);
        input.addEventListener("keydown", function (e) {
          if (e.key === "Enter") salvar();
        });
      });
    
      // Montagem do card
      novaFicha.appendChild(labelContainer);
      novaFicha.appendChild(textoFicha);
      lista.appendChild(novaFicha);
    
      // Redireciona ao clicar no <li> fora da checkbox ou nome
      novaFicha.addEventListener("click", (e) => {
        // Ignora cliques em elementos interativos
        if (
          e.target.closest(".container") || // checkbox customizada
          e.target.tagName === "INPUT" ||
          e.target.classList.contains("input-edit") ||
          e.target.classList.contains("nome-ficha")
        ) return;
      
        localStorage.setItem("fichaSelecionadaId", id);
        window.location.href = destino;
      });
      
      salvarFichas();
    }
    
    // Botão para adicionar Ficha Nova (vai para f_n.html)
    btnAdicionar.addEventListener("click", function () {
      adicionarFicha("Ficha Nova", false, Date.now(), "f_n.php");
    });
    
    // Botão para adicionar Ficha Genérica (vai para f_g.html)
    btnAdicionarGenerica.addEventListener("click", function () {
      adicionarFicha("Ficha Genérica", false, Date.now(), "f_g.php");
    });
    
    // Botão para remover fichas selecionadas
    btnRemover.addEventListener("click", function () {
      const fichas = document.querySelectorAll("#listaFichas li");
      fichas.forEach(ficha => {
        const checkbox = ficha.querySelector("input[type='checkbox']");
        if (checkbox.checked) {
          ficha.classList.add("fadeout");
          setTimeout(() => {
            ficha.remove();
            salvarFichas();
          }, 300);
        }
      });
      salvarFichas();
    });
    
    // Botão selecionar todas
    btnSelecionarTodas.addEventListener("click", () => {
      const fichas = document.querySelectorAll("#listaFichas li input[type='checkbox']");
      fichas.forEach(checkbox => {
        checkbox.checked = !tudoSelecionado;
      });
    
      tudoSelecionado = !tudoSelecionado;
      btnSelecionarTodas.textContent = tudoSelecionado ? "Desmarcar Todas" : "Selecionar Todas";
    
      // 🔁 Aplica ou remove a classe visual ativa
      btnSelecionarTodas.classList.toggle("ativo", tudoSelecionado);
    
      salvarFichas();
    });
    
    
    // Seleção múltipla com arrasto
    lista.addEventListener("mousedown", function (e) {
      if (e.target.closest(".nome-ficha")) return;
      if (e.target.closest("li")) {
        e.preventDefault();
        isMouseDown = true;
        toggleCheckbox(e.target.closest("li"));
      }
    });
    
    lista.addEventListener("mouseover", function (e) {
      if (isMouseDown && !e.target.closest(".nome-ficha") && e.target.closest("li")) {
        toggleCheckbox(e.target.closest("li"));
      }
    });
    
    document.addEventListener("mouseup", function () {
      isMouseDown = false;
    });
    
    function toggleCheckbox(li) {
      const checkbox = li.querySelector("input[type='checkbox']");
      if (checkbox) checkbox.checked = !checkbox.checked;
    }
    
    // Salva todas as fichas no localStorage
    function salvarFichas() {
      const fichas = [];
      document.querySelectorAll("#listaFichas li").forEach(li => {
        const nome = li.querySelector("span").textContent;
        const marcada = li.querySelector("input[type='checkbox']").checked;
        const id = li.dataset.id;
        const destino = li.dataset.destino || "f_g.php"; // <- novo
        fichas.push({ id, nome, marcada, destino });
      });
      localStorage.setItem("fichas", JSON.stringify(fichas));
    }
    
    // Carrega fichas ao iniciar
    function carregarFichas() {
      const fichasSalvas = JSON.parse(localStorage.getItem("fichas") || "[]");
      fichasSalvas.forEach(ficha => {
        adicionarFicha(ficha.nome, ficha.marcada, ficha.id, ficha.destino);
      });
    }
    
    window.addEventListener("DOMContentLoaded", carregarFichas);
    
    //o negocio da checkbox ta assim: quando eu clico ele fica selecionando e desselecionando, mas quando clico e arrasto para fora ele fica selecionado</script>
</body>

</html>
