<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>Recentes</h1>
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 1600px;">
            <div class="produtos-grid">
                @foreach($produtos_recentes as $produto)
                    <div class="produto-card" onclick="window.location='{{ $produto['link'] }}'">
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
    <h1>camisetas</h1>
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 1600px;">
            <div class="produtos-grid">
                @foreach($produtos_camisetas as $produto)
                    <div class="produto-card" onclick="window.location='{{ $produto['link'] }}'">
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
    <h1>Calças</h1>
    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 1600px;">
            <div class="produtos-grid">
                @foreach($produtos_calcas as $produto)
                    <div class="produto-card" onclick="window.location='{{ $produto['link'] }}'">
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
