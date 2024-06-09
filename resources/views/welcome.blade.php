@extends('layout.layout')

@section('title', 'Inicio')


@section('head-content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @include('./components/navbar')

    <section class="container">


        <div class="filtros">
            <div class="dropdown select-elo">
                <div class="dropdown-header">
                    <i class="fa-solid fa-chevron-down"></i>
                    <span>Selecione um Elo</span>
                </div>
                <div class="dropdown-body">
                    <div class="dropdown-body-option">Ferro</div>
                    <div class="dropdown-body-option">Bronze</div>
                    <div class="dropdown-body-option">Prata</div>
                    <div class="dropdown-body-option">Ouro</div>
                    <div class="dropdown-body-option">Platina</div>
                    <div class="dropdown-body-option">Diamante</div>
                    <div class="dropdown-body-option">Ascendente</div>
                    <div class="dropdown-body-option">Imortal</div>
                    <div class="dropdown-body-option">Radiante</div>
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

    <script>

        const createListeners = () => {

            const dropdownHeader = document.querySelector('.dropdown-header');

            dropdownHeader.addEventListener('click', (e) => {

                dropdownActions.controller(e.target);

            })

            const buttonOpenModalCadastro = document.querySelector('#button-criar-conta');
            buttonOpenModalCadastro.addEventListener('click', (e) => {

                $('#modalLogin').modal('hide');

                $('#modalCadastro').modal('show');

            })

            const buttonOpenModalLogin = document.querySelector('#button-entrar-conta');

            buttonOpenModalLogin.addEventListener('click', (e) => {

                $('#modalLogin').modal('show');
                $('#modalCadastro').modal('hide');


            })


            const eyeButtons = document.querySelectorAll('.fa-eye-slash');

            if (eyeButtons != null) {

                eyeButtons.forEach(eye => {

                    eye.addEventListener('click', (e) => {

                        formActions.showPasswords(e.target);

                    })

                })

            }

        }

        const dropdownActions = {

            controller(dropdownClick){

                let dropdownBody = document.querySelector('.dropdown-body');

                if(dropdownBody.classList.contains('active')){
                    dropdownBody.classList.remove('active');
                }

                else {
                    dropdownBody.classList.add('active');

                }

            }

        }


        const formActions = {


            changesInput(){


            },

            showPasswords(eye){

                let parentDiv = eye.parentNode.parentNode;

                let input = parentDiv.querySelector('input');

                console.log(input);
                console.log(eye);

                if(eye.classList.contains('fa-eye')){

                    eye.classList.remove('fa-eye');

                    eye.classList.add('fa-eye-slash');

                }
                else if(eye.classList.contains('fa-eye-slash')){

                    eye.classList.remove('fa-eye-slash');
                    eye.classList.add('fa-eye');


                }

                if(input.type == 'password'){

                    input.type = 'text';

                } else{

                    input.type = 'password';

                }

            }




        }


        createListeners();
    </script>

@endsection
