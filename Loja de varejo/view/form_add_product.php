<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <form action="../controller/Product.php" method= "POST">
        <section class="m-4 columns-3">
            <article>
                <label for="name">Nome do produto</label>
                <input type="text" id="name" name="name" class="border border-blue-400">
            </article>
            <article>
                <label for="price">Preço: </label>
                <input type="number" id="price" name="price" min=1 max=1000 class="border border-purple-700">
            </article>
        </section>
    <form>   

</body>
</html>