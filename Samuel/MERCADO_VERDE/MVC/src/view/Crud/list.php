
<?php include __DIR__ . "/../layout/header.php" ?>
    $ProdutoDAO = new ProdutoDAO();
    $dados = $ProdutoDAO->findAll();
    <a href="/">voltar</a>

    <table>
        <thead>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>marca</td>
            <td>descricao</td>
            <td>estoque</td>
            <td>dataCadastro</td>
            <td>preco</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dados as $dado) { ?>
            <tr>
                <td><?php echo $dado->getName() ?></td>
                <td><?php echo $dado->getMarca() ?></td>
                <td><?php echo $dado->getDescricao() ?></td>
                <td><?php echo $dado->getEstoque() ?></td>
                <td><?php echo $dado->getDataCadastro() ?></td>
                <td><?php echo $dado->getPreco() ?></td>
                <td>
                    <a href="/produto?view&id=<?php echo $dado->getId() ?>">Detalhes</a>
                    <a href="/produto?edit&id=<?php echo $dado->getId() ?>">Editar</a>
                    <form action="/produto?delete&id=<?php echo $dado->getId() ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>

<?php include __DIR__ . "/../layout/footer.php" ?>