<!DOCTYPE html>
<html lang="es">
<?php
$fileCSS = ["home-page", "global"];

require_once("./public/include/html_head.php");
?>

<body class="bg-black-low">

  <nav class="bg-primary">
    <div class="logo">
      <h1 class="c-white">Colegio Pepito Perez</h1>
    </div>
    <ul class="nav-links">
      <li><a href="#home" class="c-white">Inicio</a></li>
      <li><a href="#niveles" class="c-white">Niveles</a></li>
      <li><a href="#propuesta" class="c-white">Propuesta</a></li>
      <li><a href="#contacto" class="c-white">Contáctanos</a></li>
    </ul>
    <div class="login-button">
      <a href="./login.php" class="c-white">Login</a>
    </div>
  </nav>

  <section id="home">
    <div class="container">
      <div class="left-half align-content-center">
        <h2>¡Bienvenido al Colegio Pepito Perez!</h2>
        <p>Somos un colegio dedicado a la enseñanza de la tecnología desde una perspectiva innovadora.</p>
        <p>Nuestra misión es inspirar y educar a la próxima generación de líderes en tecnología.</p>
      </div>
      <div class="right-half flex justify-content-center">
        <img src="https://img.pikbest.com/wp/202347/female-teacher-happy-teachers-day-school-children-giving-gifts-and-bouquets-of-flowers-to-their-world-celebration-vector_10030522.jpg!w700wp" alt="Imagen del Colegio Pepito Perez">
      </div>
    </div>
  </section>

  <section id="niveles">
    <div class="top-half">
      <h2>Los Niveles en Pepito Pérez</h2>
      <p>En Pepito Pérez, ofrecemos una variedad de niveles educativos, incluyendo inicial, primaria y secundaria.</p>
    </div>
    <div class="bottom-half">
      <div class="card yellow">
        <h3>Inicial</h3>
        <img src="https://via.placeholder.com/150" alt="Imagen inicial">
      </div>
      <div class="card green">
        <h3>Primaria</h3>
        <img src="https://via.placeholder.com/150" alt="Imagen primaria">
      </div>
      <div class="card blue">
        <h3>Secundaria</h3>
        <img src="https://via.placeholder.com/150" alt="Imagen secundaria">
      </div>
    </div>
  </section>

  <section id="propuesta">
    <div class="top-half">
      <h2>Propuesta Educativa</h2>
      <p>Nuestra propuesta educativa se centra en proporcionar una experiencia de aprendizaje integral y de calidad para todos nuestros estudiantes.</p>
    </div>
    <div class="bottom-half">
      <div class="left-half-prop">
        <img src="https://via.placeholder.com/300" alt="Imagen de la propuesta educativa">
      </div>
      <div class="right-half-prop">
        <h3>Lo que brinda nuestra institución</h3>
        <ul>
          <li>Programa educativo innovador y personalizado.</li>
          <li>Profesorado altamente calificado y comprometido.</li>
          <li>Instalaciones modernas y seguras.</li>
          <li>Actividades extracurriculares variadas, como deportes, arte y música.</li>
          <li>Apoyo individualizado para el desarrollo académico y personal.</li>
          <li>Participación activa de la comunidad educativa en eventos y actividades.</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contacto">
    <div class="contact-container">
      <h2 class="c-white">Contáctanos</h2>
      <form id="contact-form">
        <div class="form-group">
          <label for="email">Tu correo electrónico:</label>
          <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>

  <footer class="bg-primary">
    <p class="c-white">&copy; 2024 Colegio Pepito Perez. Todos los derechos reservados.</p>
  </footer>

</body>

</html>