//funcion para tablas asincronas

$(document).ready(mostrar('','all'));

//por medio de jquery se selecciona el campo y se le agrega un event listener
$('#BusquedaCampo').keyup(function(e){
   //let para tomar el dato del keyup y del filtro
   let dato = $('#BusquedaCampo').val();
   let filtro = $('#inputState').val();

   if(dato.length == 0){
      //si el dato esta vacio mostrar todos los registros
      //aun no coloco los registros
      mostrar(dato, filtro);
   }else{
      mostrar(dato,filtro);
   }//else dato mayor a 0
})
//funcion par aactualizar la tabla por medio de busuea



$(document).on('click', '.editar',function(){

   let id = $(this)[0].parentElement.parentElement;
   let valor = $(id).attr('valor');
   let hermano = $(this)[0].parentElement.parentElement.siblings;
   let campo = `<input type="text" value = ${valor} class="form-control form-control-sm ml-3 w-75">`;
   // $(this).html(campo);
   console.log(hermano);
})

function mostrar(dato, filtro){

   //a un objeto ajax se le da l url a acceder, el tipo de peticion, los datos que se enviaran y en caso de ser xitoso que funcion realizar
   $.ajax({
      url:'../../ajaxLider',
      type:'POST',
      data:{dato, filtro},
      success:function(response){
         let tablas = JSON.parse(response);
         let plantilla = '';

         tablas.forEach(tabla =>{
            plantilla+=`
            <tr valor = "${tabla.id}" class = "editarValor">
               <th valor = "${tabla.firstName} ${tabla.secondName} class = "editarValor">${tabla.firstName} ${tabla.secondName}</th>
               <td valor = "${tabla.firstLastName}" class = "editarValor"> ${tabla.firstLastName}</td>
               <td valor = "${tabla.secondLastName}" class = "editarValor"> ${tabla.secondLastName}</td>
               <td valor = "${tabla.phone}" class = "editarValor"> ${tabla.phone}</td>
               <td><button class="btn editar">Edt</button></td>
            </tr>
            `;
            $('#datosTabla').html(plantilla);
         })//foreach
      }//fin de funcion success
   })//fin de funciaon ajax
}
