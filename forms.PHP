<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP</title>
    <style type="text/css">
body {
margin:0;
padding:0;
background:#cccccc;
text-align:center;
	}
#td {
width: 760px;
margin:0 auto;			
padding: 10px;
text-align:left;
	}
#cont {
padding: 5px;
background-color: #eeeeee;
	}
</style>
</head>
<body>
    <h1>Exemplo de Formulário</h1>
    <hr>
    <form name="cadastro" method="post" action="cadastro.php">
    <h3>O que você achou do site?</h3>
    <input type="radio" name="nota" value="mtbom"/>Muito Bom
    <input type="radio" name="nota" value="bom"/>Bom
    <input type="radio" name="nota" value="reg"/>Regular
    <input type="radio" name="nota" value="lixo"/>Um Lixo
    <h3>Qual a seção que você mais gostou?</h3>
    <select name="secao">
        <option>Em Cartaz</option>
        <option>Trilha Sonora</option>
        <option>Galeria de Fotos</option>
        <option>Bilheteria</option>
        <option>Outra</option>
    </select>
    Outra: <input type="text" name="outra"> 
    <h3>Digite seus comentários no espaço abaixo:</h3>
    <textarea name="msg" id="" cols="50" rows="8"></textarea>
    <h3>Diga-nos como entrar em contato com você:</h3>
    Nome: <input type="text" name="nome" size="40"/> <br/>
    E-mail: <input type="text" name="email" size="40"/> <br/>
    Fone: <input type="text" name="fone" size="40"/> <br/>
    FAX: <input type="text" name="fax" size="40"/> <br/> <br/>
    <input type="checkbox" name="noti" value="noti"/>Quero receber as novidades do site por e-mail <br/> <br/>
    <input type="submit" name="enviar" value="Enviar Dados">
    &nbsp; &nbsp; &nbsp;
    <input type="reset" name="limpar" value="Limpar Dados">
    </form>

</body>
</html>