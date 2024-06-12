<h1>Listar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data Nascimento</th>";
            print "<th>Ações</th>";
            print "<tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_usuario."</td>";
            print "<td>".$row->nome_usuario."</td>";
            print "<td>".$row->email_usuario."</td>";
            print "<td>".$row->data_nascimento."</td>";
            print "<td>
                    <button onclick=\"
                    location.href='?page=editar&id=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "<tr>";
        }
        print "</table>";

    }else{
        print "<p class='alert alert-danger'> Não existe resultado </p>";
    }
?>