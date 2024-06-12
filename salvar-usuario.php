<?php
switch($_REQUEST['acao']){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); //Hash da senha
        $date_nasc = $_POST["date_nasc"];

        $stmt = $conn->prepare("INSERT INTO usuarios (nome_usuario, email_usuario, senha, data_nascimento) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $senha, $date_nasc);

        if ($stmt->execute()) {
            echo "<p>Usuario registrado exitosamente. Serás redirigido en 5 segundos...</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'index.php';
                    }, 5000);
                  </script>";
        } else {
            echo "<p>Error al registrar el usuario: " . $stmt->error . ". Serás redirigido en 5 segundos...</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'novo-usuario.php';
                    }, 5000);
                  </script>";
        }

        // $sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha, data_nascimento) VALUES('{$nome}','{$email}','{$senha}','{$date_nasc}'";
        // $res = $conn->query($sql);

        $stmt->close();
        break;
    case 'editar':
        $id_usuario = $_POST['id'];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); //Hash da senha
        $date_nasc = $_POST["date_nasc"];
        
        $stmt = $conn->prepare("UPDATE usuarios SET nome_usuario = ?, email_usuario = ?, senha = ?, data_nascimento = ? WHERE id_usuario = ?");
        $stmt->bind_param("ssssi", $nome, $email, $senha, $date_nasc, $id_usuario);

        if ($stmt->execute()) {
            echo "<p>Usuario registrado exitosamente. Serás redirigido en 5 segundos...</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = '?page=listar';
                    }, 5000);
                  </script>";
        } else {
            echo "<p>Error al registrar el usuario: " . $stmt->error . ". Serás redirigido en 5 segundos...</p>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'novo-usuario.php';
                    }, 5000);
                  </script>";
        }
        $stmt->close();
        break;
    case 'excluir';
    $id_usuario = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
    $stmt->bind_param("i", $id_usuario);

    if ($stmt->execute()) {
        echo "<p>Usuario excluid exitosamente. Serás redirigido en 5 segundos...</p>";
        echo "<script>
                setTimeout(function(){
                    window.location.href = '?page=listar';
                }, 5000);
              </script>";
    } else {
        echo "<p>Error al excluir el usuario: " . $stmt->error . ". Serás redirigido en 5 segundos...</p>";
        echo "<script>
                setTimeout(function(){
                    window.location.href = 'novo-usuario.php';
                }, 5000);
              </script>";
    }
    $stmt->close();
    break;
}