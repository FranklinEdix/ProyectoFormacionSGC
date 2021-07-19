let $facultad = document.getElementById('facultad')
let $escuela = document.getElementById('escuela')

let facultad=['Ingenieria','MINAS','MEDICINA','CIENCIAS DE LA SALUD','ODONTOLOGIA','CIENCIAS EMPRESARIALES','CIENCIAS ECONOMICAS CONTABLES','DERECHO',
              'EDUCACION','CIENCIAS AGROPECUARIAS', 'CIENCIAS DE LA COMUNICACION']

let escuela=[ 'Ambiental','Civil','Metalurgia','Sistemas y computación','Geologia',
            'MINAS',
            'MEDICINA HUMANA',
            'ENFERMERIA','OBSTRETRICIA',
            'ODONTOLOGIA',
            'ADMINISTRACION',
            'ECONOMIA', 'CONTABILIDAD',
            'DERECHO Y CIENCIAS POLITICAS',
            'EDUCACION INICIAL', 'EDUCACION SECUNDARIA','EDUCACION PRIMARIA',
            'AGRONOMIA','ZOOTECNIA', 'INDUSTRIAS ALIMENTARIAS',
            'CIENCIAS DE LA COMUNICACION']

function mostrarFacultad(arreglo, lugar){
    let elementos= '<option selected disables>--Seleccione--</option>'

    for(let i=0; i < arreglo.length; i++){
        elementos +='<option value="' + arreglo[i] +'">'+
        arreglo[i] +'</option>'
     }
        lugar.innerHTML = elementos
    }

    mostrarFacultad(facultad, $facultad)

    function recortar(array, inicio, fin, lugar){
        let recortar = array.slice(inicio, fin)
        mostrarFacultad(recortar, lugar)
    }

    $facultad.addEventListener('change', function(){
        let valor=$facultad.value

        switch(valor){
            case 'Ingenieria' :
                    recortar(escuela, 0, 5, $escuela)
            break
            case 'MINAS' :
                recortar(escuela, 5, 6, $escuela)
            break
            case 'MEDICINA':
                recortar(escuela, 6, 7, $escuela)
            break
            case 'CIENCIAS DE LA SALUD':
                recortar(escuela, 7, 9, $escuela)
            break
            case 'ODONTOLOGIA':
                recortar(escuela, 9, 10, $escuela)
            break
            case 'CIENCIAS EMPRESARIALES':
                recortar(escuela, 10, 11, $escuela)
            break
            case 'CIENCIAS ECONOMICAS CONTABLES':
                recortar(escuela, 11, 13, $escuela)
            break
            case 'DERECHO':
                recortar(escuela, 13, 14, $escuela)
            break
            case 'EDUCACION':
                recortar(escuela, 14, 17, $escuela)
            break
            case 'CIENCIAS AGROPECUARIAS':
                recortar(escuela, 17, 20, $escuela)
            break
            case 'CIENCIAS DE LA COMUNICACION':
                recortar(escuela, 20, 21, $escuela)
            break
        }
    })