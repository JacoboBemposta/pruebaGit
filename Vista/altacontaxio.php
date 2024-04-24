<?php  
if(!empty($pacientes)&&!empty($virus)){
    ?>
<div class="container mt-5 p-1 col-4 rounded-5 bg-secondary">
        <h1>Introduce datos do contaxio</h1>
        <form action="" method="post">
        <div class="mb-3">
            <label for="cod" class="form-label">Codigo Contaxio</label>
            <input type="text" class="form-control" name="cod" id="cod">
        </div>
    
        Id Virus<br>
        <select name="seleccionvirus" id="">
            <?php 
            foreach ($virus as $key => $vir) {
                ?>
                <option value="<?php echo $vir->id?>"><?php echo $vir->id?></option>
                <?php
            }
            ?>
        </select><br><br>
        Nome paciente<br>
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
            <label for="detec" class="form-label">Deteccion</label>
            <input type="date" class="form-control" name="detec" id="detec">
        </div>
        <div class="mb-3">
            <label for="fin" class="form-label">Fecha Fin</label>
            <input type="date" class="form-control" name="fin" id="fin">
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </form>                
</div>
<?php 
}
?>

