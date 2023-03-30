<h1>Novo funcionário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required placeholder="NOME COMPLETO">
    </div>

    <p>Tipo do funcionário:</p>
        <input type="radio" id="médico" name="funcionario" value="disponível" required>
        <label for="médico">Médico</label>
    <br>
        <input type="radio" id="naodisponivel" name="funcionario" value="não disponível" required>
        <label for="naodisponivel">Secretário(a)</label>
        <br>
    <br>

    <div class="mb-3">
        <label>CPF</label>
        <input type="varchar" name="cpf" class="form-control" required placeholder="123.456.789-01">
    </div>

    <br>

    <div class="mb-3">
        <label>RG</label>
        <input type="varchar" name="rg" class="form-control" required placeholder=" 1234567890-1 ">
    </div>

    <br>

    <div class="mb-3">
        <label for="fone">TELEFONE</label>
	<input type="tel" id="fone" name="fone" required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="11 99999-9999">
    </div>

    <br>

    <label for="estado">Estado</label>
	<select id="estado" name="estado">
		<option value="RJ">RJ</option>
		<option value="CE">CE</option>
		<option value="SP">SP</option>
	</select>

<br><br>


    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereço" class="form-control" required placeholder=" RUA ">
    </div>

    <br>

    <p>SEXO:</p>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
    <br>
        <input type="radio" id="feminino" name="sexo" value="feminino" required>
        <label for="feminino">Feminino</label>
    
    <br>
        
<br>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>