<?php  include __DIR__. "/../layout/header.php" ?>


    <form action="/tarefas?id=<?php echo  $id ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="tarefa" placeholder="Nome da Tarefa" value="<?php echo $tarefa->getNome()?>">
        <input type="date" name="data" value="<?php echo $tarefa->getDate()?>">
        <button type="submit"> salvar</button>

    </form>


<?php  include __DIR__. "/../layout/footer.php" ?>