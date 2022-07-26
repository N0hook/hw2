
const ricerca = document.querySelector("#form_ricerca");
form_ricerca.addEventListener("submit" , cerca_album);

let check_preferito = -1; 
let check_like = false; //serve a vedere se è stato messo like o meno, inizialmente no
let check_utente;


function onResult(response)
{
    return response.json();
}


function onJson_risultati(json)
{
  dati_album.innerHTML = ''; 

  
    console.log(json); //prova

    if(json.albums.items.length == 0)
    {
      let avviso = document.createElement('span');
      avviso.textContent = "Nessun album corrisponde al nome inserito...";
      avviso.classList.add("avviso");

      dati_album.appendChild(avviso);

    }
    else
    {
     
        dati_album.innerHTML = ''; // è vuoto all'inizio e quando si ricarica la pagina
        let max = json.albums.limit; //limit è 20 di default
        let crea_lista = "immagini/aggiungi_in_lista.png";
        let aggiunto_lista = "immagini/aggiunto_in_lista.png"
        let cuore_vuoto = "immagini/cuore_vuoto.png";
        let cuore_pieno = "immagini/cuore_pieno.png";


        for(let i = 0; i < max; i++)
        {

          let cover = json.albums.items[i].images[0].url;
          let nome_album = json.albums.items[i].name;
          let autore = json.albums.items[i].artists[0].name;
          let data_uscita = json.albums.items[i].release_date;
          let tracce_totali =  json.albums.items[i].total_tracks;
          let link_spotify = json.albums.items[i].external_urls.spotify;
          let id_album = json.albums.items[i].id;

          function onResultPreferito(response)
          {
              return response.json();
          }

          function onJsonPreferito(json)
          {
            check_preferito = json;
          
            if(check_preferito == 1)
            {
              visualizza_preferito.src = cuore_pieno;
              visualizza_preferito.classList.add("cuore");
              check_like = true;
            }
            else
            {
              visualizza_preferito.src = cuore_vuoto;
              visualizza_preferito.classList.add("cuore");
            }


          }

          fetch("/check_preferito/" + id_album).then(onResultPreferito).then(onJsonPreferito);

          //creazione degli elementi
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
          nome.classList.add("nome");

          let nome_autore = document.createElement('span');
          nome_autore.textContent = autore;
          nome_autore.classList.add("autore");

          let visualizza_data = document.createElement('span');
          visualizza_data.textContent = data_uscita;
          visualizza_data.classList.add("data");

          let visualizza_tracce = document.createElement('span');
          visualizza_tracce.textContent = tracce_totali;
          visualizza_tracce.classList.add("num_tracce");

          let visualizza_link = document.createElement('a');
          visualizza_link.href = link_spotify;
          visualizza_link.textContent="Clicca qui per ascoltare l'album";
          visualizza_link.classList.add("link");

          //serve l'identificativo dell'album per i preferiti

          let salva_id = document.createElement('p');
          salva_id.textContent = id_album;
          salva_id.classList.add("id");

          //mi piace e aggiungi in lista

           let visualizza_preferito = document.createElement('img');
      
           let visualizza_crea_lista = document.createElement('img');
           visualizza_crea_lista.src = crea_lista;
           visualizza_crea_lista.classList.add("lista");

      
          //inserimento degli elementi
          
          visualizza_album.appendChild(visualizza_cover);
          visualizza_album.appendChild(descrizione);
          visualizza_album.appendChild(nome);
          visualizza_album.appendChild(nome_autore);
          visualizza_album.appendChild(visualizza_data);
          visualizza_album.appendChild(visualizza_tracce);
          visualizza_album.appendChild(visualizza_link);
          visualizza_album.appendChild(visualizza_preferito);
          visualizza_album.appendChild(visualizza_crea_lista);
          visualizza_album.appendChild(salva_id);

          dati_album.appendChild(visualizza_album);

          visualizza_preferito.addEventListener("click", controllo_like);
        // visualizza_crea_lista.addEventListener("click", controllo_lista);

    }  
 }
}


//album cercato dall'utente

function cerca_album(event)
{
    event.preventDefault();

    const titolo = document.querySelector("#nome_album").value;
   
    fetch("/api_cerca_album/" + encodeURIComponent(titolo.split(" ").join(""))).then(onResult).then(onJson_risultati);
   
}


//aggiungere l'album alla tabella preferiti dell'utente:

        function aggiungi_preferito(preferito)
        {
          console.log("pieno"); //controllo
          const formData = new FormData();
          let album_selezionato = preferito.parentNode;
      
          let id_album = album_selezionato.querySelector("p.id");
          let cover = album_selezionato.querySelector("img.cover");
          let nome = album_selezionato.querySelector("span.nome"); 
          let autore = album_selezionato.querySelector("span.autore");
          let data = album_selezionato.querySelector("span.data");
          let tracce = album_selezionato.querySelector("span.num_tracce");

          preferito.src = "immagini/cuore_pieno.png";

          formData.append('id', id_album.textContent);
          formData.append('cover', cover.src);
          formData.append('nome', nome.textContent);
          formData.append('autore', autore.textContent);
          formData.append('data_uscita', data.textContent);
          formData.append('num_tracce', tracce.textContent);
          formData.append('_token', csrf_token);

          fetch('/aggiungi_album/', {method: 'post', body: formData})
          .then(function () {

           fetch("/aggiungi_preferito", {method: 'post', body: formData})});

            check_like = true;

        }

//rimuovere l'album dalla tabella dei preferiti dell'utente

        function rimuovi_preferito(preferito)
        {
          console.log("vuoto"); //controllo
        
          let album_selezionato = preferito.parentNode;
      
          let id_album = album_selezionato.querySelector("p.id");

          fetch("rimuovi_preferito/" + id_album.textContent);

          preferito.src = "./immagini/cuore_vuoto.png";

          check_like = false;

        }

        function onResult_check(response_check)
        {
          return response_check.json();
        }

        function onJson_risultati_check(json_check)
        {
            check_utente = json_check;

            if (check_utente == 0)
            {
              console.log(check_utente);

              location.href = "/signup";
              exit;
            }
        }

     
      function controllo_like(event)
      {
        const cuore = event.currentTarget;
        
        fetch("/check_connessione/").then(onResult_check).then(onJson_risultati_check);

        if(check_like == false && check_utente == 1)
        {
          aggiungi_preferito(cuore);
          return;
        }

        if(check_like == true)
        {
          rimuovi_preferito(cuore);
          return;
        }

      }
  

