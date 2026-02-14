<!DOCTYPE html>
<html lang="en">

<head>
    @include ('home.css')
    <style>
        table
        {
            margin: 40px;
            border: 1px solid skyblue;
            padding: 40px;
        }

        th
        {
            padding: 10px;
            text-align: center;
            background-color: red;
            color: white;
            font-weight: bold;
        }

        td
        {
            padding: 10px;
            color: white;
        }

        .div_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_deg
        {
            padding: 10px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home#book-table">Reservasi</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="{{ url('/') }}">
                <img src="assets/imgs/warjaww.png" class="brand-img" alt="">
                <span class="brand-txt">SISANJAW</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home#blog">Menu<span class="sr-only">(current)</span></a>
                </li>

                @if (Route::has('login'))
                    @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('my_cart') }}">Keranjang</a>
                        </li>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>


                    @endauth
                @endif

            </ul>
        </div>
    </nav>
    </br></br></br></br></br>
    <div class="div_center">
        <img width="500" src="assets/imgs/qris.jpg">
    </div>

</body>

</html>
