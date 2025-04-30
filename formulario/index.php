<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="../formulario/style.css">
  <title>DCARHTL.DCI</title>
</head>
<body>

  <header>
    <div class="logo">DCARHTL.DCI Consultoría</div>
    <nav>
      <a href="#">Nosotros</a>
      <a href="#">Servicios</a>
      <a href="#">Contacto</a>
      <a href="tel:+525547740586">55 4774 0586</a>
      <img src="../img/facebook.png" class="iconos"><img/>
      <img src="../img/correo.png" class="iconos"></img>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="left-content">
        <h1>Somos un grupo<br><span class="span">de especialistas</span></h1>
        <p>en todo lo relacionado a la materia del trabajo.</p>
        <div class="image-box">
          <img src="../img/img2.png" style="width: 450px;" alt="Asesoría gratuita"/>
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
                <br>
                
            </form>
            <a href="mostrar.php">Ver Registro</a>
          </div>
          <div class="side-button">MÁS INFORMACIÓN</div>
        </div>
    </section>
    <section>
    <div class="container">
        <div class="header"> 
            <h1 class="titulo">Estamos totalmente</h1>
            <h2 class="subtitulo">especializados en nuestros servicios:</h2>
        </div>
        

        <div class="container-servicios">
            <div class="servicio">
                <div class="icon">
                    <img src="../img/recursos_humanos.png" alt="">
                </div>
            <p class="servicio-tit">Servicios integrales de</p>
            <h3 class="servicio-subtit">Recursos Humanos</h3>
            <a href="#" class="btn">Leer más</a>
            </div>

        
            <div class="servicio">
                <div class="icon">
                    <img src="../img/legales.png" alt="">
                </div>
            <p class="servicio-tit">servicios</p>
            <h3 class="servicio-subtit">legales</h3>
            <a href="#" class="btn">Leer más</a>
            </div>

            <div class="servicio">
                <div class="icon">
                    <img src="../img/informatica.png" alt="">
            <p class="servicio-tit">Servicios de tecnologia de la</p>
            <h3 class="servicio-subtit">Información</h3>
            <a href="#" class="btn">Leer más</a>
            </div>
    </div>
    </section>
    <section>
      <div class="acerca">
        <div class="contenido">
          <div class="image-equipo">
            <h2>Acerca de nosotros</h2>
            <img src="../img/img2.png">
          </div>
          <div class="text-conten">
            <p>
              En materia legal: le ofrecemos nuestra representación jurídica en asuntos laborales, asuntos de seguridad social e impuestos; asuntos de ahorro para el retiro y pensiones; y asuntos de servidores públicos.
            </p>
            <p>
              Asimismo le proporcionamos asesoría para que cumpla sus obligaciones ante la Secretaría del Trabajo y Previsión Social, el SAT, IMSS, INFONAVIT, INFONACOT y Gobiernos Locales o cualquier otra autoridad federal o local.
            </p>
            <p>
              En materia de recursos humanos: le ofrecemos el proceso integral para la administración de sus recursos humanos o sólo de algunas de sus actividades, como el reclutamiento y la selección, contrataciones, escalafón, elaboración de nóminas, control de asistencia y puntualidad, impuestos locales y federales, seguridad social (IMSS, INFONAVIT e INFONACOT), capacitación, seguridad e higiene en el trabajo, revisión de Contrato Colectivo de Trabajo y Reglamento Interno de Trabajo, negociaciones sindicales y todo lo que requiera relacionado al personal.
            </p>
            <p>
              En materia de tecnologías de la información: le ofrecemos asesoría sobre la implementación y operación del software y hardware más adecuado a sus necesidades. Le instalamos cualquier equipo, le capacitamos en su utilización y le resolvemos cualquier trabajo que requiera.
            </p>
          </div>
          </div>
        </div>
      </div>
          
      <div class="banner">
        <h2>
          Brindamos <span>asesorías gratuitas.</span>
          <button class="button">Contáctanos hoy mismo</button>
        </h2>
        <p>
          Evítese problemas, conflictos o sanciones derivados de las relaciones del trabajo, conozca los derechos y obligaciones en materia laboral, administrativa, penal, seguridad social, impuestos y pensiones.
          <br>
          <a href="#">Acérquense a nuestro Despacho Consultor Integral DCARHTI. DCI, S.A.S.</a>
        </p>
      </div>
    </section>
    <section>
      <div class="container-3">
          <div class="info-contacto">
              <h1 class="titulo-form-2">Contacto</h1>
              <div class="info-item">
                  <div class="icon-contact">📍</div>
                  <div class="info-text-contact">BLVD. Adolfo López Mateos 4293, 300, Tlalpan, CDMX, 14210</div>
              </div>
              <div class="info-item">
                  <div class="icon-contact">📞</div>
                  <div class="info-text-contact">55 4774 0586</div>
              </div>
              <div class="info-item">
                  <div class="icon-contact">✉️</div>
                  <div class="info-text-contact">dcarhti.dci@gmail.com</div>
              </div>
          </div>
          <div class="formulario-2">
              <p class="instrucciones">Llena este sencillo formulario para contactarte lo más pronto posible y brindarte información acerca de nuestros servicios.</p>
              <form action="procesar.php" method="POST">
                  <input class="input-form-2" type="text" name="nombre" placeholder="Nombre" required>
                  <input class="input-form-2" type="text" name="telefono" placeholder="Teléfono" required>
                  <input class="input-form-2" type="email" name="email" placeholder="Email" required>
                  <textarea class="input-form-2" type="text" name="mensaje" placeholder="Mensaje"></textarea>
                  <button type="submit" class="btn-enviar">ENVIAR</button>
              </form>
          </div>
      </div>
    </section>
    <div>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509647!2d144.95373531531844!3d-37.817209979751575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577bd32d4ed4ba1!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1616587807164!5m2!1sen!2sau" 
        width="100%" 
        height="450" 
        style="border: 10px; border-color: blue;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </main>

</body>