<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper fadeInDown" style="background-color: rgb(0, 0, 106);">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://enemaneiras.com.br/wp-content/uploads/2021/09/imagem-png-com-transparencia.png"
                    id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="{{ route('usuarios.login') }}" method="post">
            @csrf
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="senha">
                <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>
        </div>
    </div>
</body>

</html>