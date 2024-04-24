<br><br>
<div class="container col-8 alert alert-primary">
    <h1>Listado de contaxios</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">ID Contaxio</th>
                <th class="text-center">ID Virus</th>
                <th class="text-center">nome</th>
                <th class="text-center">Fecha deteccion</th>
                <th class="text-center">Fecha fin</th>
            </tr>
        </thead>
        <tbody>
            
    <?php 
    foreach ($contaxios as $key => $value){
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