<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SaveUP</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Montserrat"', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="font-sans antialiased bg-[#fce3cf] min-h-screen flex flex-col">

        <!-- Header -->
        <header class="w-full bg-[#fdfaf6]">
            <div class="max-w-7xl mx-auto px-16 h-20 flex items-center">
                <a href="/" class="flex items-center gap-2 font-semibold text-2xl text-[#1a1a1a]">
                    <img src="{{ asset('imagem/logo.png') }}" alt="Logo Save Up" class="h-14 w-auto object-contain">
                    SaveUP
                </a>
            </div>
        </header>

        <!-- Conteúdo -->
        <main class="flex-1 flex items-center justify-center py-16 px-4">
            {{ $slot }}
        </main>

    </body>
</html>