<div class="seccion">
                <p class="sub-titulo">Elige tus Servicios a Continuación - Resultados(<?php echo mysqli_num_rows($consulta)?>)</p>
                    <div id="servicios">
                    <?php  while($servicio = mysqli_fetch_assoc($consulta)) { ?>
                        <form action="cart.php" method="post" name="formulario" >
                        <div class="servicio">
                            <img class="imagen-servicio" src="./build/img/imgs/<?php echo $servicio['id']; ?>.jpg" alt="">
                            <div class="infomacion-servicios">
                                
                             <input name='id' type="hidden" value="<?php echo $servicio['id']; ?>">
                             <input name='cantidad' type="hidden" value="1">
                                <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p>
                                <input name='nombre' type="hidden" value="<?php echo $servicio['nombre']; ?>">

                                <p class="precio-servicio"><?php echo "$" . $servicio['precio'] . ".00"; ?></p>
                                <input name='precio' type="hidden" value="<?php echo $servicio['precio']; ?>">

                                <p class="info-servicio">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, possimus iusto quis fuga optio ducimus fugit! Corporis dicta voluptatem, esse nihil numquam iure </p>

                               
                                <button type="submit" name='btn-compra' value="agregar" class='btn'>Anadir al carrito</button>

                            </div>                   
                        </div> 
                        </form>                   
                    <?php } ?>
                    </div>
            </div>

            <div class="">

            
            </div>