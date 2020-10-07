<?php include __DIR__ ."/../layout/header.php" ?>

<div class="divLogado">

    <div class="dadosLog">
        <div id="UserIdentificador" class=""><h4 >Bem vindo <?php echo $_SESSION["user_name"] ?></h4></div>
        <input  class="usertx" placeholder= "O que você procura?" type="text">
        <form action="/produto" method="GET">
            <input class="userBT" type="submit" name="pesquisa" id="btpesquisa" value=" Pesquisa ">
        </form>
        <form action="/produto" method="GET">
            <input class="userBT" type="submit" name="carrinho" id="btcarrinho" value=" Carrinho ">
        </form>
        <form action="/produto" method="GET">
            <input  class="userBT" type="submit" name="produto" id="btproduto" value=" Produtos ">
        </form>
    <form action="/logout" method="POST">
        <input class="userBT" type="submit" name="sair" id="btsair" value=" sair ">
    </form>

    </div>


    <script !src="">
        btcadastrar.style.display="none";
        btlogin.style.display="none";

    </script>
</div>

<?php include __DIR__ ."/../layout/footer.php" ?>