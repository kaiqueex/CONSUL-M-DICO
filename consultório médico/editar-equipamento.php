<h1>Editar equipamento</h1>
<?php

$sql = "SELECT * FROM equipamentos WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id"   value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" 
        value="<?php print $row->nome; ?>" class="form-control" required>
    </div>

    <p>Estado:</p>
        <input type="radio" id="disponivel" name="estado" value="disponível" required>
        <label for="disponivel">Disponível</label>
    <br>
        <input type="radio" id="naodisponivel" name="estado" value="não disponível" required>
        <label for="naodisponivel">Não disponível</label>

    <br>
    <br>
    <p>Retirada: </p>
    <input type="time" name="horario" id="txtHora" class="caixa-texto"
 value="<?php print $row->horario; ?>">
    </div>
    
    <br>

    <div class="col-4 col-s-12">
    <p>Devolução: </p>
    <input type="time" name="horarioD" id="txtHora" class="caixa-texto"
    value="<?php print $row->$horarioD; ?>" required>
    </div>
    

    <div class="mb-3">
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

 

</form>