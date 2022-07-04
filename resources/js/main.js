function validation() {
    let language = document.querySelector(".language").value;
    let title = document.querySelector(".title").value;
    let artist = document.querySelector(".artist").value;
    let inventory = document.querySelector(".inventory").value;
    let status = document.querySelector(".status").value;

    if (title == null || title.length == 0 || /^\s+$/.test(title) ) {
      alert('[ERROR] El campo debe tener un título');
      return false;
    }else if(language == null || language.length == 0 || /^\s+$/.test(language) ) {
            alert('[ERROR] El campo debe tener un idioma');
            return false;
    }else if(artist == null || artist.length == 0 || /^\s+$/.test(artist) ) {
        alert('[ERROR] El campo debe tener un artista');
        return false;
    }else if(inventory == null || inventory.length == 0 || /^\s+$/.test(inventory) ) {
        alert('[ERROR] El campo debe tener un número de inventario');
        return false;
    }else if(status == null || status.length == 0 || /^\s+$/.test(status) ) {
        alert('[ERROR] El campo debe tener seleccionado un status');
        return false;
    }else{
      return true;
    }
}