$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

const createListeners = () => {

    const divMeuPerfil = document.querySelector('.aside-component-content-header.logado');

    if(divMeuPerfil != null){

        divMeuPerfil.addEventListener('click' , () => {

            hrefsActions.meuPerfil();

        })

    }

    const checkBoxHeader = document.querySelectorAll(
        ".custom-multiple-choice.cadastro"
    );

    checkBoxHeader.forEach((checkBoxBtn) => {
        let openBody = checkBoxBtn.querySelector(".custom-multiple-choice-btn");

        let allCheckBoxs = checkBoxBtn.querySelectorAll(
            ".custom-multiple-choice-body-item"
        );

        allCheckBoxs.forEach((checkbox) => {
            checkbox.addEventListener("click", (e) => {
                checkboxActions.clickCheckBox(e.target);
            });
        });

        openBody.addEventListener("click", (e) => {
            checkboxActions.openBody(e.target);
        });
    });

    const logoutButton = document.querySelector(
        ".aside-component-content-footer .logout"
    );

    if (logoutButton != null) {
        logoutButton.addEventListener("click", () => {
            asideActions.logout();
        });
    }

    const notifiacoesNavbar = document.querySelectorAll(".notificacoes-header");

    notifiacoesNavbar.forEach((navbar) => {
        navbar.addEventListener("click", (e) => {
            e.preventDefault();

            notificacoesActions.toggle();
        });
    });

    const notificacoesBody = document.querySelector(".notificacoes-body");

    if (notificacoesBody != null) {
        notificacoesBody.addEventListener("mouseleave", (e) => {
            notificacoesActions.close();
        });
    }

    const menuButton = document.querySelector(".hamburguer-menu");

    menuButton.addEventListener("click", (e) => {
        e.preventDefault();

        asideActions.openAside(e.target);
    });

    const asideBody = document.querySelector(".aside-component");
    asideBody.addEventListener("click", (e) => {
        e.preventDefault();

        asideActions.closeAside(e.target);
    });

    const buttonUploadImagem = document.querySelector(".select-image");
    const inputUploadImagem = document.querySelector("#file-cadastro");

    buttonUploadImagem.addEventListener("click", (e) => {
        inputUploadImagem.click();
    });

    inputUploadImagem.addEventListener("change", (e) => {
        let imagem = e.target.files[0];

        formActions.insereImagemPrevia(imagem);
    });

    const buttonCriaConta = document.querySelector(".btn-criar-conta");

    if (buttonCriaConta != null) {
        buttonCriaConta.addEventListener("click", (e) => {
            formActions.clickButtonCriarConta(e.target);
        });
    }

    const buttonEntrarConta = document.querySelector("#logar-conta");

    buttonEntrarConta.addEventListener("click", (e) => {
        formActions.clickButtonEntrarConta(e.target);
    });

    const dropdownHeader = document.querySelectorAll(".dropdown-header");

    dropdownHeader.forEach((dropdown) => {
        dropdown.addEventListener("click", (e) => {
            dropdownActions.controller(e.target);
        });
    });

    const dropdownOptions = document.querySelectorAll(".dropdown-body-option");

    dropdownOptions.forEach((option) => {
        option.addEventListener("click", (e) => {
            dropdownActions.optionClicked(e.target);
        });
    });

    const buttonOpenModalCadastro = document.querySelector(
        "#button-criar-conta"
    );
    buttonOpenModalCadastro.addEventListener("click", (e) => {
        $("#modalLogin").modal("hide");

        $("#modalCadastro").modal("show");
    });

    const buttonOpenModalLogin = document.querySelector("#button-entrar-conta");

    buttonOpenModalLogin.addEventListener("click", (e) => {
        $("#modalLogin").modal("show");
        $("#modalCadastro").modal("hide");
    });

    const eyeButtons = document.querySelectorAll(".fa-eye-slash");

    if (eyeButtons != null) {
        eyeButtons.forEach((eye) => {
            eye.addEventListener("click", (e) => {
                formActions.showPasswords(e.target);
            });
        });
    }

    const inputsFromForms = document.querySelectorAll(".modal input");

    if (inputsFromForms != null) {
        inputsFromForms.forEach((input) => {
            formActions.changesInput(input);
        });
    }
};


const hrefsActions = {

    meuPerfil(){

        window.location.href = "/meu-perfil&profile";

    }

}

