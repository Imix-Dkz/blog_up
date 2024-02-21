<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .w-5,.h-5{
            width: 20px;
            height: 20px;
        }
        .active{
            color: crimson;
            font-weight: bold;
        }
        /* //Otros Estilos
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script-->
            <script src="https://cdn.tailwindcss.com"></script-->
            <!--favicon--> 
        */
    </style>
</head>
<body>
    @include('layouts/partials/header')
    <!--nav-->
    @yield('content')
    @include('layouts/partials/footer')
    <!--script-->
</body>
</html>