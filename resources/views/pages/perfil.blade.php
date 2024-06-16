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
        <a href="{{route('perfil', ['page' => 'profile'])}}" class="aside-perfil-item <?php if($page == "profile") echo 'active'?>">
            <i class="fa-solid fa-pen-to-square"></i>
            <span>Editar Perfil</span>
        </a>
        <a href="{{route('perfil', ['page' => 'notification'])}}" class="aside-perfil-item <?php if($page == "notification") echo 'active'?>">
            <i class="fa fa-bell icon-notification" ></i>
            <span>Notificações</span>
        </a>
        <a href="{{route('perfil', ['page' => 'security'])}}" class="aside-perfil-item <?php if($page == "security") echo 'active'?>">
            <i class="fa-solid fa-lock"></i>
            <span>Segurança</span>
        </a>

    </div>

    @if($page == 'profile')

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
                        <span data-elo-id-selected="{{Auth::user()->elo}}"> {{$elo->nome_elo}}</span>
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
                        <div class="functions-selected">
                            @foreach ($roles as $role)

                            <div class="function-selected"> <img src="assets/roles-images/{{$role}}.png" alt="{{$role}}">  <span class="function-selected-span"> {{$role}}</span></div>

                            @endforeach
                        </div>
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
            <button type="button" class="perfil-content-footer-button"><span> Salvar</span></button>
        </div>

    </div>

    @elseif ($page == 'notification')

    <div class="perfil-content notification">

        <div class="perfil-content-header">
            <i class="fa fa-bell icon-notification"></i> <span>Notificações</span>
        </div>

        <div class="perfil-content-body">


        </div>

        <div class="perfil-content-footer">
            <button type="button" class="perfil-content-footer-button"><span> Salvar</span></button>
        </div>

    </div>


    @elseif ($page == 'security')

    <div class="perfil-content security">

        <div class="perfil-content-header">
            <i class="fa-solid fa-lock"></i> <span>Segurança</span>
        </div>

        <div class="perfil-content-body">


        </div>

        <div class="perfil-content-footer">
            <button type="button" class="perfil-content-footer-button"><span> Salvar</span></button>
        </div>

    </div>

    @endif


</section>


@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

