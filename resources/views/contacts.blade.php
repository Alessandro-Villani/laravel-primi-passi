<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body class="bg-secondary">
    <header class="bg-dark py-5 text-white">
        <nav class="container d-flex justify-content-center">
            <ul class="m-auto d-flex" style="list-style : none">
                @foreach ($menus as $menu)
                    <li class="me-3"><a class="text-white" href="{{route($menu, $loop->index)}}">{{ucfirst(str_replace('-', ' ', $menu))}}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main class="text-center text-white py-5">
        <h1>{{ucfirst($name)}}</h1>
    </main>
</body>
</html>