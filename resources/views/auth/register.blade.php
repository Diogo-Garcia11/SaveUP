<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-10">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-[#1a1a1a]">Crie sua conta</h1>
            <p class="text-gray-500 text-sm mt-2">Junte-se a nós e descubra peças únicas</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nome -->
            <div class="mb-5">
                <label for="name" class="block text-sm font-medium text-[#1a1a1a] mb-1">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                    required autofocus autocomplete="name"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-[#1a1a1a] mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autocomplete="username"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Senha -->
            <div class="mb-5">
                <label for="password" class="block text-sm font-medium text-[#1a1a1a] mb-1">Senha</label>
                <input id="password" type="password" name="password"
                    required autocomplete="new-password"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmar Senha -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-[#1a1a1a] mb-1">Confirmar senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                    required autocomplete="new-password"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Botão -->
            <button type="submit"
                class="w-full bg-[#f28e52] text-white py-3 rounded-lg font-medium hover:bg-[#e07d43] transition shadow-sm">
                Cadastrar
            </button>

            <!-- Login -->
            <p class="text-center text-sm text-gray-500 mt-6">
                Já tem uma conta?
                <a href="{{ route('login') }}" class="text-[#f28e52] hover:text-[#e07d43] font-medium transition">Entrar</a>
            </p>

        </form>
    </div>
</x-guest-layout>