const checkboxActions = {
    funcoesSelecionadas: [],

    clickCheckBox(elementoClicado) {
        let divPai = null;

        console.log(elementoClicado);

        if (
            elementoClicado.classList.contains(
                "custom-multiple-choice-body-item"
            )
        ) {
            divPai = elementoClicado;
        } else if (
            elementoClicado.classList.contains(
                "custom-multiple-choice-body-item-info-text"
            )
        ) {
            divPai = elementoClicado.parentNode.parentNode;
        } else if (
            elementoClicado.classList.contains(
                "custom-multiple-choice-body-item-info-image"
            )
        ) {
            divPai = elementoClicado.parentNode.parentNode;
        } else if (
            elementoClicado.classList.contains(
                "custom-multiple-choice-body-item-checkbox"
            )
        ) {
            divPai = elementoClicado.parentNode;
        }

        let checkBox = divPai.querySelector(
            ".custom-multiple-choice-body-item-checkbox"
        );

        checkBox.classList.toggle("checked");

        this.funcoesSelecionadas.push(divPai.classList[1]);

        this.verificaQuantosMarcados(divPai.parentNode);
    },

    verificaQuantosMarcados(divPai) {
        let allCheckBoxs = divPai.querySelectorAll(
            ".custom-multiple-choice-body-item-checkbox.checked"
        );

        if (allCheckBoxs.length >= 4) {
            let primeiroItemClicado = this.funcoesSelecionadas[0];

            let testeQuery = divPai.querySelector(
                "." + primeiroItemClicado + " .checked"
            );

            testeQuery.classList.remove("checked");

            let arraySemPrimeiroElemento = this.funcoesSelecionadas.filter(
                function (element) {
                    return element !== primeiroItemClicado;
                }
            );

            console.log(arraySemPrimeiroElemento);

            this.funcoesSelecionadas = arraySemPrimeiroElemento;

            console.log(this.funcoesSelecionadas);
        }

        allCheckBoxs = divPai.querySelectorAll(
            ".custom-multiple-choice-body-item-checkbox.checked"
        );

        let spanFunction = document.querySelector(
            ".custom-multiple-choice-btn div"
        );

        let allSelected = "";

        if (allCheckBoxs.length >= 1) {
            allCheckBoxs.forEach((checkbox) => {
                let checkBoxFather = checkbox.parentNode;

                let imageSource = "";

                if (checkBoxFather.classList[1] == "controlador") {
                    imageSource =
                        '<img src="assets/roles-images/controlador.png" alt="controlador"> ';
                } else if (checkBoxFather.classList[1] == "iniciador") {
                    imageSource =
                        '<img src="assets/roles-images/iniciador.png" alt="iniciador"> ';
                } else if (checkBoxFather.classList[1] == "duelista") {
                    imageSource =
                        '<img src="assets/roles-images/duelista.png" alt="duelista"> ';
                } else if (checkBoxFather.classList[1] == "sentinela") {
                    imageSource =
                        '<img src="assets/roles-images/sentinela.png" alt="sentinela"> ';
                }

                allSelected +=
                    "<div class='function-selected'> " +
                    imageSource +
                    " <span class='function-selected-span'> " +
                    checkBoxFather.classList[1] +
                    "</span>" +
                    "</div>";
            });
        } else {
            allSelected +=
                "<div class='function-selected'><span class='function-selected-span'>Selecione até 3 funções</span></div>";
        }

        spanFunction.innerHTML = allSelected;
    },

    openBody(elemento) {
        let fatherElemento = elemento.parentNode;

        console.log(fatherElemento);

        if (fatherElemento.classList.contains("custom-multiple-choice-btn")) {
            fatherElemento = fatherElemento.parentNode;
        } else if (fatherElemento.classList.contains("function-selected")) {
            fatherElemento = fatherElemento.parentNode.parentNode.parentNode;
        }

        let bodyContainer = fatherElemento.querySelector(
            ".custom-multiple-choice-body"
        );

        bodyContainer.classList.toggle("hide-content");
    },
};

const notificacoesActions = {
    toggle() {
        let bodyNotificacoes = document.querySelector(".notificacoes-body");

        bodyNotificacoes.classList.toggle("hide-content");
    },

    close() {
        let bodyNotificacoes = document.querySelector(".notificacoes-body");

        if (!bodyNotificacoes.classList.contains("hide-content")) {
            bodyNotificacoes.classList.add("hide-content");
        }
    },
};

