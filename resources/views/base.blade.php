<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>IPT Prelim Email System</title>
</head>
<body>
    @if (session('Error'))
        <div class="alert alert-danger fixed-top">
            <div class="container">
                {{ session('Error') }}
            </div>
        </div>
    @endif
    @if (session('Message'))
        <div class="alert alert-info fixed-top">
            <div class="container">
                {{ session('Message') }}
            </div>
        </div>
    @endif
    @if(session('errors'))
        <div class="alert alert-danger fixed-top">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div> 
    @endif
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-5">
                    <div class="navbar-brand">Midweek 4</div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">HOME</a>
                            </li>
                        @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">LOGOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="items">ITEM</a>
                            </li>
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="login">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register">REGISTER</a>
                            </li>

                        @endif

                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT US</a>
                            </li>
                        </ul>
                </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>
<style>
    body{
	margin:0;
	padding:0;
    background-size:cover;
	background-repeat: no-repeat;
	font-family: 'Raleway',sans-serif;
	color: #fff;
    }
    .banner .navbar{
        margin-top:2.5%;
    }
    .banner .navbar-brand{
        color: #fff;
        font-size:1.8em;
        font-weight: 700;
        margin-left: 10%;
    }
    .banner .nav{
        margin-left:38%;
        margin-top:1%;
    }
    .banner .nav li a{
        color:#e7fdff;
        font-size: 1.2em;
    }
    .banner .nav li a:hover{
        background: #155057;
        border-radius:7px;
    }
    .alert{
        margin-top:-1.5%;
        opacity:35%;
    }
</style>