@extends('layouts.main')

@section('title', 'ABCJPêga | Novidades')

@section('content')
    <div class="mb-5">
        <iframe class="video-1" src="https://www.youtube.com/embed/1asvk4a6610"
            title="CHAMADA TV PÊGA - EDIÇÃO 29 - JUNHO DE 2022" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>
    <div class="container">
        <div class="mb-5">
            <h2 class="text-center">Mais</h2>
        </div>
        <div class="d-flex justify-content-center mb-5 ">
            <div class="form-check form-check-inline mx-4">
                <input class="form-check-input fs-5" type="radio" name="novidades" id="notas" value="nota-diretoria"
                    checked>
                <label class="form-check-label fs-5" for="notas">Notas</label>
            </div>
            <div class="form-check form-check-inline mx-4">
                <input class="form-check-input fs-5" type="radio" name="novidades" id="events" value="eventos">
                <label class="form-check-label fs-5" for="events">Eventos</label>
            </div>
            <div class="form-check form-check-inline mx-4">
                <input class="form-check-input fs-5" type="radio" name="novidades" id="news" value="noticias">
                <label class="form-check-label fs-5" for="news">Notícias</label>
            </div>
        </div>
        <section class="novidades" id="nota-diretoria">
            <h4 class="text-center">Notas da diretoria</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto border-bottom" id="titulo">Nota da diretoria
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Nota da diretoria
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Nota da diretoria
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="novidades" id="eventos">
            <h4 class="text-center">Eventos</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 ">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Titulo do evento
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Titulo do evento
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Titulo do evento
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="novidades" id="noticias">
            <h4 class="text-center">Notícias</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-md-4  mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Titulo da notícia
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom " id="titulo">Titulo da notícia
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  mb-3">
                    <div class="card card-custom border-0 text-start">
                        <img class="card-img-top img-fluid" src="holder.js/100px180/">
                        <div class="card-body">
                            <h4 class="card-title text-custom mx-auto text-center border-bottom" id="titulo">Titulo da notícia
                                <div class="risco-setores"></div>
                            </h4>
                            <p class="card-text mb-3 descricao-card" id="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam tempor
                                id
                                nulla morbi. Cras nisl, euismod velit feugiat vel aliquet elementum. In proin sagittis vitae
                                tortor sed enim mi diam. Quam ac dui etiam nunc vitae arcu dui faucibus.
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-custom" href="#">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Obtém a opção selecionada no localStorage (ou a primeira opção se ainda não foi definida)
            var opcaoSelecionada = localStorage.getItem('opcaoSelecionada') || $('input[type="radio"]').eq(0).val();

            // Seleciona a opção armazenada no localStorage
            $('input[type="radio"][value="' + opcaoSelecionada + '"]').prop('checked', true);

            // Exibe a seção correspondente à opção selecionada
            $('#' + opcaoSelecionada).addClass('active').fadeIn();

            // Salva a opção selecionada no localStorage quando ela mudar
            $('input[type="radio"]').change(function() {
                if ($(this).is(':checked')) {
                    opcaoSelecionada = $(this).val();
                    localStorage.setItem('opcaoSelecionada', opcaoSelecionada);
                    $('section.active').fadeOut(function() {
                        $('section').removeClass('active');
                        $('#' + opcaoSelecionada).fadeIn().addClass('active');
                    });
                }
            });
        });
    </script>
@endsection
