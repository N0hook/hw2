const containers = document.querySelectorAll(".container");
const container_album = containers[0];

function cambia_pagina()
{
    location.href = BASE_URL + "/cerca_album";
}

container_album.addEventListener("click", cambia_pagina);


console.log("Pagina di ricerca dell'album caricata");