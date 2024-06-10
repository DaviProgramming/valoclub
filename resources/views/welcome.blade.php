@extends('layout.layout')

@section('title', 'Inicio')


@section('head-content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        const createListeners = () => {

            const buttonCriaConta = document.querySelector('.btn-criar-conta');

            if (buttonCriaConta != null) {

                buttonCriaConta.addEventListener('click', (e) => {

                    formActions.clickButtonCriarConta(e.target);

                })

            }

            const dropdownHeader = document.querySelectorAll('.dropdown-header');

            dropdownHeader.forEach(dropdown => {

                dropdown.addEventListener('click', (e) => {

                    dropdownActions.controller(e.target);

                })

            })


            const dropdownOptions = document.querySelectorAll('.dropdown-body-option');

            dropdownOptions.forEach(option => {

                option.addEventListener('click', (e) => {

                    dropdownActions.optionClicked(e.target);

                })


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

            const inputsFromForms = document.querySelectorAll('.modal input');

            if (inputsFromForms != null) {

                inputsFromForms.forEach(input => {

                    formActions.changesInput(input);

                })

            }

        }

        const dropdownActions = {

            optionClicked(option) {

                let dropdownContainer = option.parentNode.parentNode;
                let dropdownBody = dropdownContainer.querySelector('.dropdown-body');
                let spanMostraElo = dropdownContainer.querySelector('.dropdown-header span');

                spanMostraElo.innerHTML = option.innerHTML;
                spanMostraElo.dataset.eloIdSelected = option.dataset.eloId;


                if (dropdownBody.classList.contains('active')) {

                    dropdownBody.classList.remove('active');

                }



            },

            controller(dropdownClick) {


                let divFather = null;

                if (dropdownClick.classList.contains('dropdown-header')) {

                    divFather = dropdownClick.parentNode;

                } else {

                    divFather = dropdownClick.parentNode.parentNode;

                }



                let dropdownBody = divFather.querySelector('.dropdown-body');

                if (dropdownBody.classList.contains('active')) {
                    dropdownBody.classList.remove('active');
                } else {
                    dropdownBody.classList.add('active');

                }

            }

        }


        const validations = {


            validarEmail(email) {

                let re = /\S+@\S+\.\S+/;
                return re.test(email);

            },

            validaNome(nome) {

                let regex = /^[a-zA-ZÀ-ÿ\s']+$/;

                return regex.test(nome);
            },


            validaSenha(senha) {

                if (senha.length < 8) {
                    return "A senha deve ter no mínimo 8 caracteres.";
                }

                var regexCaracteresEspeciais = /[!@#$%^&*(),.?":{}|<>]/;
                if (!regexCaracteresEspeciais.test(senha)) {
                    return "A senha deve conter pelo menos um caractere especial.";
                }

                var regexLetrasMaiusculas = /[A-Z]/;
                var regexLetrasMinusculas = /[a-z]/;
                if (!regexLetrasMaiusculas.test(senha) || !regexLetrasMinusculas.test(senha)) {
                    return "A senha deve conter pelo menos uma letra maiúscula e uma letra minúscula.";
                }

                var regexNumeros = /[0-9]/;
                if (!regexNumeros.test(senha)) {
                    return "A senha deve conter pelo menos um número.";
                }


                return true;

            },

            confirmaSenha(input1, input2) {


                if (input1.value == input2.value && input2.value) {

                    return true;

                } else {

                    return false;

                }

            }

        }

        const formActions = {

            limpaModal(modal) {

                let inputs = modal.querySelectorAll('input');

                inputs.forEach(function(input) {
                    input.value = '';
                });

            },

            clickButtonCriarConta(button) {

                let divPai = button.parentNode.parentNode;

                let modalBodyContent = divPai.querySelector('.modal-body-container');

                let nickNameInput = modalBodyContent.querySelector('input[name="nickName-singup"]');
                console.log(nickNameInput);
                let spanNickNameError = modalBodyContent.querySelector('span#span-nickName-cadastro-error');

                let emailInput = modalBodyContent.querySelector('input[name="email-singup"]');
                let spanEmailError = modalBodyContent.querySelector('span#span-email-cadastro-error');

                let senhaInput = modalBodyContent.querySelector('input[name="password-singup"]');
                let spanSenhaError = modalBodyContent.querySelector('span#span-senha-cadastro-error');

                let confirmaSenhaInput = modalBodyContent.querySelector('input[name="confirm-password-singup"]');
                let spanConfirmaSenhaError = modalBodyContent.querySelector('span#span-confirma-senha-cadastro-error');

                let imagemInput = modalBodyContent.querySelector('#formFileSm')

                let eloSelected = modalBodyContent.querySelector('.dropdown-header span').dataset.eloIdSelected;


                let errosContados = 0;

                if (!validations.validaNome(nickNameInput.value)) {

                    if (spanNickNameError.classList.contains('hide-content')) {

                        spanNickNameError.classList.remove('hide-content');
                    }

                    let containerInput = nickNameInput.parentNode;


                    if (!containerInput.classList.contains('error')) {
                        containerInput.classList.add('error')
                    }

                    errosContados++;

                } else {


                    if (!spanNickNameError.classList.contains('hide-content')) {
                        spanNickNameError.classList.add('hide-content');
                    }

                    let containerInput = spanNickNameError.parentNode;

                    if (containerInput.classList.contains('error')) {
                        containerInput.classList.remove('error')
                    }


                }


                if (!validations.validarEmail(emailInput.value)) {


                    if (spanEmailError.classList.contains('hide-content')) {

                        spanEmailError.classList.remove('hide-content');
                    }

                    let containerInput = emailInput.parentNode;

                    if (!containerInput.classList.contains('error')) {
                        containerInput.classList.add('error')
                    }

                    errosContados++;

                } else {


                    if (!spanEmailError.classList.contains('hide-content')) {
                        spanEmailError.classList.add('hide-content');
                    }

                    let containerInput = emailInput.parentNode;

                    if (containerInput.classList.contains('error')) {
                        containerInput.classList.remove('error')
                    }


                }


                if (validations.validaSenha(senhaInput.value) != true) {

                    if (spanSenhaError.classList.contains('hide-content')) {
                        spanSenhaError.classList.remove('hide-content');
                    }

                    let containerInput = senhaInput.parentNode;

                    if (!containerInput.classList.contains('error')) {
                        containerInput.classList.add('error')
                    }

                    spanSenhaError.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> ' + validations
                        .validaSenha(senhaInput.value);

                    errosContados++;

                } else {

                    if (!spanSenhaError.classList.contains('hide-content')) {
                        spanSenhaError.classList.add('hide-content');
                    }

                    let containerInput = senhaInput.parentNode;

                    if (containerInput.classList.contains('error')) {
                        containerInput.classList.remove('error')
                    }

                }


                if (confirmaSenhaInput.value != null && confirmaSenhaInput.value != '') {

                    if (validations.confirmaSenha(senhaInput, confirmaSenhaInput)) {

                        if (!spanConfirmaSenhaError.classList.contains('hide-content')) {

                            spanConfirmaSenhaError.classList.add('hide-content');

                        }

                        let containerInput = confirmaSenhaInput.parentNode;


                        if (containerInput.classList.contains('error')) {

                            containerInput.classList.remove('error');

                        }


                    } else {

                        if (spanConfirmaSenhaError.classList.contains('hide-content')) {

                            spanConfirmaSenhaError.classList.remove('hide-content');

                        }

                        let containerInput = confirmaSenhaInput.parentNode;

                        if (!containerInput.classList.contains('error')) {

                            containerInput.classList.add('error');

                        }

                        errosContados++;

                    }


                }

                if (errosContados == 0) {

                    let imagem = $('#formFileSm')[0].files[0];

                    let formData = new FormData();

                    formData.append('imagem', imagem);
                    formData.append('email', emailInput.value);
                    formData.append('senha', senhaInput.value);
                    formData.append('elo_id', eloSelected);
                    formData.append('nickName', nickNameInput.value);

                    let componentsComLoading = divPai.querySelector('.loading-component');
                    let loading = componentsComLoading.querySelector('.loader');
                    let successComponent = componentsComLoading.querySelector('.success-icon');

                    if (componentsComLoading.classList.contains('hide-content')) {

                        componentsComLoading.classList.remove('hide-content');

                        if (loading.classList.contains('hide-content')) {

                            loading.classList.remove('hide-content');

                        }

                    }


                    $.ajax({
                        url: '/evento/cadastro',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            if (response.success) {

                                if (!loading.classList.contains('hide-content')) {

                                    loading.classList.add('hide-content');

                                }

                                if (successComponent.classList.contains('hide-content')) {

                                    successComponent.classList.remove('hide-content');

                                }

                                setTimeout(() => {

                                    if (!componentsComLoading.classList.contains('hide-content')) {

                                        componentsComLoading.classList.add('hide-content')

                                    }

                                    window.location.reload();


                                }, 2000);



                            }
                        },
                        error: function(xhr, status, error) {}
                    });

                }






            },

            changesInput(input) {

                input.addEventListener('click', (e) => {

                    let inputClicado = e.target;

                    let span = inputClicado.parentNode.querySelector('span');


                    if (input.value.length <= 0) {

                        if (span.classList.contains('hide-content')) {

                            span.classList.remove('hide-content');

                        }

                    } else {


                        if (!span.classList.contains('hide-content')) {

                            span.classList.add('hide-content');

                        }

                    }



                })

                input.addEventListener('keyup', (e) => {

                    let inputClicado = e.target;


                    let span = inputClicado.parentNode.querySelector('span');

                    if (inputClicado.value.length <= 0) {

                        if (span.classList.contains('hide-content')) {

                            span.classList.remove('hide-content');

                        }

                    } else {

                        if (!span.classList.contains('hide-content')) {

                            span.classList.add('hide-content');

                        }

                    }

                })

                input.addEventListener('blur', (e) => {

                    let inputClicado = e.target;

                    let span = inputClicado.parentNode.querySelector('span');

                    if (inputClicado.value.length < 1) {

                        if (span.classList.contains('hide-content')) {

                            span.classList.remove('hide-content');

                        }

                    }

                })



            },

            showPasswords(eye) {

                let parentDiv = eye.parentNode.parentNode;

                let input = parentDiv.querySelector('input');

                if (eye.classList.contains('fa-eye')) {

                    eye.classList.remove('fa-eye');

                    eye.classList.add('fa-eye-slash');

                } else if (eye.classList.contains('fa-eye-slash')) {

                    eye.classList.remove('fa-eye-slash');
                    eye.classList.add('fa-eye');


                }

                if (input.type == 'password') {

                    input.type = 'text';

                } else {

                    input.type = 'password';

                }

            }




        }


        createListeners();
    </script>

@endsection
