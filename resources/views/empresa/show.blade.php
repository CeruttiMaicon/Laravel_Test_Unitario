@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-12 offset-4 mb-3">
                <img src="/img/empresa.svg" width="150" height="150">
            </div>
            <div class="card">
                <div class="card-header">
                    Visualizar empresa
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nome_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Nome empresa:') }}</label>
                        <span class="mt-2">
                            {{$empresa->nome_empresa}}
                        </span>
                    </div>
                
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail:') }}</label>
                        <span class="mt-2">
                            {{$empresa->email}}
                        </span>
                    </div>
                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço:') }}</label>
                        <span class="mt-2">
                            {{$empresa->endereco}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection