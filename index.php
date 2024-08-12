<?php
include("./conexion.php");

$sql = "SELECT img FROM carrusel ORDER BY id ASC";
$result = $conexion->query($sql);

$images = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row["img"];
    }
} else {
    echo "No hay imágenes en la base de datos.";
}

?>


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
    <a href="./inicio_sesion.php" class="link">Inicio Sesion</a>
  </div>
  <div class="menu-icon">
    <i class='bx bx-menu'></i>
    <i class='bx bx-x'></i>
  </div>
</nav>
<div class="mobile-menu">
  <a href="./inicio_sesion.php" class="link">Inicio Sesion</a>
</div>
<!--FIN NAV-->

<!--CARRUSEL-->
<div class="container-carousel">
  <div class="carruseles" id="slider">
    <!-- Imagenes -->
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
      <!-- Iconos -->
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
<?php

$sql = "SELECT id, nombre, descripcion, precio, imagen FROM productos ORDER BY id ASC LIMIT 10";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="contenido">';
    while($row = $result->fetch_assoc()) {
        echo '
        <article class="card__article">
            <img src="img/' . $row["imagen"] . '" alt="image" class="card__img">
            <div class="card__data">
                <span class="card__description">$' . number_format($row["precio"], 2) . '</span>
                <h2 class="card__title">' . $row["nombre"] . '</h2>
                <p class="descripcion">' . $row["descripcion"] . '</p>
                <a href="#" class="card__button" data-bs-toggle="modal" data-bs-target="#myModal" data-id="' . $row["id"] . '">Comprar</a>
            </div>
        </article>';
    }
    echo '</div>';
} else {
    echo "No hay productos disponibles.";
}

$conexion->close();
?>
</div>

<a href="#" class="whatsapp-icon" target="_blank" data-bs-toggle="modal" data-bs-target="#myModal">
  <i class='bx bxl-whatsapp'></i>
</a>

<!-- Modal-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Si eres usuario de computadora puedes ver el número de teléfono y escribirlo desde un dispositivo móvil con WhatsApp instalado. <br><br>
        <div class="copy-container">
            <input type="text" id="phoneNumber" class="WhatsApp" value="" readonly>
            <i class='bx bxs-copy copy-icon' onclick="copyToClipboard()"></i>
        </div>
        <br><br>
        <p>Presionar el botón para ir al chat.</p>
        <center>
            <a href="#" id="buyLink" class="btn-comprar">COMPRAR<i class='bx bxs-chat'></i></a><br>
        </center>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    //  imagenes obtenidas desde PHP
    const images = <?php echo json_encode($images); ?>;
    const slider = document.querySelector("#slider");

    // Crear elementos de carrusel para cada imagen
    images.forEach(img => {
        const section = document.createElement("section");
        section.classList.add("slider-section");
        const image = document.createElement("img");
        image.src = "./img/" + img;
        section.appendChild(image);
        slider.appendChild(section);
    });

    const btnLeft = document.querySelector(".btn-left"),
          btnRight = document.querySelector(".btn-right"),
          sliderSection = document.querySelectorAll(".slider-section");

    btnLeft.addEventListener("click", e => moveToLeft());
    btnRight.addEventListener("click", e => moveToRight());

    setInterval(() => {
        moveToRight();
    }, 3000);

    let operacion = 0,
        counter = 0,
        widthImg = 100 / sliderSection.length;

    function moveToRight() {
        if (counter >= sliderSection.length - 1) {
            counter = 0;
            operacion = 0;
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "none";
            return;
        }
        counter++;
        operacion = operacion + widthImg;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "all ease .6s";
    }

    function moveToLeft() {
        counter--;
        if (counter < 0) {
            counter = sliderSection.length - 1;
            operacion = widthImg * (sliderSection.length - 1);
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "none";
            return;
        }
        operacion = operacion - widthImg;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "all ease .6s";
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');

    menuIcon.addEventListener('click', function() {
      mobileMenu.classList.toggle('show');
      menuIcon.classList.toggle('show');
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    fetch('acciones/obtener_datos.php')
    .then(response => response.json())
    .then(data => {
        if (data.length > 0) {

            const redSocial = data[0];

            document.getElementById('phoneNumber').value = redSocial.telefono;
            document.getElementById('buyLink').href = redSocial.link;
        }
    })
    .catch(error => console.error('Error al obtener los datos:', error));
});
document.addEventListener("DOMContentLoaded", function() {
    fetch('./acciones/redes_sociales.php')
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
    const copyText = document.getElementById("phoneNumber");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
    alert("Número de teléfono copiado: " + copyText.value);
}
</script>




</script>
</body>
</html>