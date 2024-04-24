<br><br>
<div class="container col-8 alert alert-primary">
    <h1>Listado de virus</h1>
    <table id="example" class="display compact" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">tipo</th>
                <th class="text-center">incubacion</th>
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