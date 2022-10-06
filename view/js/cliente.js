
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
                            <i class="bi bi-journal-check update" id="buscar"data-id="${el.id_cliente}"></i>
                            <i class="bi bi-trash3 delete" data-id="${el.id_cliente}"></i>
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
/* data-bs-toggle="modal" data-bs-target="#modalActualizar" data-bs-whatever="@mdo" */

/**
 * @description: Evento para Mostrar la Modal
 */

/* $('body').on('click','#btn_modal',()=>{
  console.log('estoy en el btn del index')
    $('#madalCliente').modal('show') 
 /*   document.getElementById('frmCliente').reset(); */
//})

/**
 * @name Guardar Clientes
 * @description Evento Guarda cliente
 */

$("#modalCliente").on('click', '#guardarCliente', (e) => {
    e.preventDefault();
    let data = $('#frmCliente').serializeArray()
    data.push({ name: 'opcn', value: 'crear' })
    $.ajax({
        type: "POST",
        url: urlCliente,
        data: data,
        dataType: "json",
        success: function (response) {
            $('#modalCliente').modal('hide')
            swal.fire({
                title: "Exito",
                text: `Cliente Agregado con Exito`,
                icon: "success",
                position: "center",
                timer: 3000,
                timerProgressBar: true,
            });
            getAllClient();
        }
    })
        .fail(() => {
            console.log('error')
        })
});



$('body').on('click', '.update', function (e) {
    e.preventDefault()
    let id = $(this).data('id')
    $.ajax({
        type: "POST",
        url: urlCliente,
        data: { opcn: 'buscarId', id },
        dataType: "json",
        success: function (res) {
          let data = res.map(el=>{
              $('#modalActualizar').modal('show')
              $('#id').val(el.id_cliente)
              $('#nombreb').val(el.nombre_c)
              $('#apellidob').val(el.apellido_c)
              $('#direccionb').val(el.direccion)
              $('#telefonob').val(el.telefono)
          })
          
        }
    });

});



/**
 * @name Actualizar Cliente
 * @description actualizar cliente
 */
$("#editarCliente").click((e) => {
    e.preventDefault()
    let data = $('#frmActualiza').serializeArray()
    data.push({
        name: 'ocpn',
        value: 'update'
    })

    $.ajax({
        type: "POST",
        url: "../controllers/client.php",
        data: data,
        dataType: "json",
        success: function (response) {
            console.log(response)
        }
    });



})

/* $("#guardarCliente").click(function (e) { 
    e.preventDefault();
    alert('estoy funcionando')
    
}); */