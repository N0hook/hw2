
//event listener per spotify
const cerca = document.querySelector('#form_ricerca');
cerca.addEventListener('submit', cerca_classifiche);

function onResult(response)
{
    return response.json();
}

//si fa restituire dall'api i dati
function onJson_risultati(json)
{
    dati_classifica.innerHTML = ''; // è vuoto all'inizio e quando si ricarica la pagina
    let max = json.albums.limit; //limit è 20 di default
    console.log(json); //controllo

    for (let i = 0; i < max; i++ )
    {
        let cover = json.albums.items[i].images[0].url;
        let nome_album = json.albums.items[i].name;
        let autore = json.albums.items[i].artists[0].name;
        let data_uscita = json.albums.items[i].release_date;
        let tracce_totali =  json.albums.items[i].total_tracks;
        let link_spotify = json.albums.items[i].external_urls.spotify;
        let posizione = i+1;       

        let descrizione = document.createElement('span');
        descrizione.textContent = "Nome dell'album, nome dell'autore, data di uscita, numero tracce: ";
        descrizione.classList.add("descrizione");

        let visualizza_album = document.createElement('div');
        visualizza_album.classList.add('visualizza_album');

        let visualizza_cover = document.createElement('img');
        visualizza_cover.src = cover;
        visualizza_cover.classList.add("cover")

        let nome = document.createElement('span');
        nome.textContent = nome_album;

        let nome_autore = document.createElement('span');
        nome_autore.textContent = autore;

        let visualizza_data = document.createElement('span');
        visualizza_data.textContent = data_uscita;
        
        let visualizza_tracce = document.createElement('span');
        visualizza_tracce.textContent = tracce_totali;

        let visualizza_link = document.createElement('a');
        visualizza_link.href = link_spotify;
        visualizza_link.textContent="Clicca qui per ascoltare l'album";
        visualizza_link.classList.add("link");

        let visualizza_posizione = document.createElement('span');
        visualizza_posizione.textContent = 'Posizione: ' + posizione;
        visualizza_posizione.classList.add("posizione")


        visualizza_album.appendChild(visualizza_posizione);
        visualizza_album.appendChild(visualizza_cover);
        visualizza_album.appendChild(descrizione);
        visualizza_album.appendChild(nome);
        visualizza_album.appendChild(nome_autore);
        visualizza_album.appendChild(visualizza_data);
        visualizza_album.appendChild(visualizza_tracce);
        visualizza_album.appendChild(visualizza_link);
 
        dati_classifica.appendChild(visualizza_album);
    }
    

}

function cerca_classifiche(event)
{
    event.preventDefault();

    const paese = document.querySelector("#cerca_classifica").value;

    fetch("/richiesta_classifica/" + encodeURIComponent(paese)).then(onResult).then(onJson_risultati);



  
}

