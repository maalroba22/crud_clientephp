
$(document).ready(function () {
    getAllClient()
})

/**
 * @description : Listar todos los clientes
 */
const urlCliente = "../controllers/client.php";
function getAllClient() {
    $.ajax({
        type: "POST",
        url: urlCliente,
        data: { opcn: 'getAllClient' },
        dataType: "json",
        success: function (response) {
            console.log(response)
            let data = response.map((el) => {
                return `<tr>
                            <td>${el.nombre_c}</td>
                            <td>${el.apellido_c}</td>
                            <td>${el.direccion}</td>
                            <td>${el.telefono}</td>
                            <td>
                            <i class="bi bi-trash3 delete"></i>
                            <i class="bi bi-journal-check update"></i>
                            </td>
                         </tr>
                        `                               
            })              
           $('tbody').html(data)
        }
    }).fail(function () {
        console.log('error')
    })

}


/**
 * @description: Evento para Mostrar la Modal
 */

/* $('body').on('click','#btn_modal',()=>{
  console.log('estoy en el btn del index')
    $('#madalCliente').modal('show') 
 /*   document.getElementById('frmCliente').reset(); */
//}) 

$("#modalCliente").on('click','#guardarCliente',(e)=> { 
    e.preventDefault();
    let data = $('#frmCliente').serializeArray()
    data.push({name:'opcn',value:'crear'})
    $.ajax({
        type: "POST",
        url:urlCliente,
        data: data,
        dataType: "json",
        success: function (response) {
            $('#modalCliente').modal('hide')
            swal.fire({
                title: "Exito",
                text: `Cliente Agregado con Exito`,
                icon: "success",
                position: "center",
                timer: 5000,
                timerProgressBar: true,
              });
              getAllClient();
        }
    })
    .fail(()=>{
        console.log('error')
    }) 
});


/* $("#guardarCliente").click(function (e) { 
    e.preventDefault();
    alert('estoy funcionando')
    
}); */