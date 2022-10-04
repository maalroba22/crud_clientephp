$(document).ready(function () {

})

/**
 * @description : Listar todos los clientes
 */

function getAllClient() {
    $.ajax({
        type: "POST",
        url: "../../controllers/clientes.php",
        data: { opcn: 'getAllClient' },
        dataType: "json",
        success: function (response) {
            console.log('response')
        }
    })
        .fail(function () {
            console.log('error')
        })

}
