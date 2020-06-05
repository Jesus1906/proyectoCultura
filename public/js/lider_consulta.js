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
               <td><div class="text-center"><button class="btn btn-primary btn-sm editar"><i class="fas fa-edit"></i></button></div></td>
            </tr>
            `;
            $('#datosTabla').html(plantilla);
         })//foreach
      }//fin de funcion success
   })//fin de funciaon ajax
};

function consultar(id){
   $.ajax({
      url:'../../ajaxLider/consulta',
      type:'POST',
      data:{id},
      success:function(response){
         let tablas = JSON.parse(response);
         let plantilla = '';

         tablas.forEach(tabla =>{
            plantilla+=`
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                     <label for="" class="col-form-label">Primer Nombre</label>
                     <input type="text" class="form-control" id="firstName" name="firstName" value="${tabla.firstName}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                     <label for="" class="col-form-label">Segundo Nombre</label>
                     <input type="text" class="form-control" id="secondName" name="secondName"value="${tabla.secondName}">
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                     <label for="" class="col-form-label">Apellido Paterno</label>
                     <input type="text" class="form-control" id="firstLastName" name="firstLastName" value="${tabla.firstLastName}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                     <label for="" class="col-form-label">Apellido Materno</label>
                     <input type="text" class="form-control" id="secondLastName" name="secondLastName" value="${tabla.secondLastName}">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="" class="col-form-label">Telefono</label>
                  <input type="tel" class="form-control" id="phone" name="phone" value="${tabla.phone}"
                  data-toggle="tooltip" data-placement="left" title="Inserta tu número en el siguiente formato: 55-11-22-33-44"
                  pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
                 </div>
              </div>
            </div>
            `;
            $('#modal-body').html(plantilla);
         })//foreach
      }//fin de funcion success
   })//fin de funciaon ajax
}

//Editar
$(document).on("click", ".editarValor", function(){
   let id = $(this)[0];
   let valor = $(id).attr('valor');
   consultar(valor);
   $('#modalCRUD').modal('show');

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
