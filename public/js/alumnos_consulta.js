//funcion para tablas asincronas
//por medio de jquery se selecciona el campo y se le agrega un event listener
$('#BusquedaCampo').keyup(function(e){
   //let para tomar el dato del keyup y del filtro
   let dato = $('#BusquedaCampo').val();
   let filtro = $('#inputState').val();
   if(dato.length == 0){
      //si el dato esta vacio mostrar todos los registros
      //aun no coloco los registros
      $.ajax({
         url:'../../ajax',
         type:'POST',
         data:{filtro},
         success:function(response){
            //la respuesta del controlador se obtiene como cadena de texto
            //json parse es para regresarla a objeto tipo json(que es directamente como se extrae de la base de datos)
            let tablas = JSON.parse(response);
            let plantilla = '';

            tablas.forEach(tabla =>{
               plantilla+=`
                  <tr>
                     <th scope = "row"> ${tabla.matriculaAlumno} </th>
                        <td> ${tabla.firstName} ${tabla.secondName} </td>
                        <td> ${tabla.firstLastName}</td>
                        <td> ${tabla.secondLastName}</td>
                        <td> ${tabla.email}</td>
                        <td> ${tabla.Lider_Celula_id}</td>
                        <td> ${tabla.cellPhone}</td>
                        <td> ${tabla.serviseStatus}</td>
                        <td> ${tabla.birthday} </td>
                  </tr>
               `;

               document.getElementById('datosTabla').innerHTML = plantilla;
            })//foreach
         }//fin de funcion success
      })//fin de funciaon ajax
   }else{
      //a un objeto ajax se le da l url a acceder, el tipo de peticion, los datos que se enviaran y en caso de ser xitoso que funcion realizar
      $.ajax({
         url:'../../ajax',
         type:'POST',
         data:{dato, filtro},
         success:function(response){
            //la respuesta del controlador se obtiene como cadena de texto
            //json parse es para regresarla a objeto tipo json(que es directamente como se extrae de la base de datos)
            let tablas = JSON.parse(response);
            let plantilla = '';

            tablas.forEach(tabla =>{
               plantilla+=`
                  <tr>
                     <th scope = "row"> ${tabla.matriculaAlumno} </th>
                        <td> ${tabla.firstName} ${tabla.secondName} </td>
                        <td> ${tabla.firstLastName}</td>
                        <td> ${tabla.secondLastName}</td>
                        <td> ${tabla.email}</td>
                        <td> ${tabla.Lider_Celula_id}</td>
                        <td> ${tabla.cellPhone}</td>
                        <td> ${tabla.serviseStatus}</td>
                        <td> ${tabla.birthday} </td>
                  </tr>
               `;

               document.getElementById('datosTabla').innerHTML = plantilla;
            })//foreach
         }//fin de funcion success
      })//fin de funciaon ajax
   }//else dato mayor a 0
})
