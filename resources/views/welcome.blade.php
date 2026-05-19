<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Save Up</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Montserrat"', 'sans-serif'],
                            vintage: ['"Playfair Display"', 'serif'],
                        }
                    }
                }
            }
        </script>

        <script>
            function destacarLocalizacao() {
                setTimeout(function() {
                    var el = document.getElementById('localizacao');
                    el.style.transition = 'background 0.3s';
                    el.style.background = '#fce3cf';
                    el.style.borderRadius = '1rem';
                    el.style.padding = '1rem';

                    setTimeout(function() {
                        el.style.background = '';
                        setTimeout(function() {
                            el.style.background = '#fce3cf';
                            setTimeout(function() {
                                el.style.background = '';
                                setTimeout(function() {
                                    el.style.background = '#fce3cf';
                                    setTimeout(function() {
                                        el.style.background = '';
                                        el.style.padding = '';
                                    }, 400);
                                }, 400);
                            }, 400);
                        }, 400);
                    }, 400);
                }, 600); // espera a rolagem chegar antes de piscar
            }
        </script>
    </head>
    <body class="bg-white text-[#1a1a1a] font-sans antialiased m-0 p-0 scroll-smooth">

        <header class="w-full bg-[#fdfaf6]">
            <div class="max-w-7xl mx-auto px-16 h-20 flex items-center justify-between">
                <div class="flex items-center gap-2 font-semibold text-2xl text-[#1a1a1a]">
                    <img src="{{ asset('imagem/logo.png') }}" alt="Logo Save Up" class="h-14 w-auto object-contain">
                    Save Up
                </div>

                <nav class="flex items-center gap-8 text-sm">
                    <a href="#sobre" class="hover:text-[#f28e52] transition">Sobre nós</a>
                    <a href="#contato" class="hover:text-[#f28e52] transition">Contato</a>
                    <span class="text-gray-300">|</span>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-medium hover:text-[#f28e52] transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-medium hover:text-[#f28e52] transition">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-[#f28e52] text-white px-4 py-2 rounded-md font-medium hover:bg-[#e07d43] transition">Cadastre-se</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </header>

        <section class="w-full bg-[#fce3cf]">
            <div class="max-w-7xl mx-auto px-16 py-28 grid grid-cols-2 gap-16 items-center">
                
                <div class="flex flex-col items-start">
                    <div class="inline-flex items-center gap-1 bg-[#f7d3b7] text-[#c26730] text-xs font-medium px-3 py-1.5 rounded-full mb-6">
                        ✨ Moda Sustentável
                    </div>
                    <h1 class="font-vintage text-6xl font-normal tracking-tight text-[#1a1a1a] leading-tight mb-6">
                        Descubra achados <br> vintage únicos
                    </h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-md">
                        Roupas e acessórios de segunda mão selecionados que contam uma história. Cada peça é escolhida a dedo pela qualidade e estilo.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('register') }}" class="bg-[#f28e52] text-white px-8 py-3 rounded-md font-medium shadow-sm hover:bg-[#e07d43] transition">Compre agora</a>
                    </div>
                </div>

                <div class="flex justify-end items-center">
                    <div class="w-full rounded-2xl overflow-hidden shadow-xl group" style="aspect-ratio: 4/3;">
                        <img src="https://images.unsplash.com/photo-1520006403909-838d6b92c22e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Vintage clothes rack" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                </div>

            </div>
        </section>
<!-- Why Shop With Us -->
        <section id="sobre" class="w-full bg-white py-20 px-16">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-vintage text-4xl font-normal text-[#1a1a1a] mb-3">Por que comprar com a gente?</h2>
                    <p class="text-gray-500 text-base">Peças de qualidade com preço acessível</p>
                </div>

                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-[#fce3cf] rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="bg-[#f28e52] text-white rounded-full w-14 h-14 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-semibold text-[#1a1a1a] mb-3">Seleção escolhida a mão</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Cada item é cuidadosamente selecionado para qualidade e exclusividade</p>
                    </div>

                    <div class="bg-[#fce3cf] rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="bg-[#f28e52] text-white rounded-full w-14 h-14 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-semibold text-[#1a1a1a] mb-3">Escolha sustentável</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Reduza o desperdício e faça uma declaração de moda ecológica</p>
                    </div>

                    <div class="bg-[#fce3cf] rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="bg-[#f28e52] text-white rounded-full w-14 h-14 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-semibold text-[#1a1a1a] mb-3">Preços acessíveis</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Estilo vintage premium sem gastar muito</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Arrivals -->
        <section class="w-full bg-[#f5f5f7] py-20 px-16">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-vintage text-4xl font-normal text-[#1a1a1a] mb-3">Últimas chegadas</h2>
                    <p class="text-[#f28e52] text-base">Novas descobertas adicionadas semanalmente</p>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="relative rounded-2xl overflow-hidden shadow-md group" style="aspect-ratio: 4/3;">
                        <img src="https://plus.unsplash.com/premium_photo-1671198905435-20f8d166efb2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Vintage Clothing" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
                            <h3 class="text-white text-2xl font-semibold mb-1">Roupas vintage</h3>
                            <p class="text-gray-300 text-sm">Explore nossa coleção selecionada</p>
                        </div>
                    </div>

                    <div class="relative rounded-2xl overflow-hidden shadow-md group" style="aspect-ratio: 4/3;">
                        <img src="https://images.unsplash.com/photo-1688126645162-94ad8f526734?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Accessories & More" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
                            <h3 class="text-white text-2xl font-semibold mb-1">Acessórios & mais</h3>
                            <p class="text-gray-300 text-sm">Complete seu visual único</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visit Our Store -->
        <section id="contato" class="w-full bg-[#fce3cf] py-24 px-16">
            <div class="max-w-7xl mx-auto flex flex-col items-center text-center">
                <h2 class="font-vintage text-4xl font-normal text-[#1a1a1a] mb-4">Visite nossa loja hoje!</h2>
                <p class="text-gray-600 text-base mb-8">Novos itens chegam diariamente. Venha ver que achados esperam por você!</p>
                <a href="#localizacao" onclick="destacarLocalizacao()" class="bg-[#f28e52] text-white px-10 py-3 rounded-full font-medium hover:bg-[#e07d43] transition shadow-sm">Como chegar</a>
            </div>
        </section>

        <!-- Info: Localização, Horários, Contato -->
        <section class="w-full bg-white py-16 px-16">
            <div class="max-w-7xl mx-auto grid grid-cols-3 gap-8 text-center">
                <div id="localizacao" class="flex flex-col items-center gap-3">
                    <div class="text-[#f28e52]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#1a1a1a]">Localização</h4>
                    <p class="text-[#f28e52] text-sm leading-relaxed">Alameda das relíquias, 123<br>São Paulo, SP, CEP: 01001-000</p>
                </div>

                <div class="flex flex-col items-center gap-3">
                    <div class="text-[#f28e52]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#1a1a1a]">Horário</h4>
                    <p class="text-[#f28e52] text-sm leading-relaxed">Seg-Sáb: 10am-7pm<br>Dom: 11am-5pm</p>
                </div>

                <div class="flex flex-col items-center gap-3">
                    <div class="text-[#f28e52]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-semibold text-[#1a1a1a]">Contato</h4>
                    <p class="text-[#f28e52] text-sm leading-relaxed">saveup@gmail.com<br>(55) 11 11111-1111</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="w-full bg-[#1a1a2e] py-10 px-16">
            <div class="max-w-7xl mx-auto flex flex-col items-center text-center gap-2">
                <div class="flex items-center gap-1 text-white font-semibold text-lg mb-1">
                    <span class="text-[#f28e52] text-xl"><img src="{{ asset('images/logobrecho.png') }}" alt="Logo Save Up" class="h-10 w-auto object-contain"></span>
                    Save Up
                </div>
                <p class="text-gray-400 text-sm">Moda sustentável, estilo atemporal</p>
                <p class="text-gray-600 text-xs mt-2">© 2026 Save Up. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>