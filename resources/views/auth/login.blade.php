@extends('layouts.main')

@section('title', 'ABCJPêga | Login')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6 mx-auto">
                <h1 class="text-center fs-4">Bem vindo ao nosso sistema online! Faça login para continuar</h1>
            </div>
            <div class="col-12 border anuncio-grande mb-4 ">
                <div class="anuncio border border-dark mx-auto ">
                    <div>
                        <h2 class="texto-1 fs-1 mb-0">Anúncie</h2>
                        <hr class="linha border-2">
                        <h2 class="texto-2 fs-1 mb-0 text-danger">Aqui</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input id="email" type="email"
                                class="form-control form-cinza text-center rounded-pill @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Login">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <input id="password" type="password"
                                class="form-control form-cinza text-center rounded-pill @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" class="btn btn-custom px-5 rounded-pill">
                                {{ __('Login') }}
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="btn btn-link text-decoration-none text-dark"
                                    href="{{ route('register') }}">
                                    Não tem acesso? <span class="text-custom">Cadastre-se</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
