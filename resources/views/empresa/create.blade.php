@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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