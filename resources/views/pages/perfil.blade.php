@extends('./layout.layout')

@section('title', 'Perfil')

@section('head-content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js', 'resources/scss/main.scss', 'resources/js/perfilScript.js'])

@endsection


@section('content')

@include('./components/navbar')
@include('./components/aside')

<section class="container perfil">


    <div class="aside-perfil">
        <div class="aside-perfil-item active">
            <i class="fa-solid fa-pen-to-square"></i>
            <span>Editar Perfil</span>
        </div>
        <div class="aside-perfil-item">
            <i class="fa fa-bell icon-notification" ></i>
            <span>Notificações</span>
        </div>
        <div class="aside-perfil-item">
            <i class="fa-solid fa-lock"></i>
            <span>Segurança</span>
        </div>

    </div>

    <div class="perfil-content edit-profile">

        <div class="perfil-content-header">
            <i class="fa-solid fa-pen-to-square"></i> <span>Editar Perfil</span>
        </div>

        <div class="perfil-content-body">

            <div class="perfil-content-body-container">

                <div class="perfil-content-body-container-input-container">
                    <span><i class="fa-solid fa-user"></i>NickName</span>
                    <input type="email" name="nickName-singup" value="{{auth()->user()->nome}}">
                </div>
                <span class="error-message hide-content" id="span-nickName-cadastro-error"><i
                        class="fa-solid fa-circle-exclamation"></i> NickName invalido</span>

            </div>

            <div class="perfil-content-body-container">

                <div class="dropdown select-elo create-account">
                    <div class="dropdown-header">
                        <i class="fa-solid fa-chevron-down"></i>
                        <span data-elo-id-selected="0"> Selecione seu elo</span>
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

                <span class="error-message hide-content" id="span-selecione-elo-cadastro-error"><i
                    class="fa-solid fa-circle-exclamation"></i> Selecione seu elo</span>

            </div>

            <div class="perfil-content-body-container">

                <div class="custom-multiple-choice edit-profile">
                    <div class="custom-multiple-choice-btn">
                        <i class="fa-solid fa-chevron-down"></i>
                        <div class="functions-selected"> Selecione até 3 funções</div>
                    </div>
                    <div class="custom-multiple-choice-body hide-content">

                        <div class="custom-multiple-choice-body-item controlador" >
                            <span class="custom-multiple-choice-body-item-checkbox">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <div class="custom-multiple-choice-body-item-info">
                                <img class="custom-multiple-choice-body-item-info-image" src="assets/roles-images/controlador.png" alt="controlador.png">
                                <span class="custom-multiple-choice-body-item-info-text">Controlador</span>
                            </div>
                        </div>

                        <div class="custom-multiple-choice-body-item duelista">
                            <span class="custom-multiple-choice-body-item-checkbox">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <div class="custom-multiple-choice-body-item-info">
                                <img class="custom-multiple-choice-body-item-info-image" src="assets/roles-images/duelista.png" alt="duelista.png">
                                <span class="custom-multiple-choice-body-item-info-text">Duelista</span>
                            </div>
                        </div>

                        <div class="custom-multiple-choice-body-item iniciador">
                            <span class="custom-multiple-choice-body-item-checkbox">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <div class="custom-multiple-choice-body-item-info">
                                <img class="custom-multiple-choice-body-item-info-image" src="assets/roles-images/iniciador.png" alt="iniciador.png">
                                <span class="custom-multiple-choice-body-item-info-text">Iniciador</span>
                            </div>
                        </div>

                        <div class="custom-multiple-choice-body-item sentinela">
                            <span class="custom-multiple-choice-body-item-checkbox">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <div class="custom-multiple-choice-body-item-info">
                                <img class="custom-multiple-choice-body-item-info-image" src="assets/roles-images/sentinela.png" alt="sentinela.png">
                                <span class="custom-multiple-choice-body-item-info-text">Sentinela</span>
                            </div>
                        </div>


                    </div>
                </div>

                <span class="error-message hide-content" id="span-selecione-funcao-cadastro-error"><i
                    class="fa-solid fa-circle-exclamation"></i> Selecione pelo menos 1 função</span>

            </div>

            <div class="perfil-content-body-container">
                <div class="container-upload-image">
                    <span class="title">Imagem Perfil</span>
                        <input type="file" name="file-input-cadastro" id="file-cadastro" accept="image/*" hidden>
                        <div class="img-area" data-name-image="alanzokapng.png">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <span>Upload Imagem</span>
                            <p>A imagem deve ter no máximo 2MB.</p>
                        </div>
                        <button class="select-image"><span>Selecione uma imagem</span></button>
                    </div>
            </div>



        </div>

        <div class="perfil-content-footer">
            <button type="button" class="perfil-content-footer-button"><span><i class="fa-solid fa-download"></i> Salvar</span></button>
        </div>

    </div>


</section>


@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

