<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Petshop</title>
    </head>
    <body>
        <h1>Petshop</h1>
        <h2>Clientes</h2>
        
        <form>
            <label>Nome</label>
            <input type="text" name="nome"
                   value="<?= $nome_pesquisa ?>"/>
            <input type="submit" value="Pesquisar"/>
        </form>
        
        <br>
        <br>
        
        <table>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
            </tr>
            
            <?php foreach ($clientes as $c) { ?>
            <tr>
                <td>
                    <a href="cliente_editar.php?codigo=<?= $c['codigo'] ?>">
                        <?= $c['nome'] ?>
                    </a>
                </td>
                <td><?= $c['telefone'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
