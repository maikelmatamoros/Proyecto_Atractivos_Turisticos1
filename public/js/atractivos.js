let data = [];

const recomendarAtractivos = (datos) =>{
  data = datos;
  $template = document.getElementById("template-card").content;
  $fragment = document.createDocumentFragment();
  document.getElementById("fila-content").innerHTML = "";
  // const dataAux = data.slice(0,9);
  shuffle(data).slice(0,6).forEach((el) => {
    // console.log(JSON.stringify(el));
    if (el.tipolugar == "Parque" || el.tipolugar == "Reserva") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-tree"></i>';
    } else if (el.tipolugar == "Playa") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-umbrella-beach"></i>';
    } else if (el.tipolugar == "Museo") {
      $template.getElementById("icono").innerHTML =
        '<i class="fa fa-landmark"></i>';
    } else if (el.tipolugar == "Montaña") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-mountain"></i>';
    } else if (el.tipolugar == "Mar") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-swimmer"></i>';
    } else if (el.tipolugar == "Volcán") {
      $template.getElementById("icono").innerHTML =
        '<i class="fas fa-volcano"></i>';
    }

    $template.getElementById("nombre").textContent = el.nombre;
    $template.getElementById(
      "tipo"
    ).innerHTML = `<span class="badge badge-secondary">Turista: </span>  ${el.tipoturista}`;
    $template.getElementById(
      "lugar"
    ).innerHTML = `<span class="badge badge-secondary">Ambiente:</span>  ${el.tipolugar}`;
    $template.getElementById(
      "provincia"
    ).innerHTML = `<span class="badge badge-secondary">Estrellas:</span>  ${el.estrellas}`;
    $template.getElementById(
      "precio"
    ).innerHTML = `<span class="badge badge-secondary">Precio:</span> ₡${el.precio}`;
    $template.querySelector(".img1").src = `public/img/atractivos/${el.imagen1}`;
    $template.querySelector(".img2").src = `public/img/atractivos/${el.imagen2}`;
    $template.querySelector(".carousel").id = `carousel${el.id}`;
    $template.querySelector(".carousel-control-prev").href = `#carousel${el.id}`;
    $template.querySelector(".carousel-control-next").href = `#carousel${el.id}`;
    $template.querySelector(".card-btn").id = el.id;
    let $clone = document.importNode($template, true);
    $fragment.appendChild($clone);
  });
  document.getElementById("fila-content").appendChild($fragment);
};

