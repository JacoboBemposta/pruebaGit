<br><br>
<div class="container col-8 alert alert-primary">
    <h1>Listado de pacientes</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">codigo</th>
                <th class="text-center">nome</th>
                <th class="text-center">idade</th>
            </tr>
        </thead>
        <tbody>
            
    <?php 
    foreach ($datos as $key => $value){
        echo "<tr>";
        foreach ($value as $key2 => $valor) {
            echo "<td class='text-center'>$valor</td>";
        }
        echo "</tr>";
    }      
    ?>
    </tbody>
    </table>
    <a type="button" href="index.php">Volver</a>
</div>
<script>
new DataTable('#example', {
    info: true,
    ordering: false,
    paging: true
});
</script>

</body>