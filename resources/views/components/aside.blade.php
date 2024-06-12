<aside class="aside-component hide-content">

    <div class="aside-component-content">


        @auth

        <div class="aside-component-content-header">

            <div class="aside-component-content-header-profile">
                <img class="aside-component-content-header-profile-image logado" src="{{auth()->user()->imagem_url}}" alt="">
            </div>
            <div class="aside-component-content-header-name">
                <span>Meu perfil</span>
            </div>

        </div>

        @endauth

        @guest

        <div class="aside-component-content-header" data-bs-toggle="modal" data-bs-target="#modalLogin">

            <div class="aside-component-content-header-profile">
                <img class="aside-component-content-header-profile-image" src="assets/user.png" alt="">
            </div>
            <div class="aside-component-content-header-name">
                <span>Entrar na sua conta</span>
            </div>

        </div>

        @endguest



        <div class="aside-component-content-body">

            @auth

            <div class="aside-component-content-body-item"><div class="aside-component-content-body-item-icon"><i class="fa-solid fa-plus"></i></div><span> Criar Lobby</span></div>


            @endauth

            @guest

            <div class="aside-component-content-body-item" data-bs-toggle="modal" data-bs-target="#modalCadastro"><div class="aside-component-content-body-item-icon"><i class="fa-solid fa-user-plus"></i></div><span> Criar Conta</span></div>


            @endguest


            <div class="aside-component-content-body-item"><div class="aside-component-content-body-item-icon"><i class="fa-solid fa-question"></i></div><span>Sobre o site</span></div>
            <div class="aside-component-content-body-item"><div class="aside-component-content-body-item-icon"><i class="fa-solid fa-headset"></i></div><span>Suporte</span></div>

        </div>


        @auth

        <div class="aside-component-content-footer">

            <div class="aside-component-content-body-item logout"><div class="aside-component-content-body-item-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div><span>Sair</span></div>


            <div class="aside-component-content-footer-copyright">

                Desenvolvido por David Oliveira

            </div>

        </div>

        @endauth



    </div>





</aside>
