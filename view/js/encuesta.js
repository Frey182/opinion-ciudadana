const radios = document.getElementById('radios');

function cambiarTipoPubli() {

    const tipoPubli = document.getElementById('tipo_publi');
    let valueTipoPubli = tipoPubli.value;

    if (valueTipoPubli == 'encuesta') {

        radios.classList.remove('d-none');
        
    } else {
        
        radios.classList.add('d-none');

    }

}