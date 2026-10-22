function modal() {
    let modal = document.getElementById("modal");

    if (modal.style.display != "block") {
        modal.style.display = "block";
    } else {
        modal.style.display = "none";
    }
}

function openPage(pagina){
    let elemento = document.getElementById('centro');
    const ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.status === 200) {
            elemento.innerHTML = ajax.responseText;
        } else {
            console.warn("Error");
        }
    };
    
    ajax.open('get', pagina, true);
    ajax.send();
}