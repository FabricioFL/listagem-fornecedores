const ispf = document.getElementById('fornecedor-ispf');

setInterval(() => {


    if(ispf.checked == true)
    {
        document.getElementById('label-cnpj').style.display = 'none';
        document.getElementById('fornecedor-cnpj').style.display = 'none';
        document.getElementById('label-cpf').style.display = 'block';
        document.getElementById('fornecedor-cpf').style.display = 'block';
        document.getElementById('label-rg').style.display = 'block';
        document.getElementById('fornecedor-rg').style.display = 'block';
        document.getElementById('label-pfisofage').style.display = 'block';
        document.getElementById('fornecedor-pfisofage').style.display = 'block';
    }else
    {
        document.getElementById('label-cnpj').style.display = 'block';
        document.getElementById('fornecedor-cnpj').style.display = 'block';
        document.getElementById('label-cpf').style.display = 'none';
        document.getElementById('fornecedor-cpf').style.display = 'none';
        document.getElementById('label-rg').style.display = 'none';
        document.getElementById('fornecedor-rg').style.display = 'none';
        document.getElementById('label-pfisofage').style.display = 'none';
        document.getElementById('fornecedor-pfisofage').style.display = 'none';
    }

}, 100);