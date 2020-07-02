<html>
    <head>
        <title>Ruta Mas Corta</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>La ruta màs corta</h1>
        <hr>
        <?php if (isset($_POST)){echo "si _POST<br>";var_dump($_POST);} else{echo "no _POST";} ?>
        <div>
            <form action="index.php" method="post" enctype="multipart/form-data"> 
                <p><input type="file" name ="archivo" id="archivo" required></p>	
                <p><button type="submit">ENVIAR</button></p>
            </form>
        </div>
        <hr>
        <footer>
            <div>
                diseñado y desarroyado por Fabianisimo__
            </div>
        </footer>
    </body>
</html>