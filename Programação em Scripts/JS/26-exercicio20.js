function modal() {
    let modal = document.getElementById("modal");

    if (modal.style.display != "block") {
        modal.style.display = "block";
    } else {
        modal.style.display = "none";
    }
}

function openPage(pagina, idElemento){
    let elemento = document.getElementById(idElemento);
    let ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            elemento.innerHTML = ajax.responseText;
        }
    }
    
    ajax.open("GET", pagina, true);
    ajax.send();
}