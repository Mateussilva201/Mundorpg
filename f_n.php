<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Nova</title>
<script src="gen.js"></script>
</head>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const quadro = document.querySelector("#quadro");
  const select = document.querySelector("select.cards");
  const btnVoltar = document.getElementById("btnVoltar");

  const tipos = {
    cardmini: 8,
    cardmedio: 12,
    cardgrande: 16,
    cardsection: 1
  };

  // Botão "Adicionar"
  const btnAdicionar = document.createElement("button");
  btnAdicionar.textContent = "Adicionar";
  btnAdicionar.className = "anxiety";
  select.parentElement.appendChild(btnAdicionar);

  btnAdicionar.addEventListener("click", () => {
    const tipo = select.value;
    const novo = criarCard(tipo, tipos[tipo]);
    quadro.appendChild(novo);
    ativarDragSuave(novo);
  });

  function criarCard(tipo, qtd) {
    const div = document.createElement("div");
    div.classList.add("estilo-card", `${tipo}-custom`);
    div.style.position = "absolute";
    div.style.left = "100px";
    div.style.top = "100px";
    div.dataset.bloqueado = "false";

    // Botão excluir (direita)
    const btnExcluir = document.createElement("button");
    btnExcluir.textContent = "✖";
    btnExcluir.title = "Excluir card";
    btnExcluir.className = "btn-fechar";
    btnExcluir.addEventListener("click", (e) => {
      e.stopPropagation();
      div.remove();
    });
    div.appendChild(btnExcluir);

    // Botão bloqueio (esquerda)
    const btnLock = document.createElement("button");
    btnLock.textContent = "🔓";
    btnLock.title = "Bloquear/Desbloquear card";
    btnLock.className = "btn-lock";
    btnLock.addEventListener("click", (e) => {
      e.stopPropagation();
      const bloqueado = div.dataset.bloqueado === "true";
      div.dataset.bloqueado = bloqueado ? "false" : "true";
      btnLock.textContent = bloqueado ? "🔓" : "🔒";
      div.style.opacity = bloqueado ? "1" : "0.85";
    });
    div.appendChild(btnLock);

    // Campos
    if (tipo === "cardsection") {
      const input = document.createElement("input");
      input.className = "texto1";
      input.placeholder = "Nome da Seção";
      input.style.width = "100%";
      input.style.fontSize = "20px";
      input.style.fontWeight = "bold";
      input.style.textAlign = "center";
      input.style.color = "orchid";
      input.style.background = "transparent";
      input.style.border = "none";
      div.appendChild(input);
    } else {
      for (let i = 0; i < qtd; i++) {
        const input = document.createElement("input");
        input.type = "text";
        input.className = "texto1";
        input.placeholder = `Campo ${i + 1}`;
        input.style.marginBottom = "8px";
        div.appendChild(input);
      }
    }

    return div;
  }

  function ativarDragSuave(el) {
    let isDragging = false, offsetX = 0, offsetY = 0;

    el.addEventListener("mousedown", e => {
      if (el.dataset.bloqueado === "true") return;
      isDragging = true;
      offsetX = e.offsetX;
      offsetY = e.offsetY;
      el.style.cursor = "grabbing";
      el.style.zIndex = 1000;
    });

    document.addEventListener("mousemove", e => {
      if (!isDragging) return;
      const rect = quadro.getBoundingClientRect();
      el.style.left = `${Math.max(0, Math.min(e.clientX - rect.left - offsetX, quadro.offsetWidth - el.offsetWidth))}px`;
      el.style.top = `${Math.max(0, Math.min(e.clientY - rect.top - offsetY, quadro.offsetHeight - el.offsetHeight))}px`;
    });

    document.addEventListener("mouseup", () => {
      isDragging = false;
      el.style.cursor = "grab";
      el.style.zIndex = "";
    });
  }

  // Botão Voltar salva no localStorage
  if (btnVoltar) {
    btnVoltar.addEventListener("click", () => {
      const dados = [];
      document.querySelectorAll(".estilo-card").forEach(card => {
        const tipo = [...card.classList].find(cl => cl.endsWith("-custom"))?.replace("-custom", "");
        const campos = [...card.querySelectorAll("input")].map(i => i.value || "");
        dados.push({
          tipo,
          campos,
          pos: {
            left: card.style.left,
            top: card.style.top
          },
          bloqueado: card.dataset.bloqueado === "true"
        });
      });

      localStorage.setItem("fichaGenericRecord", JSON.stringify(dados));
      window.location.href = "Hub_fichas.php";
    });
  }

  // Restaurar do localStorage
  const restaurados = JSON.parse(localStorage.getItem("fichaGenericRecord") || "[]");
  restaurados.forEach(info => {
    const card = criarCard(info.tipo, info.campos.length);
    info.campos.forEach((val, i) => {
      const input = card.querySelectorAll("input")[i];
      if (input) input.value = val;
    });
    card.style.left = info.pos.left;
    card.style.top = info.pos.top;
    card.dataset.bloqueado = info.bloqueado ? "true" : "false";
    const btnLock = card.querySelector(".btn-lock");
    if (btnLock) btnLock.textContent = info.bloqueado ? "🔒" : "🔓";
    quadro.appendChild(card);
    ativarDragSuave(card);
  });
});
</script>






    
<style>
    @import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');
