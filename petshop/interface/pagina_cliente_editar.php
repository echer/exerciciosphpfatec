<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Petshop</h1>
        <h2>Editar cliente</h2>
        
        <form method="POST">
            <div>
                <label>Nome</label>
                <input type="text" name="nome"
                       value="<?= $cliente['nome'] ?>"/>
            </div>
            
            <div>
                <label>Telefone</label>
                <input type="text" name="telefone"
                       value="<?= $cliente['telefone'] ?>"/>
            </div>
            
            <input type="submit" value="Salvar"/>
        </form>
    </body>
</html>
