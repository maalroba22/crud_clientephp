$(document).ready(function () {
getAllClient()
})

/**
 * @description : Listar todos los clientes
 */

function getAllClient() {
    $.ajax({
        type: "POST",
        url: "../controllers/client.php",
        data: { opcn: 'getAllClient' },
        dataType: "json",
        success: function (response) {
            console.log(response)
        }    
    }) .fail(function () {
            console.log('error')
        })

}


