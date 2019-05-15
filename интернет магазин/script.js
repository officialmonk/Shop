$("#burg").on('click', function(){
    $(".mobile").slideToggle();
    $(".slider").slideToggle();
})
var slides = document.querySelectorAll('#slides .sliders');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,1000000000);

function nextSlide() {
 slides[currentSlide].className = 'sliders';
 currentSlide = (currentSlide+1)%slides.length;
 slides[currentSlide].className = 'sliders showing';
}
