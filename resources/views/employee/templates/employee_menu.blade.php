@php
    use App\EquipmentModel;

    $models = EquipmentModel::all();
@endphp

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('vli.ico') }}">
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

        .collapsible-header {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="user_menu" class="dropdown-content">
        <li><a href="#!" class="red-text">Sair<i class="material-icons right">exit_to_app</i></a></li>
    </ul>

    <header>
        <nav>
            <div class="nav-wrapper blue darken-2">
                <ul class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" data-target="user_menu">Usuário<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <ul id="slide-out" class="sidenav sidenav-fixed blue darken-2">
        <li>
            <div class="user-view">
                <div class="background white">
                    <img src="{{ asset('img/1.jpg') }}" class="responsive-img">
                </div>
                <img class="circle" src="{{ asset('img/logo_fundo_branco.png') }}">
                <span class="white-text name">Usuário</span>
                <span class="white-text email">user@email.com</span>
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
                                    <div class="collapsible-header black-text"><i class="material-icons left">arrow_right</i>Novo</div>
                                    <div class="collapsible-body">
                                        <ul>
                                            @foreach ($models as $model)
                                                {{-- <li><a href="{{ route('checklist.new', ['model' => $model->id]) }}">{{ $model->name }}</a></li> --}}
                                                <li><a href="#">{{ $model->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="material-icons left">list</i>Concluídas</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons left drop">arrow_right</i>Solicitações</div>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('employee.request.create') }}"><i class="material-icons left">add</i>Nova solicitação</a></li>
                        <li><a href="{{ route('employee.request.index') }}"><i class="material-icons left">list</i>Acompanhar</a></li>
                    </ul>
                </div>
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
            $('.dropdown-trigger').dropdown({
                coverTrigger: false
            });
        });
    </script>

    @yield('script')
</body>

</html>