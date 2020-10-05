
<div id="modal-login" class="modal-container">
    <div class="modal">
        <button class="fechar" id="fechar-modal">x</button>
        <img class="logo" src="" alt="" srcset="/imagens/LG.png" >
        <h2 id="titulo-modal" class="subtitulo">Mercado Verde Tavares</h2>
        <br>
        <h4  id="subtitulo" class="subtitulo">Faça seu login:</h4>
        <br>
        <form action="/validar" method="POST">
            <label class="info" for="">E-mail:</label>
            <input type="text" name="email" class="input" placeholder="E-mail" required>
            <label class="info" for="">Senha:</label>
            <input type="password" name="senha" class="input" placeholder="Senha" required>
            <input type="submit" class="entarLog" value="entrar">
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        } ?>
        </form>
    </div>

</div>

<div id="modal-cadastrar" class="modal-container">
    <div class="modal">
        <button class="fechar" id="fechar-modal">x</button>
        <button class="fechar" id="fechar-modal">x</button>
        <img class="logo" src="" alt="" srcset="/imagens/LG.png" >
        <h2 id="titulo-modal" class="subtitulo">Mercado Verde Tavares</h2>
        <br>
        <h4  id="subtitulo" class="subtitulo">Faça seu Cadastro:</h4> &nbsp;
        <br>
        <form action="/cliente" method="POST">
             <label class="info" for="">Nome:</label>
            <input type="text" name="name" class="input" placeholder="Nome"> <br>
            <label class="info" for="">Sobrenome:</label>
            <input type="text" name="sobrenome"class="input" placeholder="Sobrenome"> <br>
            <label class="info" for="">Nascimento:</label>
            <input type="date" name="nascimento" class="input" placeholder="Nascimento"> <br>
            <label class="info" for="">E-mail:</label>
            <input type="text" name="email" class="input" placeholder="E-mail"> <br>
            <label class="info" for="">Senha:</label>
            <input type="password" name="senha" class="input" placeholder="Senha"> <br>
            <input type="submit" class="entarLog" value="Cadastrar">

        </form>
    </div>
</div>


<div>
    <h2>Rodapé</h2>

</div>


<script src="js/MeuJs.js"></script>


</body>
</html>