    @csrf

    <div class="form-group row">
        <label for="nome_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Nome empresa') }}</label>

        <div class="col-md-6">
            <input id="nome_empresa" type="text" class="form-control @error('nome_empresa') is-invalid @enderror" name="nome_empresa" value="{{ old('name') }}" required autocomplete="nome_empresa" autofocus>

            @error('nome_empresa')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

        <div class="col-md-6">
            <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">

            @error('endereco')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Salvar') }}
            </button>
        </div>
    </div>
</form>
