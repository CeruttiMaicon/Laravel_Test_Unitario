@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-12 offset-4 mb-3">
                <img src="/img/empresa.svg" width="150" height="150">
            </div>
            <div class="card">
                <div class="card-header">{{ __('Registrar Empresa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('empresa.store') }}">
                        @include('empresa.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection