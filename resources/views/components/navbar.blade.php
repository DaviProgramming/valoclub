


@auth

<nav>
    <a href="#" class="logo">
        <img src="./assets/logo-new.png" alt="">
    </a>
    <div class="user-actions">
        <div class="notificacoes">
            <div class="notificacoes-header">
                <i class="fa fa-bell icon-notification" data-notificacoes="5"></i>
                <span class="text-notification">Notificações</span>
            </div>

            <div class="notificacoes-body hide-content">
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam facilis consectetur, autem consequatur sapiente voluptates! Eligendi libero, repudiandae, est ex perspiciatis, distinctio quisquam placeat impedit maxime doloribus aperiam hic?</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>
                <div class="notificacoes-body-item">
                    <i class="fa-solid fa-circle-exclamation"></i><span>Exemplo de notificacao</span>
                </div>

            </div>
        </div>
        <div class="perfil" >
            <div class="perfil-image">
                <img src="{{auth()->user()->imagem_url}}" alt="">
            </div>
            <span>{{auth()->user()->nome}}</span>
        </div>
        <div class="hamburguer-menu">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </div>
    </div>
</nav>

@endauth


@guest


<nav>
    <a href="#" class="logo">
        <img src="./assets/logo-new.png" alt="">
    </a>
    <div class="user-actions">

        <div class="perfil deslogado" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <div class="perfil-image">
                <img src="./assets/user.png" alt="">

            </div>
            <span>Entre na sua conta</span>

        </div>
        <div class="hamburguer-menu">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </div>

    </div>
</nav>

@endguest



