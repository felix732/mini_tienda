const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

setInterval(() => {
    moveToRight()
}, 3000);


let operacion = 0,
    counter = 0,
    widthImg = 100 / sliderSection.length;

function moveToRight() {
    if (counter >= sliderSection.length-1) {
        counter = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    counter++;
    operacion = operacion + widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
}  

function moveToLeft() {
    counter--;
    if (counter < 0 ) {
        counter = sliderSection.length-1;
        operacion = widthImg * (sliderSection.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    operacion = operacion - widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
    
}   

document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
  
    menuIcon.addEventListener('click', function() {
      mobileMenu.classList.toggle('show');
      menuIcon.classList.toggle('show');
    });
  });
  
  document.addEventListener('DOMContentLoaded', () => {
    const compraButtons = document.querySelectorAll('.card__button');
    const whatsappIcon = document.querySelector('.whatsapp-icon');
  
    const modal = new bootstrap.Modal(document.getElementById('myModal'));
  
    compraButtons.forEach(button => {
      button.addEventListener('click', (event) => {
        event.preventDefault();
        modal.show();
      });
    });
  
    whatsappIcon.addEventListener('click', (event) => {
      event.preventDefault();
      modal.show();
    });
  });

  function copyToClipboard() {
    const copyText = document.querySelector('.WhatsApp');
    copyText.select();
    document.execCommand('copy');
    alert('Número copiado: ' + copyText.value);
  }
  
  