<?php include __DIR__ . "/../layout/header.php" ?>
    <a href="/tarefas?action=create">Nova tarefa</a>
    <br>
    <br>getUserId()
    <br>

    <table>
        <?php foreach ($tarefas as $tarefa) { ?>

            <tr>
                <td> <?php echo $tarefa->getId() ?></td>
                <td> <?php echo $tarefa->getNome() ?></td>
                <td> <?php echo $tarefa->getDate() ?></td>
                <td><a href="tarefas?id=<?php echo $tarefa->getId() ?>">Ver</a></td>
                <td><a href="/tarefas?action=edit&id=<?php echo $tarefa->getId() ?>">editar</a></td>
                <td>
                    <form action="tarefas?id=<?php echo  $tarefa->getId()?>" method="POST" >
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Excluir</button>
                    </form> </td>
            </tr>

        <?php } ?>


    </table>

<?php include __DIR__ . "/../layout/footer.php" ?>