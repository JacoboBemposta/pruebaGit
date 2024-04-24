<?php  
if(!empty($datos)){
    ?>
    <div class="container mt-5 p-5 col-6 rounded-5 bg-secondary">
        <h1>Selecciona el id para eliminar</h1>
    <form action="" method="post">
        <select name="seleccion" id="">
            <?php 
            foreach ($datos as $key => $virus) {
                ?>
                <option value="<?php echo $virus->id?>"><?php echo $virus->id?></option>
                <?php
            }
            ?>
        </select><br><br>
        <button type="submit" class="btn bg-info">Enviar</button>
        </form>
    </div>
    <?php

}else require('Vista/V_error.html')

?>