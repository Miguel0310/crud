<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST" id="formPost" >
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome *</label>
    <input type="text" name="nome" class="form-control" id="nome_id">
    </div>
    <div class="mb-3">
        <label for="">E-mail *</label>
        <input type="text" name="email" class="form-control" id="email_id">
    </div>
    <div class="mb-3">
        <label for="">Senha *</label>
        <input type="password" name="senha" class="form-control" id="senha_id">
    </div>
    <div class="mb-3">
        <label for="">Data Nascimento *</label>
        <input type="date" name="date_nasc" class="form-control" id="nascimento_id">
    </div>

    <div class="mb-3">
        <button type="submite" class="btn btn-primary" id="btnSubmit">Enviar</button>
    </div>
</form>

<script src="script.js"></script>