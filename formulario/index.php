<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/ejerciciophp/Ejercicio-php/formulario/style.css">

  <title>DCARHTL.DCI</title>
</head>

  <header>
    <div class="logo">DCARHTL.DCI Consultoría</div>
    <nav>
      <a href="#">Nosotros</a>
      <a href="#">Servicios</a>
      <a href="#">Contacto</a>
      <a href="tel:+525547740586">55 4774 0586</a>
      <a href="#">📘</a>
      <a href="#">🐦</a>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="left-content">
        <h1>Somos un grupo <br><span>de especialistas</span></h1>
        <p>en todo lo relacionado a la materia del trabajo.</p>
        <div class="image-box">
          <img src="https://via.placeholder.com/600x300" alt="Asesoría gratuita"/>
          <span>BRINDAMOS ASESORÍA GRATUITA</span>
        </div>
      </div>
      <div class="right-content">
        <div class="contact-form">
          <h2>Contáctanos para conocer más de nuestros servicios.</h2>
          <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <input type="text" name="mensaje" required>
        <br>
        <button type="submit">Enviar</button>
        </form>
        <br>
        <a href="mostrar.php">Ver Registros</a>
        </div>
        <div class="side-button">MÁS INFORMACIÓN</div>
      </div>
    </section>
  </main>
</html>