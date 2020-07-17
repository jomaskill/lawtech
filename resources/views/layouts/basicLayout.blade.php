<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Lawtech - @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

    <header class="">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Lawtech</a>
            @if (Route::has('login'))
                <div class="top-right links">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #f8fafc">Olá {{Auth::user()->name}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <form  method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Sair</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </nav>
        <br>

    </header>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                @yield('pageName')
            </div>
        </div>
    </div>

    <main class="container">
        <br>
        @yield('content')
    </main>

    <br>
    <footer class="page-footer font-small dark" style="background-color: #343a40">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/"> Lawtech</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
