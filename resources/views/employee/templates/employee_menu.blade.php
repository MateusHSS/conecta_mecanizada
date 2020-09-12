<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecta Mecanizada - Funcionário</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
    header,
    main,
    footer {
        padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {

        header,
        main,
        footer {
            padding-left: 0;
        }
    }
    </style>
</head>

<body>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/office.jpg">
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
        </li>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons left drop">arrow_right</i>Checklists</div>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons left">arrow_right</i>Novo</div>
                                    <div class="collapsible-body">
                                        <ul>

                                        
                                            <li><a href="{{ route('employee.check') }}">Modelo 1</a></li>
                                            <li><a href="">Modelo 1</a></li>
                                            <li><a href="">Modelo 1</a></li>
                                            <li><a href="">Modelo 1</a></li>
                                            <li><a href="">Modelo 1</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href=""><i class="material-icons left">list</i>Concluídas</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons left drop">arrow_right</i>Solicitações</div>
                <div class="collapsible-body">
                    <ul>
                        <li><a href=""><i class="material-icons left">add</i>Nova solicitação</a></li>
                        <li><a href=""><i class="material-icons left">list</i>Acompanhar</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
        </ul>
    </ul>
    
    <main>
        @yield('content')
    </main>
    
    <footer>

    </footer>

    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.collapsible').collapsible();
        });
    </script>

    @yield('script')
</body>

</html>