
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">editar Novo</div>
                <div class="card-body">
                    <form action="{{route('produto.update', $produto->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input class="form-control mb-1" type="text" name="name" value="{{$produto->name}}" required placeholder="Nome">
                        <input class="form-control mb-1" type="text" name="marca" value="{{$produto->marca}}" required placeholder="marca">
                        <input class="form-control mb-1" type="text" name="descricao" value="{{$produto->descricao}}" required placeholder="descricao">
                        <input class="form-control mb-1" type="number" name="quantidade" value="{{$produto->quantidade}}" required placeholder="quantidade">
                        <input class="form-control mb-1" type="number" name="preco" value="{{$produto->preco}}" required placeholder="preco">

                        <button class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
