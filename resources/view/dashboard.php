<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fornecedores | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        require_once '../../vendor/autoload.php';
        use \App\Http\Route;

        session_start();
        if($_SESSION['login'] != true)
        {
            Route::redirect('/');
        }
    ?>
</head>
<body>
    <main>
        <aside class="position-absolute bottom-0 top-0 left-0 bg-dark px-5 py-3">
            <div class="px-4">
                <a class="text-decoration-none text-light" href="/logout">Sair</a>
            </div>
        </aside>
    </main>
</body>
</html>