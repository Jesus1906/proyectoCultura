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
      url:'../../ajax/consulta/administrador',
      type:'POST',
      data:{dato, filtro},
      success:function(response){
         let tablas = JSON.parse(response);
         let plantilla = '';

         tablas.forEach(tabla =>{
            plantilla+=`
            <tr valor = "${tabla.matriculaAdjunto}" class = "editarValor">
               <th valor = "${tabla.matriculaAdjunto}" class="editarValor" >${tabla.matriculaAdjunto}</th>
               <td valor = "${tabla.firstName} ${tabla.secondName} class = "editarValor">${tabla.firstName} ${tabla.secondName}</td>
               <td valor = "${tabla.firstLastName}" class = "editarValor"> ${tabla.firstLastName}</td>
               <td valor = "${tabla.secondLastName}" class = "editarValor"> ${tabla.secondLastName}</td>
               <td valor = "${tabla.phone}" class = "editarValor"> ${tabla.phone}</td>
               <td valor = "${tabla.email}" class = "editarValor"> ${tabla.email}</td>
            </tr>
            `;
            $('#datosTabla').html(plantilla);
         })//foreach
      }//fin de funcion success
   })//fin de funciaon ajax
};



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
