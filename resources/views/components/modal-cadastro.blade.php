<div class="modal fade modal-login" id="modalCadastro" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Cadastro</h1>
                <i class="fa-solid fa-x" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="loading-component hide-content cadastro">
                <span class="loader hide-content cadastro"></span>
                <div class="success-icon hide-content cadastro"><i class="fa-solid fa-check"></i></div>
                <div class="error-icon hide-content cadastro">
                    <div class="container-icon-error">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <span class="error-info"><i class="fa-solid fa-circle-exclamation"></i> Info do erro</span>
                </div>
            </div>

            <div class="modal-body">

                <div class="modal-body-container">

                    <div class="modal-body-container-input-container">
                        <span><i class="fa-solid fa-envelope"></i>Email</span>
                        <input type="email" name="email-singup">
                    </div>
                    <span class="error-message hide-content" id="span-email-cadastro-error"><i
                            class="fa-solid fa-circle-exclamation"></i> Email invalido</span>

                    <div class="modal-body-container-input-container">
                        <span><i class="fa-solid fa-user"></i>NickName</span>
                        <input type="email" name="nickName-singup">
                    </div>
                    <span class="error-message hide-content" id="span-nickName-cadastro-error"><i
                            class="fa-solid fa-circle-exclamation"></i> NickName invalido</span>

                    <div class="modal-body-container-input-container">
                        <span><i class="fa-solid fa-lock"></i>Senha</span>
                        <span class="eye-span"><i class="fa-solid fa-eye-slash"></i></span>
                        <input type="password" name="password-singup">
                    </div>
                    <span class="error-message hide-content" id="span-senha-cadastro-error"><i
                            class="fa-solid fa-circle-exclamation"></i> Senha invalida</span>

                    <div class="modal-body-container-input-container">
                        <span><i class="fa-solid fa-lock"></i>Confirmar Senha</span>
                        <span class="eye-span"><i class="fa-solid fa-eye-slash"></i></span>
                        <input type="password" name="confirm-password-singup">
                    </div>
                    <span class="error-message hide-content" id="span-confirma-senha-cadastro-error"><i
                            class="fa-solid fa-circle-exclamation"></i> As senhas digitadas não coincidem</span>

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

                    <div class="custom-multiple-choice cadastro">
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
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" id="button-entrar-conta">Entrar na conta</button>
                <button type="button" class="btn btn-primary btn-criar-conta">Criar conta</button>

            </div>
        </div>
    </div>
</div>
