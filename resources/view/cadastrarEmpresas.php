<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Cadastrar Empresas</title>
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        require_once '../../vendor/autoload.php';
        use App\Controllers\CompanyController;
        use App\Http\Route;
        use App\Controllers\LoginController;
        CompanyController::register();
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
                <a class="text-decoration-none text-light" href="/dashboard">Inicio</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-empresas"><b>Cadastrar empresas</b></a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-fornecedores">Cadastrar fornecedores</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/listar-empresas">Listar empresas</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/listar-fornecedores">Listar fornecedores</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/logout">Sair</a>
            </div>
        </aside>
        <section>
            <div class="d-grid justify-content-center mt-5 alert bg-3 text-light lead w-50 mx-auto">
                <h2>Cadastrar Empresa:</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="empresa-uf" class="form-label">UF</label>
                        <input type="text" class="form-control" id="uf-reg" name="empresa-uf">
                    </div>
                    <div class="mb-3">
                        <label for="empresa-fantasyname" class="form-label">Nome fantasia</label>
                        <input type="text" class="form-control" id="empresa-fantasyname" name="empresa-fantasyname">
                    </div>
                    <div class="mb-3">
                        <label for="empresa-cnpj" class="form-label">cnpj</label>
                        <input type="text" class="form-control" id="empresa-cnpj" name="empresa-cnpj">
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>