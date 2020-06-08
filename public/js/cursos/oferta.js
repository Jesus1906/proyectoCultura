let cursos = 0;
let plantilla = '';
let indiceNivel = 0;
let img = document.getElementById('imgCurso');
let idCurso = document.getElementById('idCurso')
$(document).ready(mostrar(cursos, plantilla, indiceNivel));

function mostrar(cursos, plantilla, indiceNivel) {
    $.ajax({
        url: '../../ajaxCursos',
        type: 'POST',
        data: {},
        success: function (response) {
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
                    plantilla += `
                            <ul id = "${indiceCurso}">${curso.name}</ul>
                            `;
                } else {
                    plantilla += `
                            </li>
                            `;
                    indiceNivel++;
                    plantilla += `
                            <li id = "items_en_uso">Nivel ${indiceNivel}
                            <ul id = "${indiceCurso}">${curso.name}</ul>
                            `;
                }
                indiceCurso++;
            })
            plantilla += `
                            </li>
                            `;
            document.getElementById('panelLateral').innerHTML = plantilla;
            if (cursos.length >= 1) {
                document.getElementById('nombreCurso').innerHTML = cursos[0]['name'];
                document.getElementById('descripcion').innerHTML = cursos[0]['descripcion'];
                img.src = '../../Uploads/cursos/img/' + cursos[0]['photo'];
                idCurso.value = cursos[0]['idCurso'];
                
                //$('#imgCurso').attr('href','Uploads/cursos/img/' + cursos[0]['photo']);
            }
        } //fin de funcion success
    })
    $('body').on('click', '#items_en_uso ul', function () {
        //alert($(this).attr('id'));
        document.getElementById('nombreCurso').innerHTML = cursos[$(this).attr('id')]['name'];
        document.getElementById('descripcion').innerHTML = cursos[$(this).attr('id')]['descripcion'];
        img.src = '../../Uploads/cursos/img/' + cursos[$(this).attr('id')]['photo'];
        idCurso.value = cursos[$(this).attr('id')]['idCurso'];
        //$('#imgCurso').attr('href','Uploads/cursos/img/' + cursos[$(this).attr('id')]['photo']);
        //console.log(cursos[$(this).attr('id')]['name']);
    })
}