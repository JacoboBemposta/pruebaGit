<?php  
if(!empty($datos)){
    ?>
    <div class="container mt-5 p-5 col-6 rounded-5 bg-secondary">
        <h1>Selecciona el id para modificar</h1>
    <form action="" method="post">
        <select name="seleccion" id="">
            <?php 
            foreach ($datos as $key => $virus) {
                ?>
                <option value="<?php echo $virus->id?>"><?php echo $virus->id?></option>
                <?php
            }
            ?>
        </select>
        <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="tipo" id="tipo">
                </div>
                <div class="mb-3">
                    <label for="incubacion" class="form-label">incubacion</label>
                    <input type="number" class="form-control" name="incubacion" id="incubacion">
                </div>
                <input type="submit" name="Enviar" value="Enviar" id="">
    </form>
    </div>
    <?php

}else require('Vista/V_error.html')

?>