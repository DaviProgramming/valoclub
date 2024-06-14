$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});


const createListeners = () => {

    const checkBoxHeader = document.querySelectorAll(
        ".custom-multiple-choice.edit-profile"
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

    const buttonUploadImagem = document.querySelector(".select-image");
    const inputUploadImagem = document.querySelector("#file-cadastro");

    buttonUploadImagem.addEventListener("click", (e) => {
        inputUploadImagem.click();
    });

    inputUploadImagem.addEventListener("change", (e) => {
        let imagem = e.target.files[0];

        formActions.insereImagemPrevia(imagem);
    });

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

    const inputsFromForms = document.querySelectorAll("input");

    if (inputsFromForms != null) {
        inputsFromForms.forEach((input) => {
            formActions.changesInput(input);
        });
    }



}

const formActions ={

    changesInput(input) {

        let fatherDiv = input.parentNode;

         if(input.value.length > 0 ){

            let span = input.parentNode.querySelector("span");

            if (input.value.length <= 0) {
                if (span.classList.contains("hide-content")) {
                    span.classList.remove("hide-content");
                }
            } else {
                if (!span.classList.contains("hide-content")) {
                    span.classList.add("hide-content");
                }
            }
         }

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

createListeners();