body {
    background-color: #000000;
}


* {
font-family: "MedievalSharp", sans-serif;

}
   
    header {
        text-align: center;
        font-size: 70px;
        font-family: "MedievalSharp", sans-serif;
        color: rgb(255, 255, 255);
   
    }

    nav {
        text-align: center;
        margin-top: 50px;
        color: white;
       
    }
   main { 
display: flex;
justify-content: center;
margin-top: 100px;

   }
   
    #quadro {
    width: 1400px;
    height: 1000px;
    background-color: #ffffff;
    border: 2px solid #333333;
    position: relative;
    padding: 20px;
    border-radius: 20px;
    align-items: center;
    color: white;
    background-color: #090909;
    overflow: hidden;
   
}

#card_mini {
    width: 200px;
    height: 400px;
    background-color: #121312;
    border: 2px solid #333333;
  box-shadow: 0.5px 0.5px 0 rgb(100, 99, 99);
    padding: 20px;
    border-radius: 20px;
  position: absolute;
      cursor: grab;
}

.anxiety {
background-color: white;

}


.anxiety {
    background-color: rgb(0, 0, 0);
    color: white;
    font-weight: bold;
    cursor: pointer;
   
}

.cards {
background-color: rgb(0, 0, 0);
color: white;
}

.sec2 {
display: flex;
justify-content: start;
}

.principal {
display: flex;
justify-content: center;
}

::selection {
  background-color: #3f3e4121;
  color: #7003c9;
}

.texto1 {
background-color: transparent;
border: none;
box-shadow: 0px 1px 0 rebeccapurple;
color: white;
}

.estilo-card {
  background: linear-gradient(to bottom right, #1a1a1a, #2d2d2d);
  border: 2px solid #7003c9;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
  border-radius: 12px;
  padding: 15px;
  width: 220px;
  animation: fadeIn 0.3s ease-out;
  color: white;
    cursor: grab;
  user-select: none;
  position: absolute;
}

.estilo-card input {
  background-color: black;
  color: white;
  border: none;
  border-bottom: 1px solid rebeccapurple;
  padding: 6px;
}

.cardmini-custom {
  width: 180px;
  background-color: #1e1e1e;
  border: 2px solid rebeccapurple;
}

.cardmedio-custom {
  width: 240px;
  background-color: #262626;
  border: 2px solid rebeccapurple;
}

.cardgrande-custom {
  width: 300px;
  background-color: #1a1a1a;
  border: 2px solid rebeccapurple;
  gap: 10px;
  padding: 20px;
}

.cardsection-custom {
  width: 360px;
  background-color: #2c2c2c;
  border: 2px solid rebeccapurple;
}

a {
display: flex;
justify-content: flex-end;
margin-top: 50px;

}

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

.btn-fechar, .btn-lock {
  width: 24px;
  height: 24px;
  background: #7003c9;
  color: white;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  font-weight: bold;
  z-index: 999;
  position: absolute;
}

.btn-fechar {
  top: 6px;
  right: 6px;
}

.btn-lock {
  top: 6px;
  left: 200px;
}


</style>

<body>
    <header>
       <strong> AQUI VOCÊ CRIA SUA DO ZERO</strong>
    </header>
    <nav>
  
   <button id="btnVoltar" class="cta">
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
   
      
      
      
      
      <div class="box">
         
                <label for="cards">Selecione o tipo de card:</label>
                <select class="cards" name="cards">
                    <option id="card" value="cardmedio">Card médio</option>
                    <option value="cardmini">Mini card</option>
                    <option value="cardgrande">Card grande</option>
                    <option value="cardsection">Card section</option>
                </select>
                
            </form>
        </div>
    </nav>
    <main>
<div id="principal">
  <div id="quadro">
<!-- <div draggable="true" id="card_mini">
       <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
           <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
         <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
     

</div>
<div class="minicard">
     <div class="imputs"><input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
           <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
         <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br></div>
    <div class="imputs2"><input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
           <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
         <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br>
        <input type="text" class="texto1" name="texto"><br><br>
    <input type="text" id="texto" name="texto"><br><br></div> -->

</div>


    </main>


</body>

</html>
