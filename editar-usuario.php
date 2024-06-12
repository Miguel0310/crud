<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuarios where id_usuario = ".$_REQUEST['id'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_usuario;?>">

    <div class="mb-3">
        <label for="">Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print  $row->nome_usuario; ?>">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="text" name="email" class="form-control" value="<?php print  $row->email_usuario; ?>">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Data Nascimento</label>
        <input type="date" name="date_nasc" class="form-control" value="<?php print  $row->data_nascimento; ?>">
    </div>

    <div class="mb-3">
        <button type="submite" class="btn btn-primary">Enviar</button>
    </div>
</form>