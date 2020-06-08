
$(document).ready(mostrarLateral());

function mostrarLateral(){
   $.ajax({
      url: '../../ajaxCursos',
      type: 'POST',
      data: {},
      success: function (response) {
           //la respuesta del controlador se obtiene como cadena de texto
           //json parse es para regresarla a objeto tipo json(que es directamente como se extrae de la base de datos)
           cursos = JSON.parse(response);
           let contador = 0;
           plantilla = '<h5>Seleccione el curso</h5>';

           cursos.forEach(nivel =>{
             if(nivel.nivel > contador ){
                contador = nivel.nivel
                plantilla+=`<h6 id = "${nivel.nivel}">Nivel ${nivel.nivel}</h6>`;
             }//if nivel1
             plantilla+=`
               <ul><li class="curso" idCurso= "${nivel.idCurso}">${nivel.name}</li></ul>
             `;
          })//foreach
           $("#panelLateral").html(plantilla);
      } //fin de funcion success
   })
}

function buscarCurso(id){
   $.ajax({
      url: '../../ajaxCursos/buscar',
      type: 'POST',
      data: {id},
      success: function (response) {
         cursos = JSON.parse(response);

         let datosCurso =`
            <h3> ${cursos[0].name} </h3>
            <img src="../../Uploads/cursos/img/${cursos[0].photo}" alt="Responsive image" height="360px">
            <p><strong>${cursos[0].descripcion}</strong> </p>
            `;

         let nombreCurso =`
            <input type="text" name ="idCurso" value = "${cursos[0].idCurso}"hidden id="idCurso">
            <input type="text" class="form-control" placeholder="Nombre del Curso" name ="name" value = "${cursos[0].name}" id = "eNombreCurso">
         `;
         let nivelCurso = `
            <input type="text" class="form-control" placeholder="Nivel" name = "nivel" value="${cursos[0].nivel}" id ="eNivelCurso">
         `;
         let subnivelCurso = `
            <input type="text" class="form-control" placeholder="Subnivel" name = "subnivel" value="${cursos[0].subnivel}" id = "eSubnivelCurso" >
         `;
         let descripcionCurso = `
            <input type="text" class="form-control" placeholder="Escriba una Descripción del Curso" name = "descripcion" value="${cursos[0].descripcion}" id = "eDescripcionCurso">
         `;
         let temarioCurso=`
         <div class="col-md-5">
             <input type="file" class="btn btn-outline-primary"name = "temario" id = "eTemarioCurso">
         </div>
         <h5>${cursos[0].temario}</h5>
         `;
         let manualCurso=`
         <div class="col-md-5">
             <input type="file" class="btn btn-outline-primary" name = "manual" id = "eManualCurso">
         </div>
         <h5>${cursos[0].manual}</h5>
         `;
         let examenCurso=`
         <div class="col-md-5">
             <input type="file" class="btn btn-outline-primary" name = "examen" id = "eExamenCurso">
         </div>
         <h5>${cursos[0].examen}</h5>
         `;
         let respuestasCurso=`
         <div class="col-md-5">
             <input type="file" class="btn btn-outline-primary" name = "answers" id = "eRespuestasCurso">
         </div>
         <h5>${cursos[0].answers}</h5>
         `;
         let fotoCurso=`
         <div class="col-md-5">
             <input type="file" class="btn btn-outline-primary" name = "photo" id = "eFotoCurso">
         </div>
         <h5>${cursos[0].photo}</h5>
         `;
         $('#datosCurso').html(datosCurso);

         $('#nombreCurso').html(nombreCurso);
         $('#nivelCurso').html(nivelCurso);
         $('#subnivelCurso').html(subnivelCurso);
         $('#descripcionCurso').html(descripcionCurso);

         $('#temarioCurso').html(temarioCurso);
         $('#manualCurso').html(manualCurso);
         $('#examenCurso').html(examenCurso);
         $('#respuestasCurso').html(respuestasCurso);
         $('#fotoCurso').html(fotoCurso);
      } //fin de funcion success
   })
}

$(document).on("click", ".curso", function(){
   let idCurso = $(this).attr('idCurso');
   buscarCurso(idCurso);
});
