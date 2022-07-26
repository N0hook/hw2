
function onResponseContenuti(response)
{
    return  response.json();
}

function onJsonContenuti(json)
{

  const descrizione = document.querySelectorAll("p");

  const foto = document.querySelectorAll("img");

  for(let i = 0; i < json.length; i++)
  {
    let testo = json[i].testo;
    let immagine = json[i].immagine;
   
    descrizione[i].textContent = testo;
    foto[i].src = immagine;
    
  }
}



function fetch_contenuti_home()
{
  console.log("Carica blocchi");
  fetch(BASE_URL +"/carica_blocchi").then(onResponseContenuti).then(onJsonContenuti);
}

fetch_contenuti_home();




