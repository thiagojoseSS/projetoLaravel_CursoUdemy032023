<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O nome do produto é <?php echo $nome; ?><?php echo (($valor == null) ? "" : ", e o valor é $valor"); ?>!</h1>
</body>
</html>