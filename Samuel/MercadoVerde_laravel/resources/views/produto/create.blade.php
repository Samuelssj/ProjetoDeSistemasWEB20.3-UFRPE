
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar Novo</div>
                <div class="card-body">
                    <form action="{{route('produto.store')}}" method="POST">
                        @csrf
                        <input class="form-control mb-1" type="text" name="name" required placeholder="Nome">
                        <input class="form-control mb-1" type="text" name="marca" required placeholder="marca">
                        <input class="form-control mb-1" type="text" name="descricao" required placeholder="descricao">
                        <input class="form-control mb-1" type="number" name="quantidade" required placeholder="quantidade">
                        <input class="form-control mb-1" type="number" name="preco" required placeholder="preco">

                        <button class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
