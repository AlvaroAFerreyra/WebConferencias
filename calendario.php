<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Calendario de eventos</h2>

        <?php
            try {
                require_once('includes/funciones/bd_conexion.php');
<<<<<<< HEAD
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
=======
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " ORDER BY evento_id ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        ?>
        <div class="calendario">
            <?php
                $calendario = array();
                while ( $eventos = $resultado->fetch_assoc() ){ 

                    //obtiene la fecha del evento
                    $fecha = $eventos['fecha_evento']; 

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
<<<<<<< HEAD
                        'icono' => 'fa' . " " . $eventos['icono'],
=======
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );

                    $calendario[$fecha][] = $evento; 

            ?>   
                    
            <?php    } //while de fetch_assoc ?>   

            <?php  //imprime todos los eventos
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class="fa fa-calendar"></i>
                        <?php 
                            setlocale(LC_TIME, 'spanish');
                            echo strftime("%A, %d de %B del %Y", strtotime($dia)); 
                        ?>
                    </h3>
                    <?php
<<<<<<< HEAD
                        foreach($lista_eventos as $evento) { 
                    ?>
                            <div class="dia">

                                <p class="titulo"><?php echo $evento['titulo']; ?></p>
                                <p class="hora">
                                    <i class="fa-solid fa-clock" aria-hidden="true"></i>
                                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                                </p>

                                <p>
                                    <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                                    <?php echo $evento['categoria']; ?>
                                </p>

                                <p>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?php echo $evento['invitado']; ?>
                                </p>

=======
                        foreach($lista_eventos as $evento) { ?>
                            <div class="dia">
                                <p class="titulo"></p>
                                <pre>
                                    <?php var_dump ($evento); ?>
                                </pre>
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
                            </div>
                    <?php    } //fin foreach de eventos ?>
                    
            <?php    }  //fin foreach de dias ?>
            
<<<<<<< HEAD
        </div> <!--.calendario-->
=======
        </div>
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
        <?php
            $conn->close();
        ?>

    </section>

<<<<<<< HEAD
<?php $conn => close(); ?>

=======
>>>>>>> 814b8413078c4dfdf5715a8ab04362b460e75456
<?php include_once 'includes/templates/footer.php'; ?>