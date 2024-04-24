<div class="container" >
    <div class="row m-5">
        <div class="container col-4 p-2 bg-secondary rounded-5">
        <form action="" method="post">
        <select name="seleccionpaciente" id="">
            <?php 
            foreach ($pacientes as $key => $paciente) {
                ?>
                <option value="<?php echo $paciente->nome?>"><?php echo $paciente->nome?></option>
                <?php
            }
            ?>
        </select><br><br>
            
                <div class="mb-3">
                    <label for="nome" class="form-label">nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label">idade</label>
                    <input type="number" class="form-control" name="idade" id="idade">
                </div>
                <input type="submit" name="Enviar" value="Enviar" id="">
            </form>
              <br><br>
        </div>
    </div>
</div>