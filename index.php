<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gerador de senha criptografada</h1>
    <hr>

    <form action ="" method="POST">

        <input type="text" id="senha" name="senha">

        <input type="submit" value="Verificar">
        
    </form>

    <?php 

        if (isset($_POST['senha'])) {

            $senha_sem_criptografar = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

            $senha_segura = password_hash($senha_sem_criptografar, PASSWORD_DEFAULT);

            echo "<h2> Senha digitada: {$senha_sem_criptografar}</h2>";
            echo "<h2> Senha criptografada: {$senha_segura}</h2>";
            
        }

    ?>
</body>
</html>