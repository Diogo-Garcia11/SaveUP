<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            div.cartao-perfil {
            width: 300px;
            max-width: 100%;
            background-color: white;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin: 40px auto;
            transition: 0.3s;
        }

        div.cartao-perfil:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
        }

        div.cartao-perfil img {
            border-radius: 50%;
            width: 150px;
            display: block;
            margin: 0 auto 15px;
            object-fit: cover;
        }

        h1 {
            color: #2d3748;
            text-align: center;
            font-size: 24px;
        }

        h2 {
            color: #4a5568;
            text-align: center;
            font-size: 18px;
        }

        p {
            color: #718096;
            text-align: center;
        }

        p.bio {
            color: #4a5568;
            text-align: justify;
            margin-top: 10px;
        }

        .contato {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 15px;
        }

        .contato a {
            display: flex;
            flex-direction: column; 
            align-items: center;    
            color: #4299e1;
            text-decoration: none;
        }

        .contato a:visited {
            color: #2b6cb0;
        }

        .contato a:hover {
            color: #3182ce;
        }

        .contato i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .produtos-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        }

        
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
