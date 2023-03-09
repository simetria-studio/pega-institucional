@extends('layouts.main')

@section('title', 'ABCJPêga | Nossos Parceiros')

@section('content')
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fs-3">Nossos Parceiros</h1>
        </div>
        <div class="parceiros">
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/muladeiras.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">MuladeirAs</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/central-dos-muladeiros.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Central dos Muladeiros</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/coisa-da-roca.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Cavalos, Jumentos, Muares <br> e Coisas Da Roça</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/burro-traiado.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Burro Traiado</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/muladeiros-oficial.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Muladeiros Oficial</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/comitiva-uniao.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Comitiva União</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/comitiva-cata.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Comitiva dos Amigos Tropeiros</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/cavaleiro.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Cavaleiro</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/burro-bao.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Comitiva Burro Bão</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/regis-nascimento.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Regis Nascimento</p>
            </div>
            <div class="mx-auto mb-3">
                <img src="{{ asset('assets/img/parceiros/intercity.png') }}" class="img-fluid" alt="">
                <hr>
                <p class="text-center fs-5">Intercity Hotels</p>
            </div>
        </div>
    </div>
@endsection
