<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        {{-- Removemos o max-w-7xl para o container usar toda largura disponível --}}
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 1600px;">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="produtos-grid">
                    @php
                        $produtos = [
                            ['nome' => 'Camiseta Básica Algodão', 'preco' => 49.99, 'imagem' => 'https://img.lojasrenner.com.br/item/542377734/original/3.jpg', 'link' => '/produto/1'],
                            ['nome' => 'Calça Jeans Skinny', 'preco' => 129.90, 'imagem' => 'https://img.lojasrenner.com.br/item/547702196/original/3.jpg', 'link' => '/produto/2'],
                            ['nome' => 'Vestido Floral Midi', 'preco' => 89.99, 'imagem' => 'https://img.lojasrenner.com.br/item/929764536/large/3.jpg', 'link' => '/produto/3'],
                            ['nome' => 'Blusa de Manga Longa', 'preco' => 69.90, 'imagem' => 'https://img.lojasrenner.com.br/item/930800531/large/3.jpg', 'link' => '/produto/4'],
                            ['nome' => 'Jaqueta Jeans', 'preco' => 159.90, 'imagem' => 'https://img.lojasrenner.com.br/item/928178113/large/3.jpg', 'link' => '/produto/5'],
                            ['nome' => 'Saia Plissada', 'preco' => 79.99, 'imagem' => 'https://imgmarketplace.lojasrenner.com.br/20001/1468/700964980/753031139/4.jpeg', 'link' => '/produto/6'],
                            ['nome' => 'Cardigan de Tricot', 'preco' => 99.90, 'imagem' => 'https://img.lojasrenner.com.br/item/880250314/original/12.jpg', 'link' => '/produto/7'],
                            ['nome' => 'Camisa Social Feminina', 'preco' => 84.90, 'imagem' => 'https://img.lojasrenner.com.br/item/929367389/large/3.jpg', 'link' => '/produto/8'],
                            ['nome' => 'Shorts Jeans', 'preco' => 59.90, 'imagem' => 'https://img.lojasrenner.com.br/item/928158219/original/12.jpg', 'link' => '/produto/9'],
                            ['nome' => 'Regata Canelada', 'preco' => 39.99, 'imagem' => 'https://img.lojasrenner.com.br/item/553066915/zoom/3.jpg', 'link' => '/produto/10'],
                            ['nome' => 'Blazer Feminino', 'preco' => 199.90, 'imagem' => 'https://img.lojasrenner.com.br/item/600614381/original/3.jpg', 'link' => '/produto/11'],
                            ['nome' => 'Moletom Canguru', 'preco' => 119.90, 'imagem' => 'https://imgmarketplace.lojasrenner.com.br/20001/3541/7010701926809/7510704005596/1.jpeg', 'link' => '/produto/12'],
                            ['nome' => 'Camisa Listrada', 'preco' => 74.90, 'imagem' => 'https://img.lojasrenner.com.br/item/929196250/large/3.jpg', 'link' => '/produto/13'],
                            ['nome' => 'Vestido Evasê', 'preco' => 109.90, 'imagem' => 'https://img.lojasrenner.com.br/item/928117775/original/4.jpg', 'link' => '/produto/14'],
                            ['nome' => 'Cropped Tricot', 'preco' => 44.90, 'imagem' => 'https://img.lojasrenner.com.br/item/889861171/original/3.jpg', 'link' => '/produto/15'],
                            ['nome' => 'Calça Pantacourt', 'preco' => 139.90, 'imagem' => 'https://imgmarketplace.lojasrenner.com.br/20001/1137/700858564/752761774/2.jpeg', 'link' => '/produto/16'],
                            ['nome' => 'Blusa Transpassada', 'preco' => 79.90, 'imagem' => 'https://img.lojasrenner.com.br/item/927725314/original/4.jpg', 'link' => '/produto/17'],
                            ['nome' => 'Suéter Gola Alta', 'preco' => 129.90, 'imagem' => 'https://img.lojasrenner.com.br/item/689445455/original/3.jpg', 'link' => '/produto/18'],
                            ['nome' => 'Camisa Jeans', 'preco' => 99.90, 'imagem' => 'https://img.lojasrenner.com.br/item/929566329/original/3.jpg', 'link' => '/produto/19'],
                            ['nome' => 'Macacão Curto', 'preco' => 149.90, 'imagem' => 'https://img.lojasrenner.com.br/item/884477153/large/3.jpg', 'link' => '/produto/20'],
                        ];
                    @endphp

                    @foreach($produtos as $produto)
                        <div class="produto-card" onclick="window.location='{{ $produto['link'] }}'">
                            <img src="{{ $produto['imagem'] }}" 
                                 alt="{{ $produto['nome'] }}"
                                 class="produto-imagem">
                            <h3 class="produto-nome">{{ $produto['nome'] }}</h3>
                            <div class="produto-preco">
                                R$ {{ number_format($produto['preco'], 2, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        .produtos-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;  
            margin-top: 20px;
        }

        .produto-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 15px;  
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .produto-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }

        .produto-imagem {
            width: 100%;
            height: auto;
            aspect-ratio: 940 / 1128;
            object-fit: cover;
            border-radius: 10px;
            background-color: #f7fafc;
            margin-bottom: 12px;
            pointer-events: none;
        }

        .produto-nome {
            font-size: 1rem;    
            font-weight: 600;
            color: #2d3748;
            line-height: 1.4;
            margin: 8px 0 6px;
            min-height: 44px;
            pointer-events: none;
        }

        .produto-preco {
            font-size: 1.35rem;  
            font-weight: 700;
            color: #2c7a4d;
            margin-top: 8px;
            pointer-events: none;
        }

        /* Responsividade */
        @media (max-width: 1400px) {
            .produtos-grid {
                gap: 20px;
            }
            .produto-nome { font-size: 0.95rem; }
            .produto-preco { font-size: 1.2rem; }
        }

        @media (max-width: 1200px) {
            .produtos-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .produtos-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .produto-card { padding: 12px; }
            .produto-nome { font-size: 0.9rem; }
            .produto-preco { font-size: 1.1rem; }
        }

        @media (max-width: 480px) {
            .produtos-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

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