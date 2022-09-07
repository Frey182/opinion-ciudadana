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

    if (contrasenia.value == confirmContrasenia.value & 
        contrasenia.value.length >= 1 & 
        confirmContrasenia.value.length >= 1) {

        slider1.classList.add('d-none');
        slider2.classList.remove('d-none');

        contrasenia.classList.remove('border-danger');
        confirmContrasenia.classList.remove('border-danger');

    } else if (contrasenia.value == "" & confirmContrasenia.value == "") {

        contrasenia.classList.add('border-danger');
        confirmContrasenia.classList.add('border-danger');

    } else {

        contrasenia.classList.add('border-danger');
        confirmContrasenia.classList.add('border-danger');

    }

});

btnSlider2.addEventListener('click', function() {

    slider2.classList.add('d-none');
    slider3.classList.remove('d-none');

});

btnSliderBack1.addEventListener('click', function() {

    slider2.classList.add('d-none');
    slider1.classList.remove('d-none');

});

btnSliderBack2.addEventListener('click', function() {

    slider3.classList.add('d-none');
    slider2.classList.remove('d-none');

});