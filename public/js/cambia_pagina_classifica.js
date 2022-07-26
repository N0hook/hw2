const container_classifica = containers[1];

container_classifica.addEventListener("click", cambia_pagina);

function cambia_pagina()
{
    location.href = BASE_URL + "/visualizza_classifica";
}

console.log("Pagina di visualizzazione delle classifiche caricata");