function iniciamodal(modalid) {

    const modal = document.getElementById(modalid);
    if(modal) {
        modal.classList.add("mostrar");
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalid || e.target.className == 'fechar') {
                modal.classList.remove("mostrar");
            }
        });
    }

}

var btcadastrar = document.getElementById("btcadastrar")

btcadastrar.addEventListener('click', () => iniciamodal('modal-cadastrar'))


var btlogin = document.getElementById("btlogin")
btlogin.addEventListener('click', () => iniciamodal('modal-login'))


var btSair = document.getElementById("btsair");

var btcarrinho = document.getElementById("btcarrinho");

var LBcarrinho = document.getElementById("LBcestas");
var LBfunciona = document.getElementById("LBfunciona");
var LBmercado = document.getElementById("btcarrinho");


function  logado(){


    btSair.style.display = 'block';
    btcadastrar.style.display="none";
    btlogin.style.display="none";
    btcadastrar.disabled = true;



}
