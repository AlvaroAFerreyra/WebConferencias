  <?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam deleniti labore corporis odit culpa accusantium esse mollitia similique vel veritatis? Modi earum excepturi alias optio dolores quae deleniti dolorum doloribus!</p>
  </section>
  <section class="programa">
    <div class="contenedor_video">
      <video autoplay loop poster="../WebConferencias/img/bg-talleres.jpg">
        <source src="../WebConferencias/video/video.mp4" type="video/mp4">
        <source src="../WebConferencias/video/video.webm" type="video/webm">
        <source src="../WebConferencias/video/video.ogv" type="video/ogv">
      </video>
    </div>
    <div class="contenido_programa">
      <div class="contenedor">
        <div class="programa_evento">
          <h2>Programa del evento</h2>
          <?php 
            try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = "SELECT * FROM `categoria_evento` ";
              $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
          ?>
          <nav class="menu_programa">
            <?php while( $cat = $resultado->fetch_array(MYSQLI_ASSOC)){?>
              <?php $categoria = $cat['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria)?>"><i class="fa-solid <?php echo $cat['icono'] ?>"></i> <?php echo $categoria ?></a>
            <?php } ?>
          </nav>

          <?php
            try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";
                $sql .= " FROM `eventos` ";
                $sql .= " INNER JOIN `categoria_evento` ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN `invitados` ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " AND eventos.id_cat_evento = 1 ";
                $sql .= " ORDER BY `evento_id` LIMIT 2 ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
          ?>

          <div id="#talleres" class="info_curso ocultar clearfix">
            <div class="detalle_evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="fa-solid fa-clock"></i>16:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Ferreyra Alvaro Andres</p>
            </div>
            <div class="detalle_evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa-solid fa-clock"></i>20:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Ferreyra Alvaro Andres</p>
            </div>
            <a href="" class="button float_right">Ver todos</a>
          </div>  <!--talleres-->
          <div id="#conferencias" class="info_curso ocultar clearfix">
            <div class="detalle_evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa-solid fa-clock"></i>10:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Gregorio Sanchez</p>
            </div>
            <div class="detalle_evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="fa-solid fa-clock"></i>17:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Susan Sanchez</p>
            </div>
            <a href="" class="button float_right">Ver todos</a>
          </div>  <!--conferencias-->
          <div id="#seminarios" class="info_curso ocultar clearfix">
            <div class="detalle_evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="fa-solid fa-clock"></i>17:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>11 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Harold Garcia</p>
            </div>
            <div class="detalle_evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa-solid fa-clock"></i>10:00 hs.</p>
              <p><i class="fa-solid fa-calendar"></i>11 de Diciembre</p>
              <p><i class="fa-solid fa-user"></i>Susana Rivera</p>
            </div>
            <a href="" class="button float_right">Ver todos</a>
          </div>  <!--#seminarios-->
        </div>
      </div>
    </div>
  </section>
  
  <?php include_once 'includes/templates/invitados.php'; ?>  

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen_evento clearfix">
      <li><p class="numero"></p>Invitados</li>
      <li><p class="numero"></p>Talleres</li>
      <li><p class="numero"></p>Días</li>
      <li><p class="numero"></p>Conferencias</li>
    </ul>
  </div>
</div>
<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista_precios clearfix">
      <li>
        <div class="tabla_precio">
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla_precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla_precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<div id="mapa" class="mapa"></div>
<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis tempore eius atque repellendus in consequuntur reiciendis, quaerat itaque architecto facere deserunt. Vitae cupiditate quasi cumque unde perspiciatis, ipsam nulla temporibus!</p>
        <footer class="info_testimonial clearfix">
          <img src="../WebConferencias/img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis tempore eius atque repellendus in consequuntur reiciendis, quaerat itaque architecto facere deserunt. Vitae cupiditate quasi cumque unde perspiciatis, ipsam nulla temporibus!</p>
        <footer class="info_testimonial clearfix">
          <img src="../WebConferencias/img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis tempore eius atque repellendus in consequuntur reiciendis, quaerat itaque architecto facere deserunt. Vitae cupiditate quasi cumque unde perspiciatis, ipsam nulla temporibus!</p>
        <footer class="info_testimonial clearfix">
          <img src="../WebConferencias/img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>
<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Regístrate al newsletter</p>
    <h3>GDLWEBCAMP</h3>
    <a href="#" class="button transparente">Registro</a>
  </div>
</div>
<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta_regresiva contenedor">
    <ul class="clearfix">
      <li><p id="dias" class="numero n_contador">0</p>días</li>
      <li><p id="horas" class="numero n_contador">0</p>horas</li>
      <li><p id="minutos" class="numero n_contador">0</p>minutos</li>
      <li><p id="segundos" class="numero n_contador">0</p>segundos</li>
    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>

