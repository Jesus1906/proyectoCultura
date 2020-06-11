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
      mostrar('', 'all');
   }else{
      mostrar(dato,filtro);
   }//else dato mayor a 0
})

//funcion par aactualizar la tabla por medio de busuea

function mostrar(dato, filtro){

   //a un objeto ajax se le da l url a acceder, el tipo de peticion, los datos que se enviaran y en caso de ser xitoso que funcion realizar
   $.ajax({
      url:'../../ajaxPago',
      type:'POST',
      data:{dato, filtro},
      success:function(response){
         console.log(response);
         let tablas = JSON.parse(response);
         let plantilla = '';

         tablas.forEach(tabla =>{
            plantilla+=`
            <tr>
               <th scope = "row"> ${tabla.matriculaAlumno} </th>
                  <td> ${tabla.firstName} ${tabla.secondName} </td>
                  <td> ${tabla.firstLastName}</td>
                  <td> ${tabla.secondLastName}</td>
                  <td> CURSO</td>
               `;
               if(tabla.pago == 0){
                  plantilla+=`
                  <td><select class="custom-select opcionPago" name="estatusPago" valor = "${tabla.matriculaAlumno}" id = "estatusPago">
                  <option value="1">Si</option>
                  <option value="0" selected>No</option>
                  </select></td>
                  </tr>
                  `;
               }else{
                  plantilla+=`
                  <td><select class="custom-select opcionPago" name="estatusPago" valor = "${tabla.matriculaAlumno}" id = "estatusPago">
                  <option value="1" selected>Si</option>
                  <option value="0">No</option>
                  </select></td>
                  </tr>
                  `;
               }
            $('#datosTabla').html(plantilla);
         })//foreach
      }//fin de funcion success
   })//fin de funciaon ajax
};



//Obtener valores para Editar
$(document).on("change", ".opcionPago", function(){
   let id = $(this)[0];
   let valor = $(id).attr('valor');
   let form = {
      id: valor,
      pago: $('#estatusPago').val(),
   };
   $.post('../../ajaxPago/editar', form, function(response){
      console.log(response);
      mostrar('','all');
   })

});

//IMPRIMIR
function tabletoPDF(){
   var printMe = document.getElementById('miTabla');
   var wme = window.open("","","width:700, heigth:900");
   wme.document.write(printMe.outerHTML);
   wme.document.close();
   wme.focus();
   wme.print();
   wme.close();

}
