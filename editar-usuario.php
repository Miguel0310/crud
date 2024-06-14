<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuarios where id_usuario = ".$_REQUEST['id'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST" id="formPost">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_usuario;?>">

    <div class="mb-3">
        <label for="">Nome *</label>
    <input type="text" name="nome" id="nome_id" class="form-control" value="<?php print  $row->nome_usuario; ?>">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="text" name="email" id="email_id" class="form-control" value="<?php print  $row->email_usuario; ?>">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" id="senha_id" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Data Nascimento</label>
        <input type="date" name="date_nasc" id="nascimento_id" class="form-control" value="<?php print  $row->data_nascimento; ?>">
    </div>

    <div class="mb-3">
        <button type="submite" id="btnSubmit" class="btn btn-primary">Enviar</button>
    </div>
</form>

<script src="script.js"></script>