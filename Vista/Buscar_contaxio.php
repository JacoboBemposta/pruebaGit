<div class="container" >
    <div class="row m-5">
        <div class="container col-4 p-2 bg-secondary rounded-5">
        <form action="" method="post">
        <select name="seleccioncontaxio" id="">
            <?php 
            var_dump($contaxios);
            foreach ($contaxios as $key => $contaxio) {
                ?>
                <option value="<?php echo $contaxio->id_contaxio?>"><?php echo $contaxio->id_contaxio?></option>
                <?php
            }
            ?>
        </select><br><br>
            
                <div class="mb-3">
                    <label for="id" class="form-label">ID Virus</label>
                    <input type="text" class="form-control" name="id" id="id" value="<?php echo $contaxio->id_virus?>">
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $contaxio->nome?>">
                </div>
                <div class="mb-3">
                    <label for="det" class="form-label">Deteccion</label>
                    <input type="date" class="form-control" name="det" id="det" value="<?php echo $contaxio->deteccion?>">
                </div>
                <div class="mb-3">
                    <label for="fin" class="form-label">Fecha fin</label>
                    <input type="date" class="form-control" name="fin" id="fin" value="<?php echo $contaxio->fecha_fin?>">
                </div>
                <input type="submit" name="Enviar" value="Enviar" id="">
            </form>
              <br><br>
        </div>
    </div>
</div>