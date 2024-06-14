@extends('layout.layout')

@section('title', 'Inicio')


@section('head-content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js', 'resources/scss/main.scss', 'resources/js/homeScripts.js'])

@endsection

@section('content')

    @include('./components/navbar')
    @include('./components/aside')

    <section class="container">


        <div class="filtros">
            <div class="dropdown select-elo">
                <div class="dropdown-header">
                    <i class="fa-solid fa-chevron-down"></i>
                    <span>Selecione um Elo</span>
                </div>
                <div class="dropdown-body">
                    <div class="dropdown-body-option" data-elo-id="1">Ferro</div>
                    <div class="dropdown-body-option" data-elo-id="2">Bronze</div>
                    <div class="dropdown-body-option" data-elo-id="3">Prata</div>
                    <div class="dropdown-body-option" data-elo-id="4">Ouro</div>
                    <div class="dropdown-body-option" data-elo-id="5">Platina</div>
                    <div class="dropdown-body-option" data-elo-id="6">Diamante</div>
                    <div class="dropdown-body-option" data-elo-id="7">Ascendente</div>
                    <div class="dropdown-body-option" data-elo-id="8">Imortal</div>
                    <div class="dropdown-body-option" data-elo-id="9">Radiante</div>
                </div>
            </div>
            <div class="search-name">
                <div class="input-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="" id="" placeholder="Pesquisar Jogador">
                </div>
            </div>

            <div class="apenas-verificado">
                <span>Apenas Contas verificadas</span>
                <input type="checkbox" name="" id="">
            </div>

            <div class="create-lobby">
                <i class="fa fa-calendar-plus"></i>
                <span>criar solicitação</span>
            </div>
        </div>

        <div class="lobbys">

            <div class="lobbys-container">

                <div class="card-lobby">

                    <div class="card-lobby-header">
                        <div class="card-lobby-media-elo">
                            <img src="./assets/elos-images/Radiant_Rank.png" alt="">
                        </div>
                        <div class="card-lobby-nome">Matuto</div>

                    </div>

                    <img class="main-character" src="assets/agents-images/jett.png" alt="">


                    <div class="card-lobby-body">
                        <div class="card-lobby-body-title">Funções</div>
                        <div class="card-lobby-body-roles">
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/duelista.png" alt="duelista">
                                <span>Duelista</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/iniciador.png" alt="iniciador">
                                <span>Iniciador</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/Controlador.png" alt="controlador">
                                <span>Controlador</span>
                            </div>
                        </div>
                    </div>



                    <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Solicitar</span></button>
                </div>
                <div class="card-lobby">

                    <div class="card-lobby-header">
                        <div class="card-lobby-media-elo">
                            <img src="./assets/elos-images/Radiant_Rank.png" alt="">
                        </div>
                        <div class="card-lobby-nome">Matuto</div>

                    </div>

                    <img class="main-character" src="assets/agents-images/jett.png" alt="">


                    <div class="card-lobby-body">
                        <div class="card-lobby-body-title">Funções</div>
                        <div class="card-lobby-body-roles">
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/duelista.png" alt="duelista">
                                <span>Duelista</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/iniciador.png" alt="iniciador">
                                <span>Iniciador</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/Controlador.png" alt="controlador">
                                <span>Controlador</span>
                            </div>
                        </div>
                    </div>



                    <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Solicitar</span></button>
                </div>
                <div class="card-lobby">

                    <div class="card-lobby-header">
                        <div class="card-lobby-media-elo">
                            <img src="./assets/elos-images/Radiant_Rank.png" alt="">
                        </div>
                        <div class="card-lobby-nome">Matuto</div>

                    </div>

                    <img class="main-character" src="assets/agents-images/jett.png" alt="">


                    <div class="card-lobby-body">
                        <div class="card-lobby-body-title">Funções</div>
                        <div class="card-lobby-body-roles">
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/duelista.png" alt="duelista">
                                <span>Duelista</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/iniciador.png" alt="iniciador">
                                <span>Iniciador</span>
                            </div>
                            <div class="card-lobby-body-roles-role">
                                <img src="assets/roles-images/Controlador.png" alt="controlador">
                                <span>Controlador</span>
                            </div>
                        </div>
                    </div>



                    <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Solicitar</span></button>
                </div>




            </div>






        </div>


    </section>


    @include('components/modal-login')
    @include('components/modal-cadastro')

    <footer>
        <div class="copyrights">
            <div class="name">© 2024 David Oliveira. Todos os direitos reservados.</div>
        </div>
        <div class="social-medias"></div>
    </footer>


@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
