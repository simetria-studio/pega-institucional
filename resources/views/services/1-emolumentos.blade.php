@extends('layouts.main')

@section('title', 'ABCJPêga | Emolumentos')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="default-title">Tabela de Emolumentos</h1>
            </div>
            <div class="separator col-12 mb-5"><img src="{{ asset('assets/img/burrinho.png') }}" class="img-fluid"
                    alt=""></div>
            <div class="col-12 mb-5">
                <h5 class="text-center">Tabela de emolumentos cartoriais</h5>
            </div>
            <div class="col-10 row mx-auto mb-5 table-responsive  ">
                <table class="table table-striped table-secondary   rounded">
                    <thead>
                        <tr>
                            <th scope="col" class="fs-4">Emolumentos</th>
                            <th scope="col" class="fs-4">Sócios</th>
                            <th scope="col" class="fs-4">Não Sócios</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="fs-6">CERTIDÕES DO SERVIÇO DO REGISTRO GENEALÓGICO</td>
                            <td class="fs-6">50.00</td>
                            <td class="fs-6">-</td>
                        </tr>
                        <tr>
                            <td class="fs-6">IMPRESSOS</td>
                            <td class="fs-6">50.00</td>
                            <td class="fs-6">-</td>
                        </tr>
                        <tr>
                            <td class="fs-6">RETIFICAÇÃO DE RESENHA</td>
                            <td class="fs-6">40.00</td>
                            <td class="fs-6">80.00</td>
                        </tr>
                        <tr>
                            <td class="fs-6">SEGUNDA VIA DE REGISTRO DEFINITIVO E PROVISÓRIO </td>
                            <td class="fs-6">50.00</td>
                            <td class="fs-6">100.00</td>
                        </tr>
                        <tr>
                            <td class="fs-6">ALTERAÇÃO OU TRANSFERÊNCIA DE AFIXO </td>
                            <td class="fs-6">150.00</td>
                            <td class="fs-6">300.00</td>
                        </tr>
                        <tr>
                            <td class="fs-6">CHIP</td>
                            <td class="fs-6">20.00</td>
                            <td class="fs-6">40.00</td>
                        </tr>
                        <tr>
                            <td class="fs-6">MULTA POR ATRASO DE ENTREGA DE DOCUMENTOS</td>
                            <td class="fs-6">40.00</td>
                            <td class="fs-6">80.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="bg-custom mb-5">
        <div class="container">
            <div class="mb-5">
                <h1 class="default-title text-center">Tabela De Emolumentos Em PDF</h1>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{ asset('#') }}"  class="btn btn-transparent">Download</a>
            </div>
        </div>
    </div>
@endsection
