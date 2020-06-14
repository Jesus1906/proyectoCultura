let cursos = 0
let plantilla = '';
let indiceNivel = 0;
let turno = '';
let img = document.getElementById('imgCurso');

$(document).ready(mostrar(cursos, plantilla, indiceNivel));

function mostrar(cursos, plantilla, indiceNivel) {
    $.ajax({
        url: '../../ajaxCursosPeriodo',
        type: 'POST',
        data: {},
        success: function (response) {
            console.log(response);

            //la respuesta del controlador se obtiene como cadena de texto
            //json parse es para regresarla a objeto tipo json(que es directamente como se extrae de la base de datos)
            cursos = JSON.parse(response);
            plantilla = '';
            indiceNivel = 1;
            let indiceCurso = 0;
            plantilla += `
                            <li id = "items_en_uso">Nivel ${indiceNivel}
                    `; //añadimos al template la primera linea
            cursos.forEach(curso => {

                if (curso.nivel == indiceNivel) {
                    if (curso.turno == 'V') {
                        turno = 'Vespertino';
                    } else {
                        turno = 'Matutino';
                    }
                    plantilla += `
                            <ul id = "${curso.idOferta_Cursos}">${curso.name} -<strong>${curso.turno}</strong></ul>
                            `;
                } else {
                    if (curso.turno == 'V') {
                        turno = 'Vespertino';
                    } else {
                        turno = 'Matutino';
                    }
                    plantilla += `
                            </li>
                            `;
                    indiceNivel++;
                    plantilla += `
                            <li id = "items_en_uso">Nivel ${indiceNivel}
                            <ul id = "${curso.idOferta_Cursos}">${curso.name} -<strong>${curso.turno}</strong></ul>
                            `;
                }
                indiceCurso++;
            })
            plantilla += `
                            </li>
                            `;
            document.getElementById('panelLateral').innerHTML = plantilla;
        } //fin de funcion success
    })
    $('body').on('click', '#items_en_uso ul', function () {
        //alert($(this).attr('id'));
        listas($(this).attr('id'));
        //$('#imgCurso').attr('href','Uploads/cursos/img/' + cursos[$(this).attr('id')]['photo']);
        //console.log(cursos[$(this).attr('id')]['name']);
    })
}

function listas(id) {
    $.ajax({
        url: '../../ajaxListasOferta',
        type: 'POST',
        data: { id },
        success: function (response) {
            console.log(response);
            let registros = JSON.parse(response);
            let plantilla = '';
            if (registros.length != 0) {
                registros.forEach(registro => {
                    plantilla += `
                        <tr>
                        <th scope = "row"> ${registro.matriculaAlumno} </th>
                        <td> ${registro.firstName} ${registro.secondName} </td>
                        <td> ${registro.firstLastName}</td>
                        <td> ${registro.secondLastName}</td>
                        </tr>
                     `;
                    //if (registro.calificacion == null) {
                    //    plantilla += `
                    //    <td>0</td>
                    //    </tr>
                    //    `;
                    //} else {
                    //    plantilla += `
                    //    <td> ${registro.calificacion}</td>
                    //    </tr>
                    //    `;
                    //}
                    document.getElementById('datosTabla').innerHTML = plantilla;
                })
                //foreach
            }else{
                alert('el curso seleccionado no tiene alumnos');
            }

        }//fin de funcion success
    })
}