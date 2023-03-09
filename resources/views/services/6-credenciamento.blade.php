@extends('layouts.main')

@section('title', 'ABCJPêga | Credenciamento')

@section('content')
    <div class="container my-5">
        <div class="mb-5">
            <h1 class="default-title">Gostaria De Se Tornar Um Profissional Credenciado ABCJPEGA?</h1>
        </div>
        <div class="row justify-content-center align-items-center  g-2">
            <div class="col-md-6">
                <div class="col-10 mx-auto credenciamento-info">
                    <p class="fs-6">
                        Se você gostaria de ser Médico Veterinário, Técnico de Registro ou Árbitro credenciado da ABCJPêga,
                        preencha o formulário e nos envie os documentos em anexo:
                    </p>
                    <p class="fs-6">
                        Currículo Atualizado
                        CRMV
                        Comprovante de Endereço
                        Se você é estudante de Zootecnia, Medicina Veterinária ou Agronomia também pode nos enviar seu
                        currículo.
                    </p>
                    <p class="fs-6">
                        Todos formulários serão arquivados e os candidatos serão convidados quando houver cursos para
                        formação
                        de técnicos e Árbitros ou quando houver vagas de estágio.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-10 mx-auto">
                    <form>
                        <div class="row ">
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label  fs-6">Nome Completo</label>
                                <input type="text" class="form-control form-cinza" id="name" name="name">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="email" class="form-label fs-6">Email</label>
                                <input type="email" class="form-control form-cinza" id="email" name="email">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="phone" class="form-label fs-6">Telefone</label>
                                <input type="text" class="form-control form-cinza" id="phone" name="phone">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="file" class="form-label  fs-6">Anexar Arquivo</label>
                                <input class="form-control form-cinza " type="file" id="file" name="file">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="message" class="form-label fs-6">Mensagem</label>
                                <textarea class="form-control form-cinza" id="message" name="message" rows="3"></textarea>
                            </div>

                            <div class="mb-3 col-12">
                                <button type="submit" class="btn btn-custom rounded-pill">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
