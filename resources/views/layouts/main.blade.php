<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/formatacoes.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/midiaquery.min.css') }}">

</head>



<body>
    <header>
        <div class="cabecalho">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-around align-items-center col-md-1">
                        @guest
                            <a class="nav-link mx-3" href="{{ route('login') }}">
                                <iconify-icon icon="fluent-emoji-high-contrast:locked" width="20" height="20">
                                </iconify-icon>
                            </a>
                        @endguest

                        <a class="nav-link logo" href="{{ url('/') }}">ABCJPÊGA</a>
                    </div>
                    <div class="d-flex justify-content-around align-items-center col-md-1">
                        <a class="nav-link links" target="_blank" href="https://www.facebook.com/abcjumentopega/">
                            <iconify-icon icon="ant-design:facebook-filled" width="25" height="25">
                            </iconify-icon>
                            </iconify-icon>
                        </a>
                        <a class="nav-link links" target="_blank" href="https://www.instagram.com/abcjpega/">
                            <iconify-icon icon="ant-design:instagram-filled" width="25" height="25">
                            </iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center fs-6 my-3">
                <div class="col-md-4 text-center mb-3 ">
                    <span class="text-light ">Horário De Funcionamento: 08:30H às 17:30H</span>
                </div>
                <div class="col-md-4 text-center mb-3 ">
                    <a href="/">
                        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="logotipo da JPega">
                    </a>
                </div>
                <div class="col-md-4 mb-3 text-center">
                    <span class="text-light ">Av. Amazonas, 6020, BH/MG - Parque de Exposições Bolívar de
                        Andrade, CEP:
                        30.510-000
                    </span>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-dark navbar-expand-lg bg-custom ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center fs-6 mx-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                            <ul class="dropdown-menu text-center bg-secondary " aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('servicos/emolumentos') }}">Emolumentos</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('servicos/formularios') }}">Formulários</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('servicos/tecnicos') }}">Relação de
                                        Técnicos</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('servicos/arbitros-oficiais') }}">Relação De
                                        Árbitros
                                        Oficiais</a></li>
                                <li><a class="dropdown-item" href="{{ url('servicos/arbitros-credenciados') }}">Relação
                                        De
                                        Árbitros Credenciados</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('servicos/credenciamento') }}">Credenciamento</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('servicos/atendimento') }}">Atendimento</a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/novidades') }}">Novidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/jovem-criador') }}">Jovem Criador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/parceiros') }}">Parceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/anuncios') }}">Anúncios</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Associe-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sistema Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loja</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-6 col-8 mx-auto ">
                    <h3 class="text-center text-custom fs-3 mb-5">Contato</h3>
                    <div class="row justify-content-center line mb-3">
                        <div class="col-md-6 text-center mb-3">
                            <h5 class="mb-3 fs-5">Telefones:</h5>
                            <p class="mb-0 fs-6">(31) 3372-1223 (Whatsapp)</p>
                            <p class="mb-0 fs-6">(31) 3313-6798</p>
                            <p class="mb-0 fs-6">(31) 98663-1329</p>
                        </div>
                        <div class="col-md-6 text-center mb-3">
                            <h5 class="mb-3 fs-5">E-mail:</h5>
                            <p class="fs-6">abcjpega@abcjpega.org.br</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="text-center text-custom fs-3 mb-5">Novidades</h3>
                    <div class="col-6 mx-auto">
                        <form action="" class="newslatter">
                            <h5 class="text-center fs-5">Newslatter:</h5>
                            <div class="mb-3">
                                <input type="text" id="newslatter" class="form-control"
                                    placeholder="Digite seu e-mail">
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-custom rounded-pill px-4">Enviar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer">
            <div>
                <span class="fs-6">© 2023 ABCJPÊGA - Todos os direitos reservados</span>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="{{ asset('assets/js/tv.js') }}"></script>
    @yield('js')
</body>

</html>
