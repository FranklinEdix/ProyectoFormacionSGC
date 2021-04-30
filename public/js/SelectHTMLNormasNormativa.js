function cargarTablaNormas() {
    const datosNormas = [
        {
            id: 1,
            puntosNorma: "07.4",
            descripcion: "Comunicación",
            origen: "ISO 9001:2015/07",
        },
        {
            id: 2,
            puntosNorma: "07.4",
            descripcion: "Planificación y Control",
            origen: "ISO 9001:2015/08",
        },
        {
            id: 3,
            puntosNorma: "07.4",
            descripcion: "Identificacion y Trazabilidad",
            origen: "ISO 9001:2015/08.5",
        }
    ];
    const $cuerpoTabla = document.querySelector("#cuerpoTabla");
    datosNormas.forEach((datosNorma) => {
        const $tr = document.createElement("tr");//CREAMOS LA FILA 

        let $tdCodigo = document.createElement("td");//PRIMERA COLUMNA
        $tdCodigo.textContent = datosNorma.id;
        $tr.appendChild($tdCodigo);

        let $tdpuntosNorma = document.createElement("td");//SEGUNDA COLUMNA
        $tdpuntosNorma.textContent = datosNorma.puntosNorma;
        $tr.appendChild($tdpuntosNorma);

        let $tddescripcion = document.createElement("td");//TERCERA COLUMNA
        $tddescripcion.textContent = datosNorma.descripcion;
        $tr.appendChild($tddescripcion);

        let $tdorigen = document.createElement("td");//CUARTA COLUMNA
        $tdorigen.textContent = datosNorma.origen;
        $tr.appendChild($tdorigen);

        let $tdbotoneditar = document.createElement("td");//QUINTA COLUMNA
        let $button = document.createElement('button');
        $button.type = 'button';
        $button.innerHTML = 'EDITAR';
        $button.className = 'btn btn-success btn-circle btn-sm';
        $tdbotoneditar.appendChild($button);
        $tr.appendChild($tdbotoneditar);

        let $tdbotoneactualizar=document.createElement("td");//SEXTA COLUMNA
        let $buttonactualizar = document.createElement('button');
        $buttonactualizar.type = 'button';
        $buttonactualizar.innerHTML = 'ACTUALIZAR';
        $buttonactualizar.className = 'btn btn-warning btn-circle btn-sm'
        $tdbotoneactualizar.appendChild($buttonactualizar);
        $tr.appendChild($tdbotoneactualizar);

        let $tdbotoneborrar = document.createElement("td");//SEPTIMA COLUMNA
        let $buttonborrar = document.createElement('button');
        $buttonborrar.type = 'button';
        $buttonborrar.innerHTML = 'BORRAR';
        $buttonborrar.className = 'btn btn-danger btn-circle btn-sm'
        $tdbotoneborrar.appendChild($buttonborrar);
        $tr.appendChild($tdbotoneborrar);

        $cuerpoTabla.appendChild($tr);
    });
    console.log("Tabla Cargada");
}
