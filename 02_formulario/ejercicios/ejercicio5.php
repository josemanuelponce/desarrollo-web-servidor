<form action="ejercicio5_respuesta.php" method="post">
<label>Numero 1</label><br>
<input type="text" name="numero1" pattern="^[0-9]+"><br><br>
<label>Numero 2</label><br>
<input type="text" name="numero2" pattern="^[0-9]+"><br><br>
<input type="submit" value="Enviar">
</form>

<?php
    require 'footer.php'
?>