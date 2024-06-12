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
                    <input type="text" name="" id="" placeholder="Pesquisar Sala">
                </div>
            </div>

            <div class="apenas-verificado">
                <span>Apenas Contas verificadas</span>
                <input type="checkbox" name="" id="">
            </div>

            <div class="create-lobby">
                <i class="fa fa-calendar-plus"></i>
                <span>criar novo lobby</span>
            </div>
        </div>

        <div class="lobbys">

            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
            </div>
            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
            </div>
            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
            </div>
            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
            </div>
            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
            </div>
            <div class="card-lobby">

                <div class="card-lobby-header">
                    <div class="card-lobby-media-elo silver">
                        <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                    </div>
                    <div class="card-lobby-nome">Time Matuto</div>

                </div>

                <div class="card-lobby-players">
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo bronze">
                            <img src="./assets/elos-images/Bronze_1_Rank.png" alt="">
                        </div>
                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo silver">
                            <img src="./assets/elos-images/Silver_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo gold">
                            <img src="./assets/elos-images/Gold_1_Rank.png" alt="">
                        </div>

                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo platinum">
                            <img src="./assets/elos-images/Platinum_1_Rank.png" alt="">
                        </div>


                    </div>
                    <div class="card-lobby-players-player">
                        <div class="perfil">
                            <img src="./assets/perfil-teste.jpg" alt="">
                        </div>
                        <div class="elo diamond">
                            <img src="./assets/elos-images/Diamond_1_Rank.png" alt="">
                        </div>

                    </div>
                </div>
                <button class="card-lobby-button"><span><i class="fa-solid fa-arrow-right"></i>Entrar</span></button>
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
