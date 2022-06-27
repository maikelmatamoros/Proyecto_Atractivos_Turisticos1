/*Función que permite capturar lo que el usuario ingresa en el formulario para luego mandarlo a la función correspondiente en el controller.
 Cuando la función getRentACars que se encuentra en RentACarController termina, responde con un array de rent a cars que va a ser mostrado en la 
 interfaz gráfica correspondiente. */
function getRentACars() {

    var parametros = {
        "carType": document.rentACar.carType.value,
        "provinces": document.rentACar.provinces.value
    };
    $.ajax
        (
            {
                data: parametros,
                url: '?controlador=RentACar&accion=getRentACars',
                type: 'post',
                beforeSend: function () {
                    $("#recommendations").html("<b>Estamos realizando la búsqueda, \n\ espere por favor...</b>");
                },
                success: function (response) {
                    $("#recommendations").html(response);
                }
            }
        );

}//Fin getRentACars()

/*Función que permite capturar lo que el usuario ingresa en el formulario para luego mandarlo a la función correspondiente en el controller.
 Cuando la función getHotels que se encuentra en HotelController termina, responde con un array de alojamientos que va a ser mostrado en la 
 interfaz gráfica correspondiente. */
function getHotels() {

    var parametros = {
        "hotelType": document.hotel.hotelType.value,
        "turisticZone": document.hotel.turisticZone.value
    };
    $.ajax
        (
            {
                data: parametros,
                url: '?controlador=Hotel&accion=getHotels',
                type: 'post',
                beforeSend: function () {
                    $("#recommendations").html("<b>Estamos realizando la búsqueda, \n\ espere por favor...</b>");
                },
                success: function (response) {
                    $("#recommendations").html(response);
                }
            }
        );

}//Fin getHotels()