document.addEventListener("click",(e)=>{
  
  if(e.target.matches(".card-btn")){
    const id = e.target.id;
    const result = data.find(obj => {
      return obj.id == id
    })
    document.getElementById("title-modal").innerHTML = result.nombre;
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

//Esta porción del código se encarga de guardar en la base de datos las probabilidades
//NOTA: Se utilizó una sola vez llamandolo en el eventListener del DOMContentLoaded
//NOTA2: 
//--------------------------------------------------------------------------------------------//

//Arreglo donde se guardan las frecuencias para sacar las probabilidades de los atributos con 
//respecto a las clases
let frecuenciaAtractivos = [];

//Método que extrae de la base de datos las frecuencias y los almacena en
//en una variable para poder trabajar con sus datos.
const obtenerFrecuenciaAtractivos = async () => {
  let res = await fetch(
      "?controlador=Atractivo&accion=obtenerFrecuenciaAtractivos"
    ),
    json = await res.text();
    json = json.replace('<!--Llamada al FrontController-->', '')
    frecuenciaAtractivos = JSON.parse(json);
    guardarProbabilidesAtractivos(generarProbabilidadesAtractivos());

};

// document.addEventListener("DOMContentLoaded", obtenerFrecuenciaAtractivos);

//Método que guarda en la base de datos las probabilidades obtenidas con las frecuencias
const guardarProbabilidesAtractivos= async (probabilidades)=>{
  try {
    let res = await fetch("?controlador=Atractivo&accion=generarProbabilidaesAtributoAtractivos", {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(probabilidades)
    });
  } catch (err) {
    let message = err.statusText || "Error no identificado";
    document.getElementById("resultado").innerHTML = "Ha ocurrido un error, recargue y trate de nuevo."
  }
}

//Método que genera las probabilides en base a las frecuencias extraidas de la base de datos
const generarProbabilidadesAtractivos = () => {
  let nc=0, m=4,p=0;

  let precio=1/3, turista=1/4, tipoAtractivo=1/7, estrellas=1/5;

  let clase1=34,clase2=27, clase3=15,clase4=21;

  const probabilidades = [];
       /*Se recorre el array para poder guardar las frecuencias, el n de cada registro*/
  frecuenciaAtractivos.forEach(el => {
    if (el.atributo === "precio" && el.clase === "1") {
      nc = el.frecuencia;
      p = precio;
      n = clase1;

    } else if (el.atributo === "precio" && el.clase === "2") {
      nc = el.frecuencia;
      p = precio;
      n = clase2;

    } else if (el.atributo === "precio" && el.clase === "3") {
      nc = el.frecuencia;
      p = precio;
      n = clase3;
    } else if (el.atributo === "precio" && el.clase === "4") {
        nc = el.frecuencia;
        p = precio;
        n = clase4;
    } else if (el.atributo === "tipoturista" && el.clase === "1") {
      nc = el.frecuencia;
      p = turista;
      n = clase1;

    } else if (el.atributo === "tipoturista" && el.clase === "2") {
      nc = el.frecuencia;
      p = turista;
      n = clase2;

    } else if (el.atributo === "tipoturista" && el.clase === "3") {
      nc = el.frecuencia;
      p = turista;
      n = clase3;

    }else if (el.atributo === "tipoturista" && el.clase === "4") {
      nc = el.frecuencia;
      p = turista;
      n = clase4;
    }else if (el.atributo === "tipolugar" && el.clase === "1") {
      nc = el.frecuencia;
      p = tipoAtractivo;
      n = clase1;

    } else if (el.atributo === "tipolugar" && el.clase === "2") {
      nc = el.frecuencia;
      p = tipoAtractivo;
      n = clase2;

    } else if (el.atributo === "tipolugar" && el.clase === "3") {
      nc = el.frecuencia;
      p = tipoAtractivo;
      n = clase3;
    }else if (el.atributo === "tipolugar" && el.clase === "4") {
      nc = el.frecuencia;
      p = tipoAtractivo;
      n = clase4;
    }else if(el.atributo === "estrellas" && el.clase==="1"){
      nc=el.frecuencia;
      p=estrellas;
      n=clase1;
    }else if(el.atributo === "estrellas" && el.clase==="2"){
      nc=el.frecuencia;
      p=estrellas;
      n=clase2;
    }else if(el.atributo === "estrellas" && el.clase==="3"){
      nc=el.frecuencia;
      p=estrellas;
      n=clase3;
    }else if(el.atributo === "estrellas" && el.clase==="4"){
      nc=el.frecuencia;
      p=estrellas;
      n=clase4;
    }         
    let probabilidad = (Number(nc) + Number(m * p)) / (Number(n) + Number(m));
    /*Se crea un objeto donde se guardara los resultados de las probabilidades para luego guardarlo 
      en un array */
    probabilidades.push({
          atributo: el.atributo,
          clase: el.clase,
          probabilidad: probabilidad,
          valor: el.valor,
        });
  });
  return probabilidades;
};


//Arreglos para guardar las probabilidades para generar las respuestas usando Bayes
let probabilidadesAtributos = [];
let probabilidadesClase = [];

//Método que permite obtener las probabiliades de las clases y las probabilidaes de los atributos
//NOTA: Este método se llama por defecto en el DOMContentLoaded
const obtenerProbabilidadesAtributoAtractivos = async () => {
    let res1 = await fetch(
        "?controlador=Atractivo&accion=obtenerProbabilidaesAtributoAtractivos"
      ), res2 = await fetch(
        "?controlador=Atractivo&accion=obtenerProbabilidaesClaseAtractivos");
      
    if (!res1.ok) throw { status: res1.status, message: res1.statusText };
    let json1 = await res1.text();
    let json2 = await res2.text();
    probabilidadesAtributos = JSON.parse(json1.replace('<!--Llamada al FrontController-->', ''));
    probabilidadesClase = JSON.parse(json2.replace('<!--Llamada al FrontController-->', ''));
    // console.log(JSON.stringify(probabilidadesAtributos));
};

const determinarAtractivos=()=> {
  //Se declaran variables para guardar los resultados de los atributos para cada clase
  let precioClaseA=0, tipoTuristaClaseA=0, tipoLugarClaseA=0, estrellasClaseA=0;
  let precioClaseB=0, tipoTuristaClaseB=0, tipoLugarClaseB=0, estrellasClaseB=0;
  let precioClaseC=0, tipoTuristaClaseC=0, tipoLugarClaseC=0, estrellasClaseC=0;
  let precioClaseD=0, tipoTuristaClaseD=0, tipoLugarClaseD=0, estrellasClaseD=0;

  /*Se guardan los valores que ingreso el usuario*/
  const precio=document.getElementById("precio").value;
  const tipoTurista=document.getElementById("tipoTurista").value;
  const tipoLugar=document.getElementById("tipoLugar").value;
  const estrellas=document.getElementById("estrellas").value;
  console.log(precio,tipoTurista,tipoLugar,estrellas);

  /*Se recorre el array donde se tienen guardadas las probabilidades, se evalua el atributo y el valor 
  con el ingresado por el usuario para asi poder encontrar en el array la probabilidad correcta de 
  cada atributo*/
  probabilidadesAtributos.forEach((el,i)=>{
    // console.log(JSON.stringify(el))
 
    if (el.atributo=="precio" && el.valor==precio){
      if(el.clase == "1") precioClaseA=el.probabilidad;
      else if(el.clase == "2") precioClaseB=el.probabilidad;
      else if(el.clase == "3") precioClaseC=el.probabilidad;
      else precioClaseD=el.probabilidad;
    }
    if (el.atributo==="tipoturista" && el.valor==tipoTurista){
      if(el.clase == "1") tipoTuristaClaseA=el.probabilidad;
      else if(el.clase == "2") tipoTuristaClaseB=el.probabilidad;
      else if(el.clase == "3") tipoTuristaClaseC=el.probabilidad;
      else tipoTuristaClaseD=el.probabilidad;
    }
    if (el.atributo==="tipolugar" && el.valor==tipoLugar){
      if(el.clase == "1") tipoLugarClaseA=el.probabilidad;
      else if(el.clase == "2") tipoLugarClaseB=el.probabilidad;
      else if(el.clase == "3") tipoLugarClaseC=el.probabilidad;
      else tipoLugarClaseD=el.probabilidad;
    }
    if (el.atributo==="estrellas" && el.valor==estrellas){
      if(el.clase == "1") estrellasClaseA=el.probabilidad;
      else if(el.clase == "2") estrellasClaseB=el.probabilidad;
      else if(el.clase == "3") estrellasClaseC=el.probabilidad;
      else estrellasClaseD=el.probabilidad;
    }
   })

  /*Primero se realizan las multiplicacion de las probabilidades de cada atributo para cada clase*/
  let claseA=precioClaseA*tipoTuristaClaseA*tipoLugarClaseA*estrellasClaseA;
  let claseB=precioClaseB*tipoTuristaClaseB*tipoLugarClaseB*estrellasClaseB;
  let claseC=precioClaseC*tipoTuristaClaseC*tipoLugarClaseC*estrellasClaseC;
  let claseD=precioClaseD*tipoTuristaClaseD*tipoLugarClaseD*estrellasClaseD;
  /*Se recorre el array donde se tiene guardado las probabilidades de cada clase y se realiza la multiplicacion
    para sacar la probabilidad total de cada clase y se guarda en una variable*/
  probabilidadesClase.forEach((el) => {
    if(el.clase == "1") (claseA = claseA * el.probabilidad)
    else if(el.clase == "2") (claseB = claseB * el.probabilidad)
    else if(el.clase == "3") (claseC = claseC * el.probabilidad)
    else claseD = claseD * el.probabilidad  
  });
   
  /*Con las probabilidades obtenidas, se revisa cual es la mayor y se le aclara al usuario en la
    vista donde ingresó la información*/
  let clase;
  if(claseA>claseB && claseA>claseC && claseA>claseD) clase = 1;
  else if(claseB>claseA && claseB>claseC && claseB>claseD) clase = 2;
  else if(claseC>claseA && claseC>claseB && claseC>claseD) clase = 3;
  else if(claseD>claseA && claseD>claseB && claseD>claseC) clase = 4;

  console.log("La clase es: " + clase);
  obtenerAtractivosPorClaseRecomendada(clase);

}

const obtenerAtractivosPorClaseRecomendada = async (clase) => {
  // alert(clase);
  let res = await fetch(
      "?controlador=Atractivo&accion=obtenerAtractivosPorClaseRecomendada",{
        method: "POST",
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(clase)
      }
    ),
    json = await res.text();
    json = json.substring(json.indexOf("["));
    
    recomendarAtractivos(JSON.parse(json));
};


document.addEventListener("DOMContentLoaded", obtenerProbabilidadesAtributoAtractivos);
document
  .getElementById("button")
  .addEventListener("click", () => determinarAtractivos() );
