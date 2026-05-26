<x-app-layout>

    <style>
        /* Cards de categorias */
        .categoria-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .categoria-card:hover {
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.18);
            transform: translateY(-4px);
        }

        .categoria-card img {
            transition: transform 0.5s ease;
        }

        .categoria-card:hover img {
            transform: scale(1.10);
        }

        /* Banners com imagem */
        .banner-img-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .banner-img-card:hover {
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.18);
            transform: translateY(-4px);
        }

        .banner-img-card img {
            transition: transform 0.5s ease;
        }

        .banner-img-card:hover img {
            transform: scale(1.10);
        }

        /* Banners de texto */
        .oferta-card {
            transition: all 0.3s ease;
        }

        .oferta-card:hover {
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.12);
            transform: translateY(-4px);
        }
    </style>
    
    <!-- Banner frete grátis -->
    <div style="background-color: #fce3cf; padding: 10px 0; text-align: center; font-size: 0.85rem; font-family: 'Montserrat', sans-serif; color: #1a1a1a;">
        🏷️ <span style="color: #f28e52; font-weight: 600;">FRETE GRÁTIS</span> em compras acima de R$ 199 &nbsp;|&nbsp; <span style="color: #f28e52; font-weight: 600;">ATÉ 50% OFF</span> em peças selecionadas
    </div>

    <div style="background: #f3f4f6; min-height: 100vh; padding: 32px 48px; font-family: 'Montserrat', sans-serif;">
        <div style="max-width: 1400px; margin: 0 auto;">

            <!-- Grid de Categorias -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 32px;">
                <div onclick="document.getElementById('secao-camisetas').scrollIntoView({ behavior: 'smooth' });" class="categoria-card" style="position: relative; border-radius: 12px; overflow: hidden; aspect-ratio: 3/2; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1778512397881-51b00202ddde?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position:absolute; bottom:0; left:0; right:0; padding: 16px; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <span style="color:#fff; font-weight:600; font-size:0.95rem;">Camisetas</span>
                    </div>
                </div>

                <div onclick="document.getElementById('secao-calcas').scrollIntoView({ behavior: 'smooth' });" class="categoria-card" style="position: relative; border-radius: 12px; overflow: hidden; aspect-ratio: 3/2; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1615420733239-070fc4b95914?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position:absolute; bottom:0; left:0; right:0; padding: 16px; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <span style="color:#fff; font-weight:600; font-size:0.95rem;">Calças</span>
                    </div>
                </div>

                <div class="categoria-card" style="position: relative; border-radius: 12px; overflow: hidden; aspect-ratio: 3/2; cursor: pointer;">
                    <img src="https://plus.unsplash.com/premium_photo-1731267167391-62c4d30979f8?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position:absolute; bottom:0; left:0; right:0; padding: 16px; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <span style="color:#fff; font-weight:600; font-size:0.95rem;">Casacos</span>
                    </div>
                </div>

                <div class="categoria-card" style="position: relative; border-radius: 12px; overflow: hidden; aspect-ratio: 3/2; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1624192647570-1131acc12ccf?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width:100%; height:100%; object-fit:cover;">
                    <div style="position:absolute; bottom:0; left:0; right:0; padding: 16px; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                        <span style="color:#fff; font-weight:600; font-size:0.95rem;">Vestidos</span>
                    </div>
                </div>
            </div>

            <!-- Recentes -->
            <div style="margin-bottom: 32px;">
                <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 4px;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; color: #1a1a1a;">Recentes</h2>
                </div>
                <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 20px;">Peças adicionadas recentemente</p>
                <div class="produtos-grid">
                    @foreach($produtos_recentes as $produto)
                        <div class="produto-card" onclick="window.location='{{ route('roupa', $produto->idProduto) }}'">
                            <img src="{{ $produto->link1Produto }}" alt="{{ $produto->nomeProduto }}" class="produto-imagem">
                            <h3 class="produto-nome">{{ $produto->nomeProduto }}</h3>
                            <div class="produto-preco">
                                R$ {{ number_format($produto->precoProduto, 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Banner Oferta Especial -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 32px;">
                <div class="oferta-card" style="background: #fce3cf; border-radius: 12px; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                    <p style="color: #f28e52; font-size: 0.8rem; font-weight: 600; margin-bottom: 12px;">📈 Oferta Especial</p>
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 600; color: #1a1a1a; margin-bottom: 12px;">3 Peças por R$ 30</h2>
                    <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 24px;">Escolha 3 itens selecionados e leve com desconto especial. Aproveite!</p>
                </div>

                <div class="banner-img-card" style="border-radius: 12px; overflow: hidden; aspect-ratio: 4/3;">
                    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?w=600" style="width:100%; height:100%; object-fit:cover;">
                </div>
            </div>

            <!-- Surpreenda-me -->
            <div style="margin-bottom: 32px;">
                <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 4px;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; color: #1a1a1a;">Surpreenda-me</h2>
                    <a href="#" style="color: #f28e52; font-size: 0.85rem; font-weight: 500; text-decoration: none;">Ver Todos →</a>
                </div>
                <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 20px;">Peças aleatórias entre nosso catálogo que podem te surpreender</p>
                <div class="produtos-grid">
                    @foreach($produtos_surpresa as $produto)
                        <div class="produto-card" onclick="window.location='{{ route('roupa', $produto->idProduto) }}'">
                            <img src="{{ $produto->link1Produto }}" alt="{{ $produto->nomeProduto }}" class="produto-imagem">
                            <h3 class="produto-nome">{{ $produto->nomeProduto }}</h3>
                            <div class="produto-preco">
                                R$ {{ number_format($produto->precoProduto, 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Banner Coleção de Inverno -->
            <div class="banner-img-card" style="position: relative; border-radius: 12px; overflow: hidden; margin-bottom: 32px;">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200" style="width:100%; height:260px; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0; background: rgba(0,0,0,0.45); display:flex; flex-direction:column; justify-content:center; padding: 48px;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 600; color: #fff; margin-bottom: 8px;">Coleção de Inverno</h2>
                    <p style="color: #e5e7eb; font-size: 0.9rem; margin-bottom: 24px;">Peças exclusivas para você se manter estiloso e aquecido</p>
                </div>
            </div>

            <!-- Camisetas -->
            <div id="secao-camisetas" style="margin-bottom: 32px;">
                <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 4px;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; color: #1a1a1a;">Camisetas</h2>
                    <a href="#" style="color: #f28e52; font-size: 0.85rem; font-weight: 500; text-decoration: none;">Ver Todos →</a>
                </div>
                <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 20px;">Os melhores modelos selecionados</p>
                <div class="produtos-grid">
                    @foreach($produtos_camisetas as $produto)
                        <div class="produto-card" onclick="window.location='{{ route('roupa', $produto->idProduto) }}'">
                            <img src="{{ $produto->link1Produto }}" alt="{{ $produto->nomeProduto }}" class="produto-imagem">
                            <h3 class="produto-nome">{{ $produto->nomeProduto }}</h3>
                            <div class="produto-preco">
                                R$ {{ number_format($produto->precoProduto, 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Banner Desconto Progressivo -->
            <div class="oferta-card" style="background: #fce3cf; border-radius: 12px; padding: 48px; text-align: center; margin-bottom: 32px;">
                <span style="display: inline-flex; align-items: center; gap: 6px; background: #f7d3b7; color: #c26730; font-size: 0.75rem; font-weight: 600; padding: 6px 14px; border-radius: 999px; margin-bottom: 16px;">🏷️ Desconto Progressivo</span>
                <h2 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 600; color: #1a1a1a; margin-bottom: 12px;">Quanto Mais Você Compra, Mais Desconto</h2>
                <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 24px;">
                    30% OFF em 2 peças &nbsp;|&nbsp; <span style="color: #f28e52; font-weight:600;">40% OFF</span> em 3 peças &nbsp;|&nbsp; <span style="color: #f28e52; font-weight:600;">50% OFF</span> em 4+ peças
                </p>
            </div>

            <!-- Calças -->
            <div  id="secao-calcas" style="margin-bottom: 48px;">
                <div style="display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 4px;">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 600; color: #1a1a1a;">Calças</h2>
                    <a href="#" style="color: #f28e52; font-size: 0.85rem; font-weight: 500; text-decoration: none;">Ver Todos →</a>
                </div>
                <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 20px;">Estilo e conforto para o dia a dia</p>
                <div class="produtos-grid">
                    @foreach($produtos_calcas as $produto)
                        <div class="produto-card" onclick="window.location='{{ route('roupa', $produto->idProduto) }}'">
                            <img src="{{ $produto->link1Produto }}" alt="{{ $produto->nomeProduto }}" class="produto-imagem">
                            <h3 class="produto-nome">{{ $produto->nomeProduto }}</h3>
                            <div class="produto-preco">
                                R$ {{ number_format($produto->precoProduto, 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <script>
        document.querySelectorAll('.produto-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
    </script>

</x-app-layout>