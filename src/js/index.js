const botaoTrailer = document.querySelector('.botao-trailer');
const botaoFecharModal = document.querySelector('.fechar-modal');
const video = document.getElementById('video');
const modal = document.querySelector(".modal");
const linkDoVideo = video.src;

//Função para alterar o estado da modal do trailer

function alternarModal(){
    modal.classList.toggle("aberto");
}

botaoTrailer.addEventListener("click", () => {
    alternarModal();
    video.setAttribute('src', linkDoVideo)  
});

botaoFecharModal.addEventListener("click", () => {
    alternarModal();
    video.setAttribute('src', "");
});

function validarForm() {
    let nome = document.forms["formCadastro"]["nome"].value;
    let sobrenome = document.getElementById("sobrenome").value;

    if (nome == "") {
        alert("Preencha o nome!!");
    }
    else if (sobrenome == "") {
        alert("Preencha o sobrenome!!");
    }
    else {
        let mensagem = "Enviado: " + nome + " " + sobrenome;
        alert(mensagem);
    }
}


