const container_lista = containers[2];

container_lista.addEventListener("click", cambia_pagina);

function cambia_pagina()
{
    location.href = BASE_URL + "/crea_liste";
}

console.log("Pagina di visualizzazione delle classifiche caricata");