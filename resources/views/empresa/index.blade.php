@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h1>Listagem Empresas</h1><img src="/img/empresa.svg" class="ml-5" width="50" height="50">
                </div>
                <a class="btn btn-primary mb-3" href="{{route('empresa.create')}}">Cadastrar</a>
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome empresa</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Endereço</th>
                                <th width="30%" scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @empty(!$empresas)
                            @php
                                $n=0;
                            @endphp
                                @foreach ($empresas as $empresa)
                                    <tr>
                                    <th scope="row">{{++$n}}</th>
                                        <td>{{$empresa->nome_empresa}}</td>
                                        <td>{{$empresa->email}}</td>
                                        <td>{{$empresa->endereco}}</td>
                                        <td>
                                            <div class="row">
                                                <a class="btn btn-primary mr-2" href="{{route('empresa.edit', $empresa->id)}}"> Editar</a>    
                                                {{ Form::open(['method' => 'DELETE', 'route' => ['empresa.destroy', $empresa->id]]) }}
                                                {{ Form::submit('Deletar', ['class' => 'btn btn-danger']) }} 
                                                {{ Form::close() }} 
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endempty
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection