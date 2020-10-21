<x-app-layout>
    <x-slot name="header">


    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left"></span>
                    <a href="{{route('produto.create')}}" class="btn btn-success float-left">Novo produto</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-success">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>marca</td>
                                <td>Descrição</td>
                                <td>Quantidade</td>
                                <td>Preço</td>
                                <td>Data do Cadastro</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <td>{{$dado->id}}</td>
                                    <td>{{$dado->name}}</td>
                                    <td>{{$dado->marca}}</td>
                                    <td>{{$dado->descricao}}</td>
                                    <td>{{$dado->quantidade}}</td>
                                    <td>{{$dado->preco}}</td>
                                    <td>{{\Carbon\Carbon::parse($dado->created_at)->format("d/m/Y H:m")}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="{{route('produto.show', $dado->id )}}" class="btn btn-primary">Exibir</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{route('produto.edit', $dado->id )}}" class="btn btn-secondary">Editar</a>
                                            </div>
                                            <div class="col-4">
                                                <form action="{{route('produto.destroy', $dado->id )}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
