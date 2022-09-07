const slider1 = document.getElementById('slider1');
const slider2 = document.getElementById('slider2');
const slider3 = document.getElementById('slider3');

const btnSlider1 = document.getElementById('btnSlider1');
const btnSlider2 = document.getElementById('btnSlider2');
const btnSlider3 = document.getElementById('btnSlider3');

btnSlider1.addEventListener('click', function() {

    slider1.classList.add('d-none');
    slider2.classList.remove('d-none');

});

btnSlider2.addEventListener('click', function() {

    slider2.classList.add('d-none');
    slider3.classList.remove('d-none');

});