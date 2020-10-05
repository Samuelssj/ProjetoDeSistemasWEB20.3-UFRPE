<?php include __DIR__ . "/../template/header.php" ?>




    <div class="menu">
        <div class="elementos">
            <a href="/cestasProntas">Cestas Prontas</a>
            <a href="/tarefas">Como Funciona</a>
            <a href="/tarefas">Mercado</a>

            <div id="content"><h3>Bem Vindo: <?php echo $_SESSION["user_name"] ?></h3></div>
            <input type="submit" name="cadastrar" id="btcadastrar" value="Sair">

        </div>
    </div>



<?php include __DIR__ . "/../template/footer.php" ?>