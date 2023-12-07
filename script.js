const $form = document.forms[0];
console.log($form);
let $nombre = $form.elements.nombre;
let $apellido = $form.elements.apellido;
let $cantidad = $form.elements.cantidad;
let $categoria = $form.elements.categoria;
let $correo = $form.elements.correo;





$form.addEventListener("reset", (event) => {
    let alertOk = document.getElementById("alertOk");;
    if (alertOk != null) {
        $form.removeChild(alertOk.parentElement);
    }
    let alertError = document.getElementById("alertRTAError");;
    if (alertError != null) {
        $form.removeChild(alertError.parentElement);
    }

});
$form.addEventListener('submit', (event) => {
    event.preventDefault();
    let nombre = $nombre.value;
    let apellido = $apellido.value;

    let correo = $correo.value;
    let cantidad = $cantidad.value;
    let categoria = $categoria.value;
    console.log(cantidad);
    console.log(categoria);


    let errores = [];
    if (nombre.trim() == "") errores.push(" nombre invalido");
    if (apellido.trim() == "") errores.push(" apellido invalido");
    if (correo.trim() == "") errores.push(" correo invalido");

    if (cantidad.trim() == "" || (cantidad > 10 && cantidad < 1)) errores.push(" cantidad invalida invalido");
    if (categoria != 1 && categoria != 2 && categoria != 3) errores.push(" categoria  invalida");

    if (errores.length > 0) {
        console.log(errores);

        let alertOk = document.getElementById("alertOk");;
        if (alertOk != null) {
            $form.removeChild(alertOk.parentElement);
        }
        let alertError = document.getElementById("alertRTAError");;
        if (alertError != null) {
            $form.removeChild(alertError.parentElement);
        }

        let alert = document.createElement("DIV");
        let mensajeError = errores.join("-");
        alert.innerHTML = '<div id="alertRTAError" class="alert alert-danger" role="alert">' + mensajeError + '</div>';
        $form.appendChild(alert);


    } else {
        let alertError = document.getElementById("alertRTAError");;
        if (alertError != null) {
            $form.removeChild(alertError.parentElement);
        }
        let alertOk = document.getElementById("alertOk");;
        if (alertOk != null) {
            $form.removeChild(alertOk.parentElement);
        }

        let total = calcularTotalAPagar(categoria, cantidad);
        let alert = document.createElement("DIV");
        alert.innerHTML = '<div id="alertOk" class="alert alert-primary" role="alert"> total a pagar es: ' + total + '</div>';
        $form.appendChild(alert);

    }


    function calcularTotalAPagar(categoria, cantidad) {
        let precio = 200;
        let descuento = 0;
        let total = 0;
        let descuento_estudiante = 0.80;
        let descuento_trainne = 0.50;
        let descuento_junior = 0.15;
        console.log("recibo en funcion");
        console.log(categoria);
        console.log(cantidad);

        if (isNaN(categoria) || isNaN(cantidad)) {
            return -1;
        }
        switch (categoria) {
            case "1":
                console.log("entre case 1");
                descuento = precio * descuento_estudiante;
                console.log(descuento);
                total = (precio - descuento) * cantidad;
                break;
            case "2":
                console.log("entre case 2");
                descuento = precio * descuento_trainne;
                total = (precio - descuento) * cantidad;
                break;
            case "3":
                console.log("entre case 3");
                descuento = precio * descuento_junior;
                total = (precio - descuento) * cantidad;
                break;
            default:
                console.log("entre case default");
                total = precio * cantidad;
                break;
        }
        return total;

    }






});