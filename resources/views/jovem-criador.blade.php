@extends('layouts.main')

@section('title', 'ABCJPêga | Jovem criador')

@section('content')
    <div class="container mb-3">
        <div class="text-center my-5">
            <h1 class="fs-1 ">Sobre a raça Pêga</h1>
        </div>
        <div class="separator my-5"><img src="{{ asset('assets/img/burrinho.png') }}" alt=""></div>
    </div>
    <div class="container">
        <h2 class="text-center text-custom my-4 fs-2">Conheça a Raça</h2>
        <img src="{{ asset('assets/img/jovem-pega.png') }}" class="img-fluid pega" alt="">
        <p class="fs-6 ">
            O Jumento Pega é uma raça de asininos Brasileira, e foi desenvolvida e aperfeiçoada no
            ano de 1810 em
            Lagoa dourada-MG e hoje está difundida por todo território nacional.
        </p>
        <p class="fs-6 ">
            Os animais da raça Pêga são estritamente marchadores e possuem um grande valor na produção de
            híbridos (muares), com o cruzamento em éguas de diversas raças, gerando produtos com capacidade para
            trabalhos diversos.
        </p>
        <p class="fs-6 ">
            Os asininos e os muares são animais que possuem resistência, agilidade, rusticidade, vivacidade,
            disposição e facilidade de manejo e doma.
        </p>
        <h5 class="text-center fs-4">
            Conheça as principais características da raça Pêga:
        </h5>
        <p class="fs-6 mb-0">
            Pelagens ruças, tordilhas, e pelos-de-rato claros, com cascos, pele e mucosas escuras. A sinalização
            branca em pela escura é favorável.
        </p>
        <p class="fs-6 mb-0">
            A faixa crucial e a listra de burro devem estar presentes. Ausência de outras faixas ou listras
            escuras no corpo, cabeça, orelhas e pernas.
        </p>
        <p class="fs-6 mb-0">
            Pele fina, com pelos finos e curtos. Este tipo de pele e pelos, vai dissipar e refletir melhor o
            calor, além do efeito somatório da cor clara.
        </p>
        <p class="fs-6 mb-0">
            Crina e vassoura da calda com pelos pouco abundantes.
        </p>
        <p class="fs-6 mb-0">
            Orelhas de lebre, de tamanho médio, lanceoladas, paralelas, olhando para cima e para frente.
        </p>
        <p class="fs-6 mb-0">
            Olhos pequenos, vivos, orifício orbital largo, com a pele supraorbitária rugosa e não proeminente.
        </p>
        <p class="fs-6 mb-0">
            Ganacha não proeminente. Cabeça seca, leve, com contornos ósseos suaves e proporcionais ao pescoço;
            lábios finos e firmes.
        </p>
        <p class="fs-6 mb-0">
            Cabeça fina, seca com a fronte plana, contornos ósseos suaves, de perfil convexilíneo, alongada e de
            tamanho proporcional ao pescoço. Quando vista de perfil de forma trapezoidal e despontada para o
            focinho.
        </p>
        <p class="fs-6 mb-0">
            Pescoço fino, musculado e comprido. Associado a uma cabeça leve, vai proporcionar ao asinino melhor
            flexionamento, mobilidade e posionamento, próprios de um animal de sela.
        </p>
        <p class="fs-6 mb-0">
            Animal longilíneo, isto é, com a medida dorso-lombar maior do que a altura ao nível da cernelha,
            assim compensando uma menor flexibilidade da coluna lombar.
        </p>

        <p class="fs-6 mb-0">
            Membros com ossatura forte e fina, cascos pequenos, espáduas médias a longas e inclinadas, quartelas
            médias e inclinadas e garupa inclinada, e ligeiramente descarnada. Esses caracteres vão dar maior
            mobilidade e flexibilidade ao animal, tornando-o mais esperto e de andar macio
        </p>
        <p class="fs-6 mb-0">
            Porte médio, com altuta mínima estabelecida pelo padrão racial de 1,25 m para os jumentos machos
            adultos e 1,20 m paras as jumentas fêmeas adultas.
        </p>
        <p class="fs-6 mb-0">
            Dorso lombar comprido, corpo relativamente delgado, tórax amplo e profundo, com membros e
            articulações fortes, finas, secas e devidamente inclinadas.
        </p>
    </div>
    <div class="bg-custom my-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fs-2 fw-normal">Quem me orienta e como comprar?</h2>
            </div>
            <div class="row">
                <div class="col-md-5 order-md-0 order-1 mb-3">
                    <div class="d-flex justify-content-center align-items-center h-100 p-3  ">
                        <div>
                            <div class="border-bottom mb-5 pb-3">
                                <h5 class="fs-4 text-center">Consulte a lista de Técnicos de registro</h5>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('servicos/tecnicos') }}" class="btn btn-outline-light p-3">Relação de
                                    Técnicos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="">
                        <h5 class="text-center fs-3">Quem me Orienta?</h5>
                        <p class="fs-6">
                            Os técnicos credenciados à Associação Brasileira de Criadores de Jumento Pêga (ABCJPêga) são
                            profissionais autônomos das áreas de Zootecnia, Medicina Veterinária e Engenharia Agronômica,
                            igualmente habilitados a assessorar o criador desde o momento da seleção, compra de seus
                            exemplares, passando pelo manejo, reprodução e treinamento dos mesmos.
                        </p>
                        <p class="fs-6">
                            Eles são indispensáveis nos processos cartoriais como resenhas de jumentos e muares, confirmação
                            de
                            fêmeas, controle de plantel, etc. Atualmente são 31 os habilitados a prestar esse serviço. Os
                            técnicos deslocam-se permanentemente por todo o território nacional, a fim de atender a todos os
                            criadores.
                        </p>
                        <p class="fs-6">
                            Confira na aba: “serviços” – “relação de técnicos” o contato dos profissionais que podem ser
                            acionados diretamente, de acordo com a preferência do criador, sempre que se fizer necessário o
                            serviço técnico.
                        </p>
                        <h5 class="text-center fs-3">Como comprar?</h5>
                        <p class="fs-5 text-center"> Através de Leilões:</p>
                        <p class="fs-6">
                            Na sua grande maioria a comercialização do jumento Pêga e muares se dá através de leilões, quase
                            sempre com a transmissão via canais especializados de TV e/ou internet. Entretanto, antes de
                            ofertar
                            lances em um remate, é indicado aos novos interessados em adquirir um animal da raça que
                            primeiro
                            busquem o assessoramento de um dos membros do corpo técnico da ABCJPêga, para assegurar-se de
                            que
                            farão um bom negócio.
                        </p>
                        <p class="fs-6">
                            Para dar inicio à criação, o primeiro passo é saber a sua intenção e pretensão de uso deste
                            animal.
                            Nesta decisão, sugere-se também o diálogo com criadores e profissionais com conhecimento do meio
                            e
                            do mercado. É importante também certificar-se de que a documentação referente ao exemplar
                            pretendido
                            está regularizada junto à ABCJPêga.
                        </p>
                        <p class="fs-6">
                            De posse dessas garantias, o interessado estará apto a se cadastrar nas empresas leiloeiras e
                            participar dos leilões.
                        </p>
                        <p class="fs-5 text-center"> Direto com o criador:</p>
                        <p class="fs-6">
                            Outra possibilidade, também bastante usual dentro da raça Pêga, é fazer contato com o criador
                            mais
                            próximo de sua propriedade, marcar uma visita para conhecer os animais e tentar negociar a venda
                            direta com o selecionador. Acesse “Encontre Criatórios” em nosso site e conheça os principais
                            criatórios com animais disponíveis no mercado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center my-5">
            <h2 class="fs-2">Custos de Registro</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto my-5">
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapseOne">
                            Registro de Asininos Livro Fechado
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse ">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">Quanto custa para registrar FÊMEA em LIVRO FECHADO?</h3>
                                <ul>
                                    <li>Registro Definitivo: R$ 150,00</li>
                                    <li>Taxa de visita para registro definitivo: R$ 250,00 mais quilometragem.</li>
                                </ul>
                                <h3 class="fs-6">Quanto custa para registrar MACHO em LIVRO FECHADO?</h3>
                                <ul>
                                    <li>
                                        Registro Definitivo: R$ 250,00
                                    </li>
                                    <li>
                                        Taxa de visita para registro definitivo: R$ 250,00 mais quilometragem
                                    </li>
                                </ul>
                                <p class="text-danger">*Preço para Sócios</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapseTwo">
                            Registro de Asininos Livro Aberto
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">Quanto custa para registrar FÊMEA em LIVRO ABERTO?</h3>
                                <ul>
                                    <li>Registro Definitivo: R$ 3.000,00</li>
                                    <li>Taxa de visita para registro definitivo: R$ 250,00 mais 40% do valor do combustível
                                        por km rodado.</li>
                                </ul>
                                <h3 class="fs-6">Quanto custa para registrar MACHO em LIVRO ABERTO?</h3>
                                <ul>
                                    <li>
                                        Registro Definitivo: R$ 5.000,00
                                    </li>
                                    <li>
                                        Taxa de visita para registro definitivo: R$ 250,00 mais 40% do valor do combustível
                                        por km rodado
                                    </li>
                                </ul>
                                <p class="text-danger">*Preço para Sócios</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapse3">
                            Registro de Asininos em Livro Fechado, quando não houve comunicação de cobrição e/ou nascimento
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapse3" class="accordion-body collapse">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">Quanto custa para registrar ASININO em LIVRO FECHADO, quando não foi
                                    comunicada a cobrição e/ou nascimento dentro do prazo?
                                </h3>
                                <ul>
                                    <li>
                                        Multa Cobrição: R$ 40,00
                                    </li>
                                    <li>
                                        Multa Nascimento: R$ 40,00
                                    </li>
                                    <li>
                                        Taxa de visita do técnico para coletar material de DNA: R$ 250,00 mais 40% do valor
                                        do combustível por km rodado
                                    </li>
                                    <li>
                                        Lançamento do DNA-VP: R$ 40,00
                                    </li>
                                    <li>
                                        Registro Provisório Asinino: R$ 60,00
                                    </li>
                                    <li>
                                        Taxa de visita do técnico para proceder o registro definitivo: R$ 250,00 mais 40% do
                                        valor do combustível por km rodado
                                    </li>
                                    <li>
                                        Registro Definitivo Fêmea: R$ 150,00
                                    </li>
                                    <li>
                                        Registro Definitivo Macho: R$ 250,00
                                    </li>
                                </ul>
                                <p class="text-danger">Preços para Sócios</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapse4">
                            Registro de Muares COD ou POC
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapse4" class="accordion-body collapse">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">
                                    Quanto custa para registrar MUAR em COD – Controle de Origem Desconhecida?
                                </h3>
                                <ul>
                                    <li>
                                        Registro muar COD: R$ 80,00 (sócios contribuintes)
                                    </li>
                                    <li>
                                        Registro muar COD: R$ 160,00 (sócios usuários)
                                    </li>
                                </ul>
                                <h3 class="fs-6">
                                    Quanto custa para registrar MUAR em POC – Puro de Origem Conhecida?
                                </h3>
                                <ul>
                                    <li>
                                        Comunicação de Cobrição: R$ 0,00 (apenas sócios contribuintes)
                                    </li>
                                    <li>
                                        Comunicação de Nascimento: R$ 0,00 (apenas sócios contribuintes)
                                    </li>
                                    <li>
                                        Registro muar POC: R$ 50,00
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapse5">
                            Registro de Muares quando não houve comunicação de cobrição e nascimento
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapse5" class="accordion-body collapse">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">
                                    Quanto custa para registrar meu MUAR em POC – Puro de Origem Conhecida, quando as
                                    comunicações de cobrição e nascimento foram feitas FORA do prazo?
                                </h3>
                                <ul>
                                    <li>
                                        Multa Cobrição: R$ 40,00
                                    </li>
                                    <li>
                                        Multa Nascimento: R$ 40,00
                                    </li>
                                    <li>
                                        Taxa de visita do técnico para coletar material de DNA: R$ 250,00 mais 40% do valor
                                        do combustível por km rodado
                                    </li>
                                    <li>
                                        Lançamento do DNA-VP: R$ 40,00
                                    </li>
                                    <li>
                                        Taxa de visita do técnico para proceder o registro POC: R$ 250,00 mais 40% do valor
                                        do combustível por km rodado
                                    </li>
                                    <li>
                                        Registro Muar POC ao pé: R$50,00
                                    </li>
                                </ul>
                                <p class="text-danger">*Preços para Sócios</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header fs-6" data-toggle="collapse" data-target="#collapse6">
                            Visita do Técnico de Registro credenciado da Pêga
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collapse6" class="accordion-body collapse">
                            <div class="accordion-content text-start fs-6">
                                <h3 class="fs-6">Quanto custa a visita do técnico de registros no meu criatório?</h3>
                                <ul>
                                    <li>
                                        Taxa de visita: R$ 250,00 (sócios) ou R$ 500,00 (não sócios)
                                    </li>
                                    <li>
                                        Quilometragem: 40% do valor do combustível por km rodado
                                    </li>
                                </ul>
                                <h3 class="fs-6">Quanto custa a visita do técnico de registros em parque de exposições
                                    (até 5 animais por criador) ?</h3>
                                <ul>
                                    <li>
                                        Taxa de visita: R$ 250,00 (sócios)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.accordion-header').click(function() {
                $(this).toggleClass('collapsed');
                $(this).find('.fas').toggleClass('fa-plus fa-minus');
                $(this).next('.accordion-body').slideToggle();
            });
        });
    </script>
@endsection
