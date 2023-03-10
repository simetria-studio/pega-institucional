@extends('layouts.main')

@section('title', 'ABCJPêga | Home')

@section('content')
    {{-- BANNER --}}
    <div class="banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/banner.png') }}" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/banner.png') }}" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/banner.png') }}" class="d-block w-100 img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- TV PEGA  --}}
    <div class="container">
        <div class="separator my-5"><img src="{{ asset('assets/img/burrinho.png') }}" alt=""></div>
        <div class="d-flex justify-content-center mb-5">
            <div class="col-md-8 tv-pega mb-5">
                <h2 class="text-center mb-5">TV Pêga</h2>
                <div id="noticias-carousel" class="carousel noticias slide" data-bs-ride="carousel">
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
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100" alt="Imagem da Notícia 1">
                            <div class="carousel-caption">
                                <a class="text-light text-decoration-none hover-underline" href="#">
                                    <h5>Título da Notícia 1</h5>
                                    <p>Descrição da Notícia 1</p>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100" alt="Imagem da Notícia 2">
                            <div class="carousel-caption">
                                <a class="text-light text-decoration-none hover-underline" href="#">
                                    <h5>Título da Notícia 2</h5>
                                    <p>Descrição da Notícia 2</p>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/tvpega.png') }}" class="d-block w-100" alt="Imagem da Notícia 3">
                            <div class="carousel-caption">
                                <a class="text-light text-decoration-none hover-underline" href="#">
                                    <h5>Título da Notícia 3</h5>
                                    <p>Descrição da Notícia 3</p>
                                </a>
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
        </div>
    </div>
    {{-- Noticias --}}
    <div class="container">
        <div class="text-center mb-5">
            <h2>Notícias</h2>
        </div>
        <div class="row gap-md-5 justify-content-center mb-5">
            <div class="col-md-3 noticia-card mb-5">
                <div class="photo-container mb-4">
                    <img src="{{ asset('assets/img/noticia-1.png') }}" alt="">
                    <div class="leaf"></div>
                    <div class="leaf"></div>
                </div>
                <div class="decriptions">
                    <h5 class="text-custom mb-4" id="titulo-noticias">11º Encontro de Muladeiros</h5>
                    <hr>
                    <p class="fs-6 descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Ler Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 noticia-card mb-5 mb-sm-3">
                <div class="photo-container mb-4">
                    <div class="leaf"></div>
                    <div class="leaf"></div>
                    <img src="{{ asset('assets/img/noticia-2.png') }}" alt="">
                </div>
                <div class="descriptions">
                    <h5 class="text-custom mb-4" id="titulo-noticias">Título da Notícia 2</h5>
                    <hr>
                    <p class="fs-6 descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Ler Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 noticia-card mb-5 ">
                <div class="photo-container mb-4">
                    <div class="leaf"></div>
                    <div class="leaf"></div>
                    <img src="{{ asset('assets/img/noticia-3.png') }}" alt="">
                </div>
                <div class="descriptions">
                    <h5 class="text-custom mb-4" id="titulo-noticias">Título da Notícia 3</h5>
                    <hr>
                    <p class="fs-6 descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Ler Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Criadores de Asininos --}}
    <div class="container">
        <div class="mb-5">
            <div class="separator"><span>Criadores de Asininos e Muares Pêga no Brasil</span></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7">
                    <p class="fs-4  text-secondary">
                        <strong class="fs-4 text-dark">Aviso importante:</strong> Associados em dia com a Associação, para
                        se
                        cadastrarem no nosso mapa, basta
                        enviar sua logomarca para marketing@abcjpega.org.br
                    </p>
                </div>
                <div class="col-md-5">
                    @include('includes.brasil')
                </div>
            </div>
        </div>
    </div>
    {{-- Novidades e Eventos --}}
    <div class="container">
        <div class=" mb-5">
            <div class="text-center mb-3">
                <h3 class="fs-3">Novidades</h3>
            </div>
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-6">
                    <div class="separador mb-4">
                        <h5>Notas da diretoria</h5>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-md-0 mb-3">
                            <img src="{{ asset('assets/img/nota.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-10">
                            <h6 class="text-center text-custom fs-5">Titulo da nota</h6>
                            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel
                                exercitationem deserunt
                                praesentium sit fugit dolor quia officia! Omnis, debitis eius consequuntur itaque at
                                dolor
                                accusantium sint. Natus, asperiores debitis?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="separador mb-4">
                        <h5>Eventos</h5>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center mb-md-0 mb-3">
                            <img src="{{ asset('assets/img/evento.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-10">
                            <h6 class="text-center text-custom fs-5">Titulo do Evento</h6>
                            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel
                                exercitationem deserunt
                                praesentium sit fugit dolor quia officia! Omnis, debitis eius consequuntur itaque at
                                dolor
                                accusantium sint. Natus, asperiores debitis?
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

