<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIO</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- Styles -->

</head>

<body class="contenedor">
    <nav class="navbar navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logoBlue.png" alt="" width="60" height="54">
                
            </a>
        </div>


        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ route('home') }}" class="home"><img src="/img/homeColor.png" alt=""></a>
                @else
                <a href="{{ route('login') }}" class="login"><img src="/img/unlock.png" alt=""></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="registro"><img src="/img/registers.png" alt=""></a>
                @endif
                @endauth
            </div>
            @endif
    </nav>

    <a href="{{ url('/register') }}" class="logoHome"><img src="/img/logoTucson.png" alt=""></a>

    <footer>
        <a href="{{ url('/register') }}" class="qr"><img src="/img/qr.png" alt=""></a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    
    <script src="./../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./../js/sweetAlert.js"></script>
</body>

</html>