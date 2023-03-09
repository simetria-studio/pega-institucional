@extends('layouts.main')

@section('title', 'ABCJPêga | Sobre nós')

@section('content')
    <div class="my-5">
        <h1 class="default-title">Sobre nós</h1>
    </div>
    <div class="container mb-5">
        <div class="separator"><img src="{{ asset('assets/img/burrinho.png') }}" class="img-fluid" alt=""></div>
    </div>
    {{-- Sobre nos  --}}
    <div class="container mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 sobre-nos">
                <div class="row align-items-center ">
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/img/nota.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-10 p-2 text-center">
                        <h5 class="text-center fs-5">Quem Somos?</h5>
                        <p class="fs-6">
                            A Associação
                            A Associação Brasileira dos Criadores de Jumento Pêga foi fundada em 15 de agosto de 1947, no
                            Parque de Exposições Bolívar de Andrade (Gameleira) na cidade de Belo Horizonte – Minas Gerais,
                            onde possui sua sede.
                        </p>
                        <p class="fs-6 ">
                            A ata de criação da instituição foi assinada pelos nossos sócios fundadores, que movidos pela
                            paixão e tradição difundiram a raça Pêga. <br>
                            <a href="#" class="text-custom">Continuar Lendo...</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sobre-nos">
                <div class="row align-items-center ">
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('assets/img/burrinho.png') }}"  width="150" alt="">
                    </div>
                    <div class="col-md-10 p-2 text-center">
                        <h5 class="text-center fs-5">Nossa missão</h5>
                        <p class="fs-6">
                            A missão da Associação Brasileira dos Criadores de Jumento Pêga está no aperfeiçoamento e
                            aprimoramento das características morfológicas e do andamento dos animais da raça Pêga. A
                            Associação visa a evolução da raça através do serviço cartorial de registros, que nos permite o
                            levantamento em números do histórico da raça.
                        </p>
                        <p class="fs-6">
                            O Ministério da Agricultura reconhece a ABCJPêga como única instituição <br>
                            <a href="#" class="text-custom">Continuar Lendo...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- equipe --}}
    <div class="container mb-5">
        <h1 class="default-title mb-5">Equipe de Excelência:</h1>
        <div class="equipe">
            <div class="membro">
                <img src="{{ asset('assets/img/foto_mariana.png') }}" class="mb-2" alt="Foto de Mariana">
                <h5 class="text-custom">Mariana Almeida Melo</h5>
                <div class="risco mb-2"></div>
                <span class="fs-6">Serviço De Registro Genealógico</span>
                <a href="#" class="text-custom fs-6 nav-link">Ver mais</a>
            </div>
            <div class="membro">
                <img src="{{ asset('assets/img/foto_samuel.png') }}" class="mb-2" alt="Foto de Samuel">
                <h5 class="text-custom">Samuel Andrade Pinto</h5>
                <div class="risco mb-2"></div>
                <span class="fs-6 ">Superintendente</span>
                <a href="#" class="text-custom fs-6 nav-link">Ver mais</a>
            </div>
            <div class="membro">
                <img src="{{ asset('assets/img/foto_ivanilson.png') }}" class="mb-2" alt="Foto de Ivanilson">
                <h5 class="text-custom">Ivanilson Alves</h5>
                <div class="risco mb-2"></div>
                <span class="fs-6">Serviço De Registro Genealógico</span>
                <a href="#" class="text-custom fs-6 nav-link">Ver mais</a>
            </div>
            <div class="membro">
                <img src="{{ asset('assets/img/foto_rosilene.png') }}" class="mb-2" alt="Foto de Rosilene">
                <h5 class="text-custom">Rosilene De Oliveira</h5>
                <div class="risco mb-2"></div>
                <span class="fs-6">Finançeiro</span>
                <a href="#" class="text-custom fs-6 nav-link">Ver mais</a>
            </div>
        </div>
    </div>
    {{-- Depoimentos --}}
    <div class="depoimentos">
        <div class="depoimento text-light mb-5  p-3">
            <h1 class="text-center">" Depoimentos:</h1>
            <div class="row align-items-center justify-content-center ">
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="foto_depoimento">
                        <img src="{{ asset('assets/img/foto_cristiano.png') }}" class="img-fluid" alt="">
                        <h5 class="text-center">Cristiano Marzola</h5>
                        <p class="text-center fs-6">Fazenda Certeza</p>
                    </div>

                </div>
                <div class="col-md-9 p-2 text-center texto">
                    <p>
                        ""Minha paixão por fazenda e animais, principalmente jumentos da raça Pega, vem desde pequeno,
                        quando sempre acompanhei meu avô João Humberto Carvalho e também os criatórios de dois tios, Marco
                        Antonio Barbosa e Cláudio Carvalho. Em 1982 meu pai comprou uma fazenda em Uberaba, trouxemos nelore
                        e mangalarga marchador do MS. Foi quando pedi para iniciar a criação de Pega. Compramos do tio
                        Cláudio 5 fêmeas e o reprodutor Nesso de PassaTempo, ganhei dele e do Marco Antonio uma jumenta de
                        cada. Fizemos várias parcerias importantes, para ter acesso a grandes reprodutores além dos nossos,
                        como Gás Ianque, Ianque da Vale Verde, Rena Oceano e Indiano Maab. Hoje, depois de tropeços,
                        aprendizado e vitórias, tenho 35 anos de criação sempre focados em andamento, temperamento, índole e
                        raça. Sou muito grato e orgulhoso por criar e vivenciar a raça Pega.""
                    </p>
                </div>
            </div>
        </div>

    </div>



@endsection
