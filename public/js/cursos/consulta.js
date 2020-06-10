let cursos = 0;
let plantilla = '';
let indiceNivel = 0;
let img = document.getElementById('imgCurso');

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
                document.getElementById('manual').innerHTML = cursos[0]['manual'];
                document.getElementById('examen').innerHTML = cursos[0]['examen'];
                document.getElementById('hoja').innerHTML = cursos[0]['answers'];
                document.getElementById('nivel').innerHTML = cursos[0]['nivel'];
                document.getElementById('subnivel').innerHTML = cursos[0]['subnivel'];
                img.src = '../../Uploads/cursos/img/' + cursos[0]['photo'];
                //$('#imgCurso').attr('href','Uploads/cursos/img/' + cursos[0]['photo']);
            }
        } //fin de funcion success
    })
    $('body').on('click', '#items_en_uso ul', function () {
        //alert($(this).attr('id'));
        document.getElementById('nombreCurso').innerHTML = cursos[$(this).attr('id')]['name'];
        document.getElementById('descripcion').innerHTML = cursos[$(this).attr('id')]['descripcion'];
        document.getElementById('manual').innerHTML = cursos[$(this).attr('id')]['manual'];
        document.getElementById('examen').innerHTML = cursos[$(this).attr('id')]['examen'];
        document.getElementById('hoja').innerHTML = cursos[$(this).attr('id')]['answers'];
        document.getElementById('nivel').innerHTML = cursos[$(this).attr('id')]['nivel'];
        document.getElementById('subnivel').innerHTML = cursos[$(this).attr('id')]['subnivel'];
        img.src = '../../Uploads/cursos/img/' + cursos[$(this).attr('id')]['photo'];
        //$('#imgCurso').attr('href','Uploads/cursos/img/' + cursos[$(this).attr('id')]['photo']);
        //console.log(cursos[$(this).attr('id')]['name']);
    })
}