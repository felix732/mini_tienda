<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>WILLI Barberia-Peluqueria</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .descripcion_p {
      position: relative;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      width: 90%;
      height: 170px;
      margin: 20px auto;
      font-family: 'Arial', sans-serif;
      color: #333;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.8);
    }
    .menu-icon i {
      color: blanchedalmond;
    }
    .descripcion_p p {
      position: relative;
      z-index: 2;
      line-height: 1.6;
      font-size: 1.1rem;
    }
    .descripcion_p::before {
      content: "";
      background-image: url('img/logo.jpg');
      background-size: cover;
      background-position: center;
      opacity: 0.1;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
    }
    .publi {
      margin-bottom: 40px;
    }
    .logo img {
      width: 150px;
      height: 55px;
      display: block;
      margin: 0 auto;
    }

    @media screen and (max-width: 768px) {
      .descripcion_p {
        height: 100%;
      }
      .opciones {
      display: flex;
      flex-wrap: wrap;
      transform: translate(0%, -15%);
      justify-content: center;
      gap: 5px;
    }
    .opciones a {
      flex: 1 1 45%;
      max-width: 45%;
      text-align: center;
      margin: 10px 0;
    }
    .opciones i {
      font-size: 2rem;
    }
    }
  </style>
</head>
<body>

<!--NAV-->
<nav>
  <div class="logo">
    <img src="./img/logo_1.png" alt="logo">
  </div>
  <div class="links">
    <a href="./administrador/admin.html" class="link">Ver Diseño de Admin</a>
    <a href="./vizualizar_inicio_sesion.html" class="link">Inicio Sesion</a>
  </div>
  <div class="menu-icon">
    <i class='bx bx-menu'></i>
    <i class='bx bx-x'></i>
  </div>
</nav>
<div class="mobile-menu">
  <a href="./administrador/admin.html" class="link">Ver Diseño de Admin</a>
  <a href="./vizualizar_inicio_sesion.html" class="link">Inicio Sesion</a>
</div>
<!--FIN NAV-->

<!--CARRUSEL-->
<div class="container-carousel">
  <div class="carruseles" id="slider">
    <section class="slider-section">
      <img src="img/1.jpg">
    </section>
    <section class="slider-section">
      <img src="img/2.jpg">
    </section>
    <section class="slider-section">
      <img src="img/3.jpg">
    </section>
    <section class="slider-section">
      <img src="img/4.jpg">
    </section>
    <section class="slider-section">
      <img src="img/5.jpg">
    </section>
    <section class="slider-section">
      <img src="img/6.avif">
    </section>
    <section class="slider-section">
      <img src="img/7.jpg">
    </section>
    <section class="slider-section">
      <img src="img/8.jpg">
    </section>
    <section class="slider-section">
      <img src="img/9.jpg">
    </section>
    <section class="slider-section">
      <img src="img/10.jpg">
    </section>
  </div>
  <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
  <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
</div>
<!--FIN CARRUSEL-->

<section class="publi">
  <!--PUBLICACIONES-->
  <div class="publicaciones">
    <h2>PUBLICACIONES</h2>
    <div class="opciones" id="social-links">
      <!-- Los íconos de redes sociales se llenarán aquí dinámicamente -->
    </div>
  </div>
  <!--DESCRIPCION CORTA-->
  <div class="descripcion_p">
    <p>
      Bienvenido a Barbería y Peluquería Willi, el lugar perfecto para todas tus necesidades de belleza y estilo en un ambiente cálido y acogedor. <br>
      Nuestra barbería ofrece servicios profesionales y de calidad para caballeros, que van desde cortes de pelo y afeitado de barba, hasta tratamientos faciales y cuidado del cabello.
    </p>
  </div>
  <!--FIN PUBLICACIONES-->
</section>

<div class="contenido">
  <article class="card__article">
    <img src="img/producto_1.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_2.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_3.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_4.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_5.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_6.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_7.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_8.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_9.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>

  <article class="card__article">
    <img src="img/producto_10.jpg" alt="image" class="card__img">
    <div class="card__data">
      <span class="card__description">4.00$</span>
      <h2 class="card__title">Lorem ipsum dolor sit.</h2>
      <a href="#" class="card__button">Comprar</a>
    </div>
  </article>
</div>

<a href="#" class="whatsapp-icon" target="_blank" data-bs-toggle="modal" data-bs-target="#myModal">
  <i class='bx bxl-whatsapp'></i>
</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Si eres usuario de computadora puedes ver el número de teléfono y escribirlo desde dispositivo móvil con WhatsApp instalado. <br><br>
        <div class="copy-container">
          <input type="text" readonly class="WhatsApp" value="04169055705">
          <i class='bx bxs-copy copy-icon' onclick="copyToClipboard()"></i>
        </div>
        <br><br>
        <p>Presionar el botón para ir al chat.</p>
        <center>
          <a href="https://wa.me/5804264032202" class="btn-comprar">COMPRAR<i class='bx bxs-chat'></i></a><br>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    fetch('redes_sociales.php')
      .then(response => response.json())
      .then(data => {
        const socialLinksContainer = document.getElementById('social-links');
        data.forEach(red => {
          const link = document.createElement('a');
          link.href = red.link;
          link.target = '_blank';
          link.classList.add('opcion');
          let icon;
          switch (red.nombre.toLowerCase()) {
            case 'tiktok':
              icon = document.createElement('i');
              icon.classList.add('bx', 'bxl-tiktok');
              break;
            case 'instagram':
              icon = document.createElement('i');
              icon.classList.add('bx', 'bxl-instagram-alt');
              break;
            case 'facebook':
              icon = document.createElement('i');
              icon.classList.add('bx', 'bxl-facebook');
              break;
            default:
              icon = document.createElement('i');
              icon.classList.add('bx', 'bxl-whatsapp');
              break;
          }
          link.appendChild(icon);
          socialLinksContainer.appendChild(link);
        });
      })
      .catch(error => console.error('Error:', error));
  });

  function copyToClipboard() {
    const copyText = document.querySelector(".WhatsApp");
    copyText.select();
    document.execCommand("copy");
    alert("Número copiado: " + copyText.value);
  }

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
  
  
</script>
</body>
</html>
