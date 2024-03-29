<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

    <link href="../../../public/assets/datatables/datatables-demo.js" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <!-- Scripts DataTables -->
    <script src="../../../public/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../public/assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../../public/assets/datatables/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#valor').maskMoney({
                prefix: 'R$ ',
                thousands: '.',
                decimal: ','
            });
            $('#estoque').maskMoney({
                thousands: '.',
                decimal: ','
            });
        });
    </script>

    <style>
        th,
        td {
            text-decoration: double;
            font-size: large;
            padding-right: 1rem;
            padding-left: 1rem;
        }

        input::placeholder {
            color: brown;
        }
    </style>
</head>

<body class="bg-clip-text text-blue-800 bg-gradient-to-t from-black to-gray-900">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('produtos') }}" aria-current="page">Produtos <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users">Usuário</a>
                    </li>
                    <?php 
                    @session_start();
                    if(@$_SESSION['id_user'] == NULL) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.logout') }}">Login</a>
                        </li>
                        <?php
                    }else{
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Logout
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><?php echo @$_SESSION['nome_user']; ?></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('usuarios.logout') }}">Sair</a></li>
                            </ul>
                        </li>
                        <?php
                        
                    }
                    ?>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>