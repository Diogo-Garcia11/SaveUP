<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 1600px;">
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
                                ];
                @endphp
                @foreach($produtos as $produto)
                    <div class="produto-card" onclick="window.location='{{ $produto['link'] }}'">
                        <img src="{{ $produto['imagem'] }}" alt="{{ $produto['nome'] }}" class="produto-imagem">
                        <h3 class="produto-nome">{{ $produto['nome'] }}</h3>
                        <div class="produto-preco">
                            R$ {{ number_format($produto['preco'], 2, ',', '.') }}
                        </div>
                    </div>
                @endforeach
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
