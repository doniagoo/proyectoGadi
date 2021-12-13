let indice=1;
muestrarSlides(indice);

function avanzaSlide(n){
    muestrarSlides(indice+=n);
}
function posicionSlide(){
    muestrarSlides(indice=n);
}
setInterval(function tiempo(){
    muestrarSlides(indice+=1)
},4000)
function muestrarSlides(n){
    let i;
    let slides = document.getElementsByClassName('miSlider');
    let barras = document.getElementsByClassName('barra');

    if(n > slides.length){
        indice = 1;
    }
    if(n<1){
        indice=slides.length;
    }
    for(i=0;i < slides.length;i++){
        slides[i].style.display='none';
    }
    for(i=0;i < barras.length;i++){
        barras[i].className = barras[i].className.replace(" active","");
    }
    slides[indice-1].style.display='block';
    barras[indice-1].className+=' active';
}