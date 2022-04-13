<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fornecedores | Entrar</title>
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        require_once '../../vendor/autoload.php';
        use App\Controllers\LoginController;
        use App\Http\Route;
        LoginController::login();
        if($_SESSION['login'] == true)
        {
            Route::redirect('/dashboard');
        }
    ?>
</head>
<body class="bg-1">
    <main>
        <aside class="position-absolute bottom-0 top-0 left-0 bg-2 py-3 sidebar">
            <div class="mt-5 grid justify-content-evenly lead">
                <a class="text-decoration-none text-light mb-3 mx-3" href="/"><b>Entrar</b></a>
            </div>
            <div class="py-5 lead">
                <a class="text-decoration-none text-light mb-3" href="/signup">Criar conta</a>
            </div>
        </aside>
        <div class="mt-5 d-flex justify-content-center">
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label text-light">Nome de usuário:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="bg-button lead text-light w-50 border-button mt-2">entrar</button>
            </form>
        </div>
    </main>
</body>
</html>