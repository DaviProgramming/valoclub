


@auth

<nav>
    <div class="logo">
        <img src="./assets/logo.png" alt="">
    </div>
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
                <img src="./assets/perfil-teste.jpg" alt="">
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
    <div class="logo">
        <img src="./assets/logo.png" alt="">
    </div>
    <div class="user-actions">
        <div class="notificacoes">
            <i class="fa fa-bell" data-notificacoes="5"></i>
            <span>Notificações</span>
        </div>

        <div class="perfil deslogado" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <div class="perfil-image">
                <img src="./assets/user.png" alt="">

            </div>
            <span>Perfil</span>

        </div>
        <div class="hamburguer-menu">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </div>

    </div>
</nav>

@endguest



