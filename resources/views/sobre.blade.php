@extends('layouts.main')

@section('title', 'ABCJPêga | Sobre nós')

@section('content')
    <div class="my-5 text-center">
        <h1 class="">Sobre nós</h1>
    </div>
    {{-- Sobre nos  --}}
    <div class="container mb-5">
        <div class="row  justify-content-around">
            <div class="col-md-6 p-3">
                <h5 class="fs-5 text-center">Quem Somos?</h5>
                <img src="{{ asset('assets/img/nota.png') }}" class="img-fluid img-sobre" alt="">
                <details>
                    <summary class="fs-6">
                        A Associação
                        A Associação Brasileira dos Criadores de Jumento Pêga foi fundada em 15 de agosto de 1947, no
                        Parque de Exposições Bolívar de Andrade (Gameleira) na cidade de Belo Horizonte – Minas Gerais,
                        onde possui sua sede.
                        A ata de criação da instituição foi assinada pelos nossos sócios fundadores, que movidos pela
                        paixão e tradição difundiram a raça Pêga.
                    </summary>
                    <p>São sócios fundadores da ABCJPêga os senhores Alcindo Vieira de Rezende, Amâncio Ferreira de Assis,
                        Américo de Oliveira, Américo Moacir de Oliveira, Américo Dutra de Resende, Américo Vieira de
                        Rezende, Antônio Brandão da Rocha, Antônio Horácio Vieira, Antônio Saturnino de Resende, Ascânio
                        Afonso Diniz, Aurélio Resende, Bolivar de Andrade, Donato de Andrade, Donorte Lourenço André,
                        Eduardo Victor de Carvalho, Elizário José de Resende, Ernesto Resende, Fábio Pereira de Resende,
                        Franciso Baeta de Siqueira, Francisco de Oliveira Naves, Gastão Resende, Geraldo Vidigal, João
                        Piassi, Joaquim Fernandes Braga, José Eduardo de Resende, José Gabriel Ferreira Neto, José Resende,
                        José Saturnino de Resende, José Tavares de Melo, Manoel Marques Vieira, Márcio Andrade, Orlando de
                        Andrade, Raymundo Tavares da Silva, Viúva Eduardo Vieira de Resende, Waldemar de Resende Urbano e
                        Wander de Andrade.

                        A ABCJPêga desde 1986, por expressa concessão do Ministério da Agricultura, Pecuária e Abastecimento
                        (MAPA), é a única entidade competente e responsável pela administração do Registro Genealógico da
                        raça Pêga em todo território nacional.

                        Visando o desenvolvimento e crescimento da Pêga, uma das principais prestações de serviço da
                        associação tornou-se também a realização da Exposição Nacional ENAPÊGA, reunindo os maiores
                        criadores da raça e permitindo o julgamento dos melhores animais do país.

                        Foi com muita dedicação de todos associados juntamente com todas diretorias que assumiram a
                        administração da Pêga. A entidade chegou ao ano de 2018 com o número de sócios ultrapassando a casa
                        dos 1.570 e 35.825 animais registrados.

                        A raça Pêga é conhecidamente a raça de preferência dos criadores em diversas regiões do País.</p>
                </details>
            </div>


            <div class="col-md-6  p-3">
                <h5 class="text-center fs-5">Nossa missão</h5>
                <img src="{{ asset('assets/img/burrinho.png') }}" class="img-sobre" alt="">
                <details>
                    <summary>
                        A missão da Associação Brasileira dos Criadores de Jumento Pêga está no aperfeiçoamento e
                        aprimoramento das características morfológicas e do andamento dos animais da raça Pêga. A
                        Associação visa a evolução da raça através do serviço cartorial de registros, que nos permite o
                        levantamento em números do histórico da raça.
                    </summary>
                    <p>
                        O Ministério da Agricultura reconhece a ABCJPêga como única instituição responsável pela
                        administração do registro genealógico da raça Pêga, o que torna a entidade referência nacional.

                        A atuação da Associação Pêga permite a valorização crescente da raça, sempre conhecida pela sua
                        resistência para percorrer longas distâncias e aptidão ao trabalho no campo, e atualmente também
                        visada pela comodidade da marcha, que garante conforto ao cavaleiro, pela sua beleza e docilidade.

                        Nossa missão também é a realização da exposição Nacional, concursos de marcha e o Leilão dos
                        Associados. Esses eventos reúnem os maiores criadores e os melhores animais representantes da raça.
                    </p>
                </details>
            </div>
        </div>
    </div>
    {{-- equipe --}}

    <div class="container">
        <h2 class="text-center mb-5">Equipe de Excelência:</h2>
        <div class="team-container my-5">
            <div class="team-member">
                <img src="{{ asset('assets/img/ronan.jpeg') }}" alt="Nome do membro" class="member-image">
                <div class="member-info">
                    <h3>Ronan Costa do Carmo</h3>
                    <p>Coordenador</p>
                    <div class="social-icons">
                        <a href="mailto:coordenacao@abcjpega.org.br" target="_blank"><i class="fas fa-envelope-open"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('assets/img/foto_mariana.png') }}" alt="Nome do membro" class="member-image">
                <div class="member-info">
                    <h3>Mariana Almeida Melo</h3>
                    <p>Registro Genealógico</p>
                    <div class="social-icons">
                        <a href="mailto:srg@abcjpega.org.br" target="_blank"><i class="fas fa-envelope-open"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('assets/img/foto_samuel.png') }}" alt="Nome do membro" class="member-image">
                <div class="member-info">
                    <h3>Samuel Andrade Pinto</h3>
                    <p>Superintendente</p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('assets/img/foto_ivanilson.png') }}" alt="Nome do membro" class="member-image">
                <div class="member-info">
                    <h3>Ivanilson Alves</h3>
                    <p>Registro Genealógico</p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('assets/img/foto_rosilene.png') }}" alt="Nome do membro" class="member-image">
                <div class="member-info">
                    <h3>Rosilene De Oliveira</h3>
                    <p>Finançeiro</p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Depoimentos --}}

    <div class="bg-custom text-light mb-5  p-3">
        <h1 class="text-center">" Depoimentos:</h1>

        <div id="depoimentos" class="carousel depoimentos   slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item my-3 active">
                    <div class="row align-items-center justify-content-center ">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="foto_depoimento">
                                <img src="{{ asset('assets/img/foto_cristiano.png') }}" class="img-fluid" alt="">
                                <h5 class="text-center">Cristiano Marzola</h5>
                                <p class="text-center fs-6">Fazenda Certeza</p>
                            </div>

                        </div>
                        <div class="col-md-9 p-2  texto">
                            <p>
                                ""Minha paixão por fazenda e animais, principalmente jumentos da raça Pega, vem desde
                                pequeno,
                                quando sempre acompanhei meu avô João Humberto Carvalho e também os criatórios de dois
                                tios, Marco
                                Antonio Barbosa e Cláudio Carvalho. Em 1982 meu pai comprou uma fazenda em Uberaba,
                                trouxemos nelore
                                e mangalarga marchador do MS. Foi quando pedi para iniciar a criação de Pega. Compramos
                                do tio
                                Cláudio 5 fêmeas e o reprodutor Nesso de PassaTempo, ganhei dele e do Marco Antonio uma
                                jumenta de
                                cada. Fizemos várias parcerias importantes, para ter acesso a grandes reprodutores além
                                dos nossos,
                                como Gás Ianque, Ianque da Vale Verde, Rena Oceano e Indiano Maab. Hoje, depois de
                                tropeços,
                                aprendizado e vitórias, tenho 35 anos de criação sempre focados em andamento,
                                temperamento, índole e
                                raça. Sou muito grato e orgulhoso por criar e vivenciar a raça Pega.""
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item my-3">
                    <div class="row align-items-center justify-content-center ">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="foto_depoimento">
                                <img src="{{ asset('assets/img/foto_cristiano.png') }}" class="img-fluid" alt="">
                                <h5 class="text-center">Cristiano Marzola</h5>
                                <p class="text-center fs-6">Fazenda Certeza</p>
                            </div>

                        </div>
                        <div class="col-md-9 p-2 texto">
                            <p>
                                ""Minha paixão por fazenda e animais, principalmente jumentos da raça Pega, vem desde
                                pequeno,
                                quando sempre acompanhei meu avô João Humberto Carvalho e também os criatórios de dois tios,
                                Marco
                                Antonio Barbosa e Cláudio Carvalho. Em 1982 meu pai comprou uma fazenda em Uberaba,
                                trouxemos nelore
                                e mangalarga marchador do MS. Foi quando pedi para iniciar a criação de Pega. Compramos do
                                tio
                                Cláudio 5 fêmeas e o reprodutor Nesso de PassaTempo, ganhei dele e do Marco Antonio uma
                                jumenta de
                                cada. Fizemos várias parcerias importantes, para ter acesso a grandes reprodutores além dos
                                nossos,
                                como Gás Ianque, Ianque da Vale Verde, Rena Oceano e Indiano Maab. Hoje, depois de tropeços,
                                aprendizado e vitórias, tenho 35 anos de criação sempre focados em andamento, temperamento,
                                índole e
                                raça. Sou muito grato e orgulhoso por criar e vivenciar a raça Pega.""
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item my-3">
                    <div class="row align-items-center justify-content-center ">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="foto_depoimento">
                                <img src="{{ asset('assets/img/foto_cristiano.png') }}" class="img-fluid" alt="">
                                <h5 class="text-center">Cristiano Marzola</h5>
                                <p class="text-center fs-6">Fazenda Certeza</p>
                            </div>
                        </div>
                        <div class="col-md-9 p-2 texto">
                            <p>
                                ""Minha paixão por fazenda e animais, principalmente jumentos da raça Pega, vem desde
                                pequeno,
                                quando sempre acompanhei meu avô João Humberto Carvalho e também os criatórios de dois tios,
                                Marco
                                Antonio Barbosa e Cláudio Carvalho. Em 1982 meu pai comprou uma fazenda em Uberaba,
                                trouxemos nelore
                                e mangalarga marchador do MS. Foi quando pedi para iniciar a criação de Pega. Compramos do
                                tio
                                Cláudio 5 fêmeas e o reprodutor Nesso de PassaTempo, ganhei dele e do Marco Antonio uma
                                jumenta de
                                cada. Fizemos várias parcerias importantes, para ter acesso a grandes reprodutores além dos
                                nossos,
                                como Gás Ianque, Ianque da Vale Verde, Rena Oceano e Indiano Maab. Hoje, depois de tropeços,
                                aprendizado e vitórias, tenho 35 anos de criação sempre focados em andamento, temperamento,
                                índole e
                                raça. Sou muito grato e orgulhoso por criar e vivenciar a raça Pega.""
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#depoimentos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#depoimentos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>


    </div>


@endsection

@section('js')
    <script>
        const membros = $('.membro');

        // para cada membro da equipe, adiciona um event listener para o evento 'mouseenter'
        membros.each(function() {
            const linksContainer = $(this).find('.links');
            const redesSociais = $(this).find('.redes-sociais a');

            $(this).on('mouseenter', function() {
                linksContainer.show();
                redesSociais.each(function() {
                    const link = $('<a>').attr('href', $(this).attr('href')).text($(this).text());
                    linksContainer.append(link);
                });
            });

            $(this).on('mouseleave', function() {
                linksContainer.hide().empty();
            });
        });
    </script>
@endsection
