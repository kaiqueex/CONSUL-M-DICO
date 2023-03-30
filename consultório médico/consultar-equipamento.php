<h1>Consultar equipamentos</h1>
<?php
include_once("config.php");
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="consultar">
    
<p>Nome:</p>
<div class="mb-3">
 <input type="text" name="nome" required> 
</div>


<div class="mb-3">
    <button type="submit" class="btn btn-primary">Consultar</button>
</div>


</form>