const asideActions = {
    logout() {
        $.ajax({
            url: "/evento/logout",
            type: "POST",
            contentType: false,
            processData: false,
            success: (response) => {
                if (response.success == true) {
                    window.location.reload();
                } else {
                    window.location.reload();
                }
            },
        });
    },

    openAside(click) {
        let aside = document.querySelector("aside");
        let body = document.querySelector("body");

        if (aside.classList.contains("hide-content")) {
            aside.classList.remove("hide-content");
        }

        if (!body.classList.contains("modal-open")) {
            body.classList.add("modal-open");
        }
    },

    closeAside(componenteClicado) {
        if (componenteClicado.classList.contains("aside-component")) {
            let aside = document.querySelector("aside");

            let body = document.querySelector("body");

            if (!aside.classList.contains("hide-content")) {
                aside.classList.add("hide-content");
            }

            if (body.classList.contains("modal-open")) {
                body.classList.remove("modal-open");

                body.style = "";
            }
        }
    },
};

const dropdownActions = {
    optionClicked(option) {
        let dropdownContainer = option.parentNode.parentNode;
        let dropdownBody = dropdownContainer.querySelector(".dropdown-body");
        let spanMostraElo = dropdownContainer.querySelector(
            ".dropdown-header span"
        );

        spanMostraElo.innerHTML = option.innerHTML;
        spanMostraElo.dataset.eloIdSelected = option.dataset.eloId;

        if (dropdownBody.classList.contains("active")) {
            dropdownBody.classList.remove("active");
        }
    },

    controller(dropdownClick) {
        let divFather = null;

        if (dropdownClick.classList.contains("dropdown-header")) {
            divFather = dropdownClick.parentNode;
        } else {
            divFather = dropdownClick.parentNode.parentNode;
        }

        let dropdownBody = divFather.querySelector(".dropdown-body");

        if (dropdownBody.classList.contains("active")) {
            dropdownBody.classList.remove("active");
        } else {
            dropdownBody.classList.add("active");
        }
    },
};

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
        if (
            !regexLetrasMaiusculas.test(senha) ||
            !regexLetrasMinusculas.test(senha)
        ) {
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
    },
};

