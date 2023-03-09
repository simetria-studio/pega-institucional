@extends('layouts.main')

@section('title', 'ABCJPêga | Atendimento')

@section('content')
    <div class="container my-5">
        <div class="col-8 mx-auto mb-5">
            <div class="text-center mb-5">
                <h1 class="fs-2">Fale Conosco</h1>
            </div>
            <div class="separador">
                <div class="separador-mid"></div>
            </div>
        </div>
        <div class="row justify-content-center  g-2">
            <div class="col-md-6 order-1 order-md-0">
                <div class="border-bottom mx-auto mx-md-0  col-6 mb-4 ">
                    <h3 class="text-center">Setores</h3>
                    <div class="risco-setores"></div>
                </div>
                <div class="row    g-2">
                    <div class="col-md-12">
                        <div class="col-6 text-center mx-auto mx-md-0 border-bottom">
                            <span class="fs-5">Secretaria do SRG:
                                <br>
                                Ramal 4
                            </span>
                            <p class="fs-6">srg@abcjpega.org.br</p>
                            <div class="risco-setores"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-6 text-center mx-auto mx-md-0 border-bottom">
                            <span class="fs-5">Financeiro:
                                <br>
                                Ramal 5
                            </span>
                            <p class="fs-6">financeiro@abcjpega.org.br</p>
                            <div class="risco-setores"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-6 text-center mx-auto mx-md-0 border-bottom">
                            <span class="fs-5">Superintendência:
                                <br>
                                Ramal 6
                            </span>
                            <p class="fs-6">samuel@abcjpega.org.br</p>
                            <div class="risco-setores"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-6 text-center mx-auto mx-md-0 border-bottom">
                            <span class="fs-5">
                                Ramal 7
                            </span>
                            <p class="fs-6">gestor@abcjpega.org.br</p>
                            <div class="risco-setores"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-6 text-center mx-auto mx-md-0  border-bottom">
                            <span class="fs-5">Telefones:
                            </span>
                            <p class="mb-0 fs-6">(31) 3372-1223</p>
                            <p class="fs-6">(31) 3313-6798</p>
                        </div>
                    </div>
                    <div class="col-6 border-bottom mx-auto mx-md-0  text-center">
                        <p class="fs-6">
                            Associação Brasileira dos Criadores de Jumento Pêga - Av. Amazonas, 6020, Belo Horizonte/MG -
                            Parque
                            de Exposições Bolívar de Andrade, CEP: 30.510-000
                        </p>
                        <div class="risco-setores"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-8 ">
                <h3 class="text-center mb-3">Formulário de contato</h3>
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label fs-6">Nome</label>
                            <input type="text" class="form-control form-cinza" id="name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label fs-6">E-mail</label>
                            <input type="text" class="form-control form-cinza" id="email">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="telefone" class="form-label fs-6">Telefone</label>
                            <input type="text" class="form-control form-cinza" id="telefone">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="assunto" class="form-label fs-6">Assunto</label>
                            <input type="text" class="form-control form-cinza" id="assunto">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="setor" class="form-label fs-6">Setor</label>
                            <select name="setor" class="form-select form-cinza" id="setor">
                                <option value="">Secretaria</option>
                                <option value="">Financeiro</option>
                                <option value="">Superintendência</option>
                                <option value="">Gestor</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="anexar" class="form-label fs-6">Anexar Arquivo</label>
                            <input type="file" class="form-control form-cinza" name="" id="anexar">
                        </div>
                        <div class=" mb-3">
                            <label for="msg" class="form-label fs-6">Mensagem</label>
                            <textarea class="form-control form-cinza" name="" id="msg" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-custom rounded-pill px-4">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
