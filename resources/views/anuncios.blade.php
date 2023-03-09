@extends('layouts.main')

@section('title', 'ABCJPêga | Anúncios')

@section('content')
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fs-3">Anuncie em nosso Site</h1>
            <p class="fs-6">Os associados e demais interessado em divulgar seu criatório ou produto no nosso site oficial,
                deverão
                acessar nossa <a class="text-custom text-decoration-none" href="">Loja virtual</a>
                será gerado um boleto para pagamento à vista, antes do anúncio ser publicado no portal.
            </p>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-items-center justify-content-center h-100 mb-5">
                <div class="anuncio w-100">
                    <h2 class="texto-1 fs-1 mb-0">Anúncie</h2>
                    <hr class="linha border-2">
                    <h2 class="texto-2 fs-1 mb-0 text-danger">Aqui</h2>
                </div>
            </div>
            <div class="col-md-6 mb-5 tv-pega">
                <div id="noticias-carousel" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#noticias-carousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Notícia 1"></button>
                        <button type="button" data-bs-target="#noticias-carousel" data-bs-slide-to="1"
                            aria-label="Notícia 2"></button>
                        <button type="button" data-bs-target="#noticias-carousel" data-bs-slide-to="2"
                            aria-label="Notícia 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100 "
                                alt="Imagem da Notícia 1">
                            <div class="carousel-caption">
                                <h5>Título da Notícia 1</h5>
                                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse sed minus, aut consectetur
                                    distinctio recusandae delectus mollitia, placeat cumque porro iusto eum quaerat labore
                                    dolorum quam blanditiis quasi dolorem dolore?</p>
                                <a href="#" class="btn btn-custom">Assistir à Matéria</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100" alt="Imagem da Notícia 2">
                            <div class="carousel-caption">
                                <h5>Título da Notícia 2</h5>
                                <p>Descrição da Notícia 2</p>
                                <a href="#" class="btn btn-custom">Assistir à Matéria</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100" alt="Imagem da Notícia 3">
                            <div class="carousel-caption">
                                <h5>Título da Notícia 3</h5>
                                <p>Descrição da Notícia 3</p>
                                <a href="#" class="btn btn-custom">Assistir à Matéria</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#noticias-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#noticias-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3 d-flex aling-items-center justify-content-center h-100 mb-5">
                <div class="anuncio">
                    <h2 class="texto-1 fs-1 mb-0">Anúncie</h2>
                    <hr class="linha border-2">
                    <h2 class="texto-2 fs-1 mb-0 text-danger">Aqui</h2>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="p-2 d-flex justify-content-center align-items-center h-100">
                    <div class="text-center">
                        <p class="fs-5">Cadastre seu criatório do nosso mapa!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <img src="{{ asset('assets/img/mapa.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-12 mb-5 d-flex justify-content-center">
                <a href="#" class="btn btn-custom rounded-fill">Solicitar serviço</a>
            </div>
        </div>
    </div>
@endsection
