<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="icon" href="logoltc.jpg" />
    <title>LearnToCode</title>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <div class="content">
        <div class="logo">
          <div class="imagen"></div>
          <h1>&lt;LearnToCode&gt;</h1>
        </div>
        <nav>
          <img class="boton-abrir" src="assets/open-menu.png" alt="boton abrir menu" />
          <ul class="lista">
            <img class="boton-cerrar" src="assets/close.png" alt="boton cerrar menu">
            <li><a class="enlace" href="#html">HTML 5</a></li>
            <li><a class="enlace" href="#css">CSS 3</a></li>
            <li><a class="enlace" href="#about">Sobre Nosotros</a></li>
            <li><a class="enlace" href="#dalto">Profesor</a></li>
            <li><a class="enlace" href="#footer">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="hero">
      <div class="texto">
        <h2 class="titulo">Bienvenido a LearnToCode</h2>
        <a href="#html">Ver Cursos</a>
      </div>
      <video muted autoplay loop>
        <source src="videito.mp4" type="video/mp4" />
      </video>
      <div class="capa"></div>
    </section>
    <section id="html">
      <div class="botones">
        <div class="content">
          <div>
            <a href="https://youtu.be/ELSm-G201Ls" target="_blank">Ver Curso</a>
          </div>
          <div>
            <a
              download="TemarioHTML"
              href="temarioHTML.pdf"
              target="_blank"
              class="distinto"
              >Ver temario</a
            >
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="texto">
            <h2>Curso HTML</h2>
            <p>
              HTML es el código que se utiliza para estructurar una página web y
              sus contenidos.
            </p>
          </div>
          <div class="imagen">
            <img src="HTML.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="banner">
      <h2>Segui Expandiendo Tu Conocimiento</h2>
      <p>🚀</p>
    </section>
    <section id="css">
      <div class="botones">
        <div class="content">
          <div>
            <a
              href="https://youtu.be/ELSm-G201Ls"
              target="_blank"
              class="distinto"
              >Ver Curso</a
            >
          </div>
          <div>
            <a href="temarioHTML.pdf" target="_blank">Ver temario</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="texto">
            <h2>Curso CSS</h2>
            <p>
              CSS es el código utilizado para estilar una pagina web y su
              estructura
            </p>
          </div>
          <div class="imagen">
            <img src="css_original_logo_icon_146575.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="about_container">
        <div class="carta">
          <div class="arriba">
            <p>Sobre Nosotros:</p>  
            <h3>Hacemos de la Programacion, una opcion para todos</h3>
          </div>
          <p>
            En LearnToCode nos dedicamos a hacer la programación accesible para todos ofreciendo cursos gratuitos.
            Nuestra misión es empoderar a individuos de todas las edades y niveles de experiencia para dominar el arte
            de la codificación.
          </p>
        </div>
        <div class="carta">
          <div class="imagen">
            <div class="img"></div>
          </div>
          <div class="cuadros">
            <div>
              <h4>+240k</h4>
              <p>Visitas en Youtube</p>
            </div>
            <div>
              <h4>+24</h4>
              <p>Horas de Curso</p>
            </div>
            <div>
              <h4>10</h4>
              <p>Proyectos</p>
            </div>
            <div>
              <h4>+20k</h4>
              <p>Reviews Positivas</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="dalto">
      <div class="content">
        <div class="imagen"><img src="dalto.png" alt="" /></div>
        <div class="texto">
          <h3>Lucas Dalto</h3>
          <p>
            Programador dueño del canal mas grande de programación y desarrollo
            de Argentina (Soy Dalto).
            <span>
              Ha trabajado en empresas como Rockstar Solutions, también dió
              varias charlas en empresas como OLX y Facebook. Su objetivo es
              lograr convertirse en el primer canal de programación y desarrollo
              argentino en alcanzar el millón de subscriptores.
            </span>
          </p>
          <div class="redes">
            <a href="https://www.instagram.com/SoyDalto/" target="_blank"
              ><i class="bi bi-instagram"></i
            ></a>
            <a href="https://twitter.com/soydalto" target="_blank"
              ><i class="bi bi-twitter-x"></i
            ></a>
            <a href="https://www.youtube.com/@soydalto" target="_blank"
              ><i class="bi bi-youtube"></i
            ></a>
            <a href="https://github.com/soydalto" target="_blank"
              ><i class="bi bi-github"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer">
      <div class="principal">
        <div class="content">
          <div class="logo">
            <img src="logoltcfooter.png" alt="" />
          </div>
          <div class="links">
            <div class="links_container">
              <h5>Links</h5>
              <ul>
                <a href="#about"><li>Conocenos</li></a>
                <a href="#html"><li>Cursos</li></a>
                <a href="#dalto"><li>Profesor</li></a>
              </ul>
            </div>
            <div class="cursos_container">
              <h5>Cursos</h5>
              <ul>
                <a href="#html"><li>HTML 5</li></a>
                <a href="#css"><li>CSS 3</li></a>
              </ul>
            </div>
          </div>
          <div class="subscribirse">
            <div class="texto">
              <p>
                <span>Suscribite!!</span> Para recibir informacion <br />
                sobre nuevos cursos
              </p>
            </div>
            <form action="index.php" method="post">
              <input
                class="email"
                type="email"
                name="Subs_Mail"
                id=""
                placeholder="Ingrese su Email"
              />
              <input
                class="enviar"
                type="submit"
                name="Subs_Enviar"
                value="Suscribirme"
              />
              <?php
              $DB_HOST = $_ENV["DB_HOST"];
              $DB_USER = $_ENV["DB_USER"];
              $DB_PASSWORD = $_ENV["DB_PASSWORD"];
              $DB_NAME = $_ENV["DB_NAME"];
              $DB_PORT = $_ENV["DB_PORT"];
          $conex = mysqli_connect("$DB_HOST", "$DB_USER", "$DB_PASSWORD", "$DB_PORT");

          if (isset($_POST['Subs_Enviar'])) {
              if (strlen($_POST['Subs_Mail']) >= 1) {
                      $Mail = trim($_POST['Subs_Mail']);
              
                      $consulta = "INSERT INTO subscriptos (Mail) VALUE ('$Mail')";
              
                      $resultado = mysqli_query($conex, $consulta);
                      if ($resultado) {
                          ?>
                          <?php
                      } else {
                          ?>
                          <?php
                      }

                  }
                  else {
                      ?>
                      <?php
                  }
          }


?>
            </form>
            <div class="redes"><i></i><i></i><i></i><i></i></div>
          </div>
        </div>
      </div>
      <p>&copy; 2024 LearnToCode - Todos los Derechos Reservados</p>
    </footer>
    <script src="nav.js"></script>
  </body>
</html>
