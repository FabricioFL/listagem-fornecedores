<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Cadastrar fornecedores</title>
    <link rel="shortcut icon" href="../images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
        require_once '../../vendor/autoload.php';
        use App\Http\Route;
        use App\Controllers\LoginController;
        use App\Controllers\ProviderController;

        ProviderController::register();
        session_start();
            if($_SESSION['login'] != true)
            {
                Route::redirect('/404');
            }
        ?>
    <script src="../js/formFornecedores.js" defer></script>
</head>
<body class="bg-1">
    <main>
    <aside class="position-absolute bottom-0 top-0 left-0 bg-2 py-3 sidebar">
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/dashboard">Inicio</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-empresas">Cadastrar empresas</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/cadastrar-fornecedores"><b>Cadastrar fornecedores</b></a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/listar-fornecedores">Listar fornecedores</a>
            </div>
            <div class="my-5 lead">
                <a class="text-decoration-none text-light" href="/logout">Sair</a>
            </div>
        </aside>
        <div class="d-grid justify-content-center mt-5 alert bg-3 text-light lead w-50 mx-auto">
            <h2 class="display-6 mb-3">Cadastrar Fornecedor:</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="fornecedor-nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="fornecedor-nome" name="fornecedor-nome">
                </div>
                <div class="mb-3">
                    <label for="fornecedor-cnpj" class="form-label" id="label-cnpj">cnpj</label>
                    <input type="text" class="form-control" id="fornecedor-cnpj" name="fornecedor-cnpj">
                </div>
                <div class="mb-3">
                    <label for="fornecedor-cpf" class="form-label" id="label-cpf">cpf</label>
                    <input type="text" class="form-control" id="fornecedor-cpf" name="fornecedor-cpf">
                </div>
                <div class="mb-3">
                    <label for="fornecedor-rg" class="form-label" id="label-rg">rg</label>
                    <input type="text" class="form-control" id="fornecedor-rg" name="fornecedor-rg">
                </div>
                <div class="mb-3">
                    <label for="fornecedor-telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="fornecedor-cnpj" name="fornecedor-telefone">
                </div>
                <div class="mb-3">
                    <label for="fornecedor-selectpf" class="form-label" id="fornecedor-estadolabel">Estado</label>
                    <select class="form-select" id="fornecedor-selectestado" name="fornecedor-selectestado">
                        <option selected>Selecione o estado de atuação</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceara</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraiba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="fornecedor-ispf" name="fornecedor-ispf" value="true">
                    <label class="form-check-label" for="fornecedor-ispf">É pessoa física</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="fornecedor-pfisofage" name="fornecedor-pfisofage" value="true">
                    <label class="form-check-label" for="fornecedor-isofage" id="label-pfisofage">É maior de idade</label>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>