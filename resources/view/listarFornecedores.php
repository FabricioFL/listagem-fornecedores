<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Listar fornecedores</title>
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        require_once '../../vendor/autoload.php';
        use App\Http\Route;
        use App\Controllers\LoginController;
        use App\Controllers\ProviderController;

        session_start();
            if($_SESSION['login'] != true)
            {
                Route::redirect('/404');
            }
        ?>
</head>
<body class="bg-1">
    <main>
    <aside class="bg-2 sidebar">
            <div class="lead">
                <a class="text-decoration-none text-light" href="/dashboard">Inicio</a>
            </div>
            <div class="lead">
                <a class="text-decoration-none text-light" href="/cadastrar-empresas">Cadastrar empresas</a>
            </div>
            <div class="lead">
                <a class="text-decoration-none text-light" href="/cadastrar-fornecedores">Cadastrar fornecedores</a>
            </div>
            <div class="lead">
                <a class="text-decoration-none text-light" href="/listar-fornecedores"><b>Listar fornecedores</b></a>
            </div>
            <div class="lead">
                <a class="text-decoration-none text-light" href="/logout">Sair</a>
            </div>
        </aside>
        <section class="container p-5">
            <?php
                ProviderController::listProviders();
            ?>
        </section>
    </main>
</body>
</html>