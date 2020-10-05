<?php  include __DIR__. "/../layout/header.php" ?>


<form action="/tarefas" method="post">
    <input type="text" name="tarefa" placeholder="Nome da Tarefa">
    <input type="date" name="data">
    <button type="submit"> salvar</button>

</form>


<?php  include __DIR__. "/../layout/footer.php" ?>