const formActions = {
    insereImagemPrevia(imagem) {
        let imgArea = document.querySelector(".img-area");

        if (imagem.size < 2000000) {
            let reader = new FileReader();
            reader.onload = () => {
                const allImages = imgArea.querySelectorAll("img");

                if (allImages != null) {
                    allImages.forEach((imageCreateds) => {
                        imageCreateds.remove();
                    });
                }

                let fileName = imagem.name;
                let fileNameWithoutExtension = fileName.substring(
                    0,
                    fileName.lastIndexOf(".")
                );
                let fileExtension = fileName.substring(
                    fileName.lastIndexOf(".") + 1
                );

                let formattedFileName = fileName;
                if (fileNameWithoutExtension.length > 10) {
                    formattedFileName =
                        fileNameWithoutExtension.substring(0, 10) +
                        "..." +
                        fileExtension;
                }

                let imageUrl = reader.result;
                let img = document.createElement("img");
                img.src = imageUrl;
                imgArea.appendChild(img);
                imgArea.classList.add("active");
                imgArea.dataset.nameImage = formattedFileName;
            };

            reader.readAsDataURL(imagem);
        } else {
            Swal.fire({
                text: "A imagem deve conter menos de dois 2MB",
                icon: "error",
            });
        }
    },

    limpaModal(modal) {
        let inputs = modal.querySelectorAll("input");

        inputs.forEach(function (input) {
            input.value = "";
        });
    },

    clickButtonCriarConta(button) {


        let allCheckBoxs = document.querySelectorAll(
            "#modalCadastro .custom-multiple-choice-body-item-checkbox.checked"
        );

        if(allCheckBoxs.length <= 0){


            checkboxActions.funcoesSelecionadas = [];

        }else{

            let arraySemDuplicados = checkboxActions.funcoesSelecionadas.filter(
                (item, index) => {
                    return (
                        checkboxActions.funcoesSelecionadas.indexOf(item) ===
                        index
                    );
                }
            );

            checkboxActions.funcoesSelecionadas = arraySemDuplicados;

        }

        let divPai = button.parentNode.parentNode;

        let modalBodyContent = divPai.querySelector(".modal-body-container");

        let nickNameInput = modalBodyContent.querySelector(
            'input[name="nickName-singup"]'
        );

        let spanNickNameError = modalBodyContent.querySelector(
            "span#span-nickName-cadastro-error"
        );

        let emailInput = modalBodyContent.querySelector(
            'input[name="email-singup"]'
        );
        let spanEmailError = modalBodyContent.querySelector(
            "span#span-email-cadastro-error"
        );

        let senhaInput = modalBodyContent.querySelector(
            'input[name="password-singup"]'
        );

        let spanSenhaError = modalBodyContent.querySelector(
            "span#span-senha-cadastro-error"
        );

        let confirmaSenhaInput = modalBodyContent.querySelector(
            'input[name="confirm-password-singup"]'
        );

        let spanConfirmaSenhaError = modalBodyContent.querySelector(
            "span#span-confirma-senha-cadastro-error"
        );

        let inputEloSelecionado = modalBodyContent.querySelector(
            "[data-elo-id-selected]"
        );
        let spanEloSelecionado = modalBodyContent.querySelector(
            "#span-selecione-elo-cadastro-error"
        );

        let spanRolesSelecionadas = modalBodyContent.querySelector(
            "#span-selecione-funcao-cadastro-error"
        );

        let eloSelected = modalBodyContent.querySelector(
            ".dropdown-header span"
        ).dataset.eloIdSelected;

        let errosContados = 0;

        if (!validations.validaNome(nickNameInput.value)) {
            if (spanNickNameError.classList.contains("hide-content")) {
                spanNickNameError.classList.remove("hide-content");
            }

            let containerInput = nickNameInput.parentNode;

            if (!containerInput.classList.contains("error")) {
                containerInput.classList.add("error");
            }

            errosContados++;
        } else {
            if (!spanNickNameError.classList.contains("hide-content")) {
                spanNickNameError.classList.add("hide-content");
            }

            let containerInput = spanNickNameError.parentNode;

            if (containerInput.classList.contains("error")) {
                containerInput.classList.remove("error");
            }
        }

        if (!validations.validarEmail(emailInput.value)) {
            if (spanEmailError.classList.contains("hide-content")) {
                spanEmailError.classList.remove("hide-content");
            }

            let containerInput = emailInput.parentNode;

            if (!containerInput.classList.contains("error")) {
                containerInput.classList.add("error");
            }

            errosContados++;
        } else {
            if (!spanEmailError.classList.contains("hide-content")) {
                spanEmailError.classList.add("hide-content");
            }

            let containerInput = emailInput.parentNode;

            if (containerInput.classList.contains("error")) {
                containerInput.classList.remove("error");
            }
        }

        if (validations.validaSenha(senhaInput.value) != true) {
            if (spanSenhaError.classList.contains("hide-content")) {
                spanSenhaError.classList.remove("hide-content");
            }

            let containerInput = senhaInput.parentNode;

            if (!containerInput.classList.contains("error")) {
                containerInput.classList.add("error");
            }

            spanSenhaError.innerHTML =
                '<i class="fa-solid fa-circle-exclamation"></i> ' +
                validations.validaSenha(senhaInput.value);

            errosContados++;
        } else {
            if (!spanSenhaError.classList.contains("hide-content")) {
                spanSenhaError.classList.add("hide-content");
            }

            let containerInput = senhaInput.parentNode;

            if (containerInput.classList.contains("error")) {
                containerInput.classList.remove("error");
            }
        }

        if (
            confirmaSenhaInput.value != null &&
            confirmaSenhaInput.value != ""
        ) {
            if (validations.confirmaSenha(senhaInput, confirmaSenhaInput)) {
                if (
                    !spanConfirmaSenhaError.classList.contains("hide-content")
                ) {
                    spanConfirmaSenhaError.classList.add("hide-content");
                }

                let containerInput = confirmaSenhaInput.parentNode;

                if (containerInput.classList.contains("error")) {
                    containerInput.classList.remove("error");
                }
            } else {
                if (spanConfirmaSenhaError.classList.contains("hide-content")) {
                    spanConfirmaSenhaError.classList.remove("hide-content");
                }

                let containerInput = confirmaSenhaInput.parentNode;

                if (!containerInput.classList.contains("error")) {
                    containerInput.classList.add("error");
                }

                errosContados++;
            }
        }


        if(inputEloSelecionado.dataset.eloIdSelected == 0){

            if(spanEloSelecionado.classList.contains('hide-content')){

                spanEloSelecionado.classList.remove('hide-content');

            }

            errosContados++;

        }else{

            if(!spanEloSelecionado.classList.contains('hide-content')){

                spanEloSelecionado.classList.add('hide-content');

            }

        }

        if(checkboxActions.funcoesSelecionadas.length <= 0 ){

            if(spanRolesSelecionadas.classList.contains('hide-content')){

                spanRolesSelecionadas.classList.remove('hide-content')

            }

            errosContados++;


        }else{

            if(!spanRolesSelecionadas.classList.contains('hide-content')){

                spanRolesSelecionadas.classList.add('hide-content')

            }


        }

        if (errosContados == 0) {

            let imagem = $("#file-cadastro")[0].files[0];

            let formData = new FormData();

            formData.append("imagem", imagem);
            formData.append("email",  emailInput.value.toLowerCase());
            formData.append("senha", senhaInput.value);
            formData.append("elo_id", eloSelected);
            formData.append("nickName", nickNameInput.value.toLowerCase());
            formData.append("funcoes", checkboxActions.funcoesSelecionadas);

            let componentsComLoading =
                divPai.querySelector(".loading-component");
            let loading = componentsComLoading.querySelector(".loader");
            let successComponent =
                componentsComLoading.querySelector(".success-icon");
            let errorComponent =
                componentsComLoading.querySelector(".error-icon");

            if (componentsComLoading.classList.contains("hide-content")) {
                componentsComLoading.classList.remove("hide-content");

                if (loading.classList.contains("hide-content")) {
                    loading.classList.remove("hide-content");
                }
            }

            $.ajax({
                url: "/evento/cadastro",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.success) {
                        if (!loading.classList.contains("hide-content")) {
                            loading.classList.add("hide-content");
                        }

                        if (
                            successComponent.classList.contains("hide-content")
                        ) {
                            successComponent.classList.remove("hide-content");
                        }

                        setTimeout(() => {
                            if (
                                !componentsComLoading.classList.contains(
                                    "hide-content"
                                )
                            ) {
                                componentsComLoading.classList.add(
                                    "hide-content"
                                );
                            }

                            window.location.reload();
                        }, 2000);
                    } else {
                        let error = response.error;
                        let spanError = errorComponent.querySelector("span");

                        spanError.innerHTML =
                            '<i class="fa-solid fa-circle-exclamation"></i> ' +
                            error;

                        if (!loading.classList.contains("hide-content")) {
                            loading.classList.add("hide-content");
                        }

                        if (errorComponent.classList.contains("hide-content")) {
                            errorComponent.classList.remove("hide-content");
                        }

                        setTimeout(() => {
                            if (
                                !componentsComLoading.classList.contains(
                                    "hide-content"
                                )
                            ) {
                                componentsComLoading.classList.add(
                                    "hide-content"
                                );
                            }
                        }, 2000);
                    }
                },
                error: function (xhr, status, error) { },
            });
        }
    },

    clickButtonEntrarConta(button) {
        let inputEmail = document.querySelector(
            'input[name="input-email-login"]'
        );
        let spanEmail = document.querySelector("span#span-email-error");
        let containerEmail = inputEmail.parentNode;

        let inputSenha = document.querySelector(
            'input[name="input-password-login"]'
        );
        let spanSenha = document.querySelector("span#span-senha-error");
        let containerSenha = inputSenha.parentNode;

        let errosContadosLogin = 0;

        if (!validations.validarEmail(inputEmail.value)) {
            if (!containerEmail.classList.contains("error")) {
                containerEmail.classList.add("error");
            }

            if (spanEmail.classList.contains("hide-content")) {
                spanEmail.classList.remove("hide-content");
            }

            errosContadosLogin++;
        } else {
            if (containerEmail.classList.contains("error")) {
                containerEmail.classList.remove("error");
            }

            if (!spanEmail.classList.contains("hide-content")) {
                spanEmail.classList.add("hide-content");
            }
        }

        if (validations.validaSenha(inputSenha.value) === true) {
            if (containerSenha.classList.contains("error")) {
                containerSenha.classList.remove("error");
            }

            if (!spanSenha.classList.contains("hide-content")) {
                spanSenha.classList.add("hide-content");
            }
        } else {
            if (!containerSenha.classList.contains("error")) {
                containerSenha.classList.add("error");
            }

            if (spanSenha.classList.contains("hide-content")) {
                spanSenha.classList.remove("hide-content");
            }

            spanSenha.innerHTML = validations.validaSenha(inputSenha.value);

            errosContadosLogin++;
        }

        if (errosContadosLogin == 0) {
            let formData = new FormData();

            formData.append("email", inputEmail.value);
            formData.append("senha", inputSenha.value);

            let divPai = button.parentNode.parentNode;

            let componentsComLoading =
                divPai.querySelector(".loading-component");
            let loading = componentsComLoading.querySelector(".loader");
            let successComponent =
                componentsComLoading.querySelector(".success-icon");
            let errorComponent =
                componentsComLoading.querySelector(".error-icon");

            let spanError = componentsComLoading.querySelector(".error-info");

            if (componentsComLoading.classList.contains("hide-content")) {
                componentsComLoading.classList.remove("hide-content");
            }

            if (loading.classList.contains("hide-content")) {
                loading.classList.remove("hide-content");
            }

            $.ajax({
                url: "/evento/login",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response.success) {
                        if (!loading.classList.contains("hide-content")) {
                            loading.classList.add("hide-content");
                        }

                        if (
                            successComponent.classList.contains("hide-content")
                        ) {
                            successComponent.classList.remove("hide-content");
                        }

                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        spanError.innerHTML = response.error;

                        if (!loading.classList.contains("hide-content")) {
                            loading.classList.add("hide-content");
                        }

                        if (errorComponent.classList.contains("hide-content")) {
                            errorComponent.classList.remove("hide-content");
                        }

                        setTimeout(() => {
                            if (
                                !componentsComLoading.classList.contains(
                                    "hide-content"
                                )
                            ) {
                                componentsComLoading.classList.add(
                                    "hide-content"
                                );
                            }

                            if (
                                !errorComponent.classList.contains(
                                    "hide-content"
                                )
                            ) {
                                errorComponent.classList.add("hide-content");
                            }
                        }, 2000);
                    }
                },

                error: function (xhr, status, error) { },
            });
        }
    },

    changesInput(input) {
        let fatherDiv = input.parentNode;

        if (!fatherDiv.classList.contains("container-upload-image")) {
            let spans = fatherDiv.querySelectorAll("span");

            var filteredSpans = Array.from(spans).filter(function (span) {
                return !span.classList.contains("eye-span");
            });

            filteredSpans.forEach((span) => {
                span.addEventListener("click", (e) => {
                    let inputCalled = fatherDiv.querySelector("input");

                    inputCalled.focus();
                });
            });
        }

        input.addEventListener("click", (e) => {
            let inputClicado = e.target;

            let span = inputClicado.parentNode.querySelector("span");

            if (input.value.length <= 0) {
                if (span.classList.contains("hide-content")) {
                    span.classList.remove("hide-content");
                }
            } else {
                if (!span.classList.contains("hide-content")) {
                    span.classList.add("hide-content");
                }
            }
        });

        input.addEventListener("keyup", (e) => {
            let inputClicado = e.target;

            let span = inputClicado.parentNode.querySelector("span");

            if (inputClicado.value.length <= 0) {
                if (span.classList.contains("hide-content")) {
                    span.classList.remove("hide-content");
                }
            } else {
                if (!span.classList.contains("hide-content")) {
                    span.classList.add("hide-content");
                }
            }
        });

        input.addEventListener("blur", (e) => {
            let inputClicado = e.target;

            let span = inputClicado.parentNode.querySelector("span");

            if (inputClicado.value.length < 1) {
                if (span.classList.contains("hide-content")) {
                    span.classList.remove("hide-content");
                }
            }
        });
    },

    showPasswords(eye) {
        let parentDiv = eye.parentNode.parentNode;

        let input = parentDiv.querySelector("input");

        if (eye.classList.contains("fa-eye")) {
            eye.classList.remove("fa-eye");

            eye.classList.add("fa-eye-slash");
        } else if (eye.classList.contains("fa-eye-slash")) {
            eye.classList.remove("fa-eye-slash");
            eye.classList.add("fa-eye");
        }

        if (input.type == "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    },
};

createListeners();
