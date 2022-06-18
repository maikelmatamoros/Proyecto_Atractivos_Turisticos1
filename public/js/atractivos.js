let data = [];

/**
 * CargarAtractivos is an async function that fetches a json file, and if the response is ok, it
 * shuffles the data.
 */
const cargarAtractivos = async () => {
  let res = await fetch("public/data/atractivos.json"),
    json = await res.json();

  if (!res.ok) throw { status: res.status, message: res.statusText };
  data = json;

}

/**
 * It takes the first 9 elements of an array, and then creates a card for each of them.
 * </code>
 */
const recomendarAtractivos = () =>{
  data = shuffle(data);
  $template = document.getElementById("template-card").content;
  $fragment = document.createDocumentFragment();
  document.getElementById("fila-content").innerHTML = "";
  const dataAux = data.slice(0,9);
  dataAux.forEach((el) => {
    // console.log(JSON.stringify(el));
    if (el.lugar == "Parque" || el.lugar == "Reserva") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-tree"></i>';
    } else if (el.lugar == "Playa") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-umbrella-beach"></i>';
    } else if (el.lugar == "Museo") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-landmark"></i>';
    } else if (el.lugar == "Montaña") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-mountain"></i>';
    } else if (el.lugar == "Mar") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-swimmer"></i>';
    } else if (el.lugar == "Volcán") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-volcano"></i>';
    }

    $template.getElementById("nombre").textContent = el.nombre;
    $template.getElementById(
      "tipo"
    ).innerHTML = `<span class="badge badge-secondary">Turista: </span>  ${el.tipo}`;
    $template.getElementById(
      "lugar"
    ).innerHTML = `<span class="badge badge-secondary">Ambiente:</span>  ${el.lugar}`;
    $template.getElementById(
      "provincia"
    ).innerHTML = `<span class="badge badge-secondary">Provincia:</span>  ${el.provincia}`;
    $template.getElementById(
      "precio"
    ).innerHTML = `<span class="badge badge-secondary">Precio:</span> ₡${el.precio}`;
    $template.querySelector(".img1").src = `public/img/atractivos/${el.img1}`;
    $template.querySelector(".img2").src = `public/img/atractivos/${el.img2}`;
    $template.querySelector(".carousel").id = `carousel${el.id}`;
    $template.querySelector(".carousel-control-prev").href = `#carousel${el.id}`;
    $template.querySelector(".carousel-control-next").href = `#carousel${el.id}`;
    $template.querySelector(".btn").id = el.id;
    let $clone = document.importNode($template, true);
    $fragment.appendChild($clone);
  });
  document.getElementById("fila-content").appendChild($fragment);
};

document.addEventListener("DOMContentLoaded", cargarAtractivos);

document.addEventListener("click",(e)=>{
  
  if(e.target.matches(".btn-buscar")){
    recomendarAtractivos();
  }else if(e.target.matches(".btn")){
    const id = e.target.id;
    const result = data.find(obj => {
      return obj.id == id
    })
    document.getElementById("modal-Title").innerHTML = result.nombre;
    document.getElementById("modal-description").innerHTML = result.descripcion;
    document.getElementById("modal-map").innerHTML =`<iframe src="${result.mapa}" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>` ;
    document.getElementById("modal-video").src = `https://www.youtube.com/embed/${result.video}`;
    $('#modal').modal("show")
  }
})

/**
 * While the current index is not zero, set the current index to the random index, then decrement the
 * current index, and swap the current index with the random index.
 * @param array - the array to be shuffled
 * @returns The array is being returned.
 */
const shuffle = (array) => {
  let currentIndex = array.length,  randomIndex;

  while (currentIndex != 0) {

    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}