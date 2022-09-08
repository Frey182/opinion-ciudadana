const slider1 = document.getElementById('slider1');
const slider2 = document.getElementById('slider2');
const slider3 = document.getElementById('slider3');

const btnSlider1 = document.getElementById('btnSlider1');
const btnSlider2 = document.getElementById('btnSlider2');

const btnSliderBack1 = document.getElementById('btnSliderBack1');
const btnSliderBack2 = document.getElementById('btnSliderBack2');

const contrasenia = document.getElementById('contrasenia');
const confirmContrasenia = document.getElementById('confirmContrasenia');

btnSlider1.addEventListener('click', function() {

    // si las contraseñas son iguales y no están vacíos
    if (contrasenia.value == confirmContrasenia.value & 
        contrasenia.value.length >= 1 & 
        confirmContrasenia.value.length >= 1) {

        // ocultamos el slider 1 y visualizamos el slider 2
        slider1.classList.add('d-none');
        slider2.classList.remove('d-none');
        
        // removemos los bordes en caso de que estén activos
        contrasenia.classList.remove('border-danger');
        confirmContrasenia.classList.remove('border-danger');

    } else {

        // les añadimos bordes rojos
        contrasenia.classList.add('border-danger');
        confirmContrasenia.classList.add('border-danger');

    }

});

// para deslizarse al slider 3
btnSlider2.addEventListener('click', function() {

    slider2.classList.add('d-none');
    slider3.classList.remove('d-none');

});

// para retroceder al slider 2
btnSliderBack1.addEventListener('click', function() {

    slider2.classList.add('d-none');
    slider1.classList.remove('d-none');

});

// para retroceder al slider 1
btnSliderBack2.addEventListener('click', function() {

    slider3.classList.add('d-none');
    slider2.classList.remove('d-none');

});