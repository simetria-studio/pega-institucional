@extends('layouts.main')

@section('title', 'ABCJPêga | Registrar-se')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 border anuncio-grande mb-4 ">
                <div class="anuncio border border-dark mx-auto ">
                    <div>
                        <h2 class="texto-1 fs-1 mb-0">Anúncie</h2>
                        <hr class="linha border-2">
                        <h2 class="texto-2 fs-1 mb-0 text-danger">Aqui</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input id="name" type="text"
                                class="form-control text-center form-cinza @error('name') is-invalid @enderror"
                                name="name" required placeholder="Nome">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-md-12 mb-3">
                            <input id="email" type="email"
                                class="form-control text-center form-cinza @error('email') is-invalid @enderror"
                                name="email" required placeholder="E-mail">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <input id="password" type="password"
                                class="form-control text-center form-cinza @error('password') is-invalid @enderror"
                                name="password" required placeholder="Senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <input id="password-confirm" type="password" class="form-control text-center form-cinza"
                                name="password_confirmation" required placeholder="Confirme sua senha">
                        </div>

                        <div class="col-md-12 d-flex justify-content-center mb-3">
                            <button type="submit" class="btn btn-custom">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-link text-decoration-none text-dark"
                                href="{{ route('login') }}">
                                Já tem cadastro? <span class="text-custom">Fazer login</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
