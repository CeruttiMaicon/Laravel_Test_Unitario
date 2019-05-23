@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <h1>Listagem Empresas</h1>
            </div>
            <a class="btn btn-primary mb-3" href="{{route('empresa.create')}}">Cadastrar</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome empresa</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Endereço</th>
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
                            </tr>
                        @endforeach
                    @endempty
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection