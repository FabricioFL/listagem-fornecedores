<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Inicio</title>
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        use App\Http\Route;
        use App\Controllers\LoginController;
        session_start();
            if($_SESSION['login'] != true)
            {
                Route::redirect('/404');
            }
        ?>
</head>
<body class="bg-1">
    <main>
    <aside class="position-absolute bottom-0 top-0 left-0 bg-2 py-3 sidebar">
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/dashboard"><b>Inicio</b></a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-empresas">Cadastrar empresas</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-fornecedores">Cadastrar fornecedores</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/listar-fornecedores">Listar fornecedores</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/logout">Sair</a>
            </div>
        </aside>
        <section class="container p-5">
            <div class="d-flex justify-content-center mt-5 alert bg-3 text-light lead w-75 mx-auto" role="alert">
                <h2 class="display-6">Seja bem-vido(a)!</h2>
            </div>
            <div class="d-grid justify-content-center mt-5 alert bg-3 text-light lead w-75 mx-auto">
                <h3 class="display-6 text-center">
                    features:
                </h3>
                <p class="mt-3">
                    🟢 Cadastro de empresas<br>
                    🟢 Cadastro e listagem de fornecedores relacionados a uma empresa<br>
                </p>
            </div>
        </section>
    </main>
</body>
</html>