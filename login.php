<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUNDORPG</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" type="image/png" href="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" />
</head>
<body>
    <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: linear-gradient(80deg, black, rgb(69, 1, 152));
    margin: 0;
}

.container-principal {
    color: white;
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
    background-color: rgba(0, 0, 0, 0.712);
    box-shadow: 0 0 25px 5px #7700ff;
    padding: 40px 30px;
    border-radius: 20px;
    width: 70%;
    max-width: 550px;
    font-size: 19px;
    gap: 20px;
    text-align: center;
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

.hexagono {
    background-color: rgba(255, 255, 255, 0.05);
    padding: 15px;
    border-radius: 50%;
    box-shadow: 0 0 20px #7700ff88;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 90px;
    height: 90px;
    margin-bottom: 10px;
    transition: transform 0.4s ease;
}

.hexagono:hover {
    transform: scale(1.5);
}

.hexagono img {
    max-width: 60px;
    height: auto;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    text-align: left;
    font-weight: bold;
    margin-bottom: 5px;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background: #8720ed;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #3a0262;
}
    </style>

    <section class="secao-principal">
        <div class="container-principal">
            <div class="card-principal">
                <div class="hexagono">
                    <img width="47" height="37" src="pasta.ficha/logo/Logo Dragão - Sem Fundo .png" alt="Logo MundoRPG" />
                </div>
                <h2>Cadastre-se no MUNDORPG!</h2>
                <form action="loginHandler.php" method="post">
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
