<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-10">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-[#1a1a1a]">Bem-vindo de volta!</h1>
            <p class="text-gray-500 text-sm mt-2">Entre na sua conta para continuar</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-[#1a1a1a] mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    required autofocus autocomplete="username"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Senha -->
            <div class="mb-5">
                <label for="password" class="block text-sm font-medium text-[#1a1a1a] mb-1">Senha</label>
                <input id="password" type="password" name="password"
                    required autocomplete="current-password"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Lembrar-me -->
            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-gray-500 cursor-pointer">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-[#f28e52] focus:ring-[#f28e52]">
                    Lembrar de mim
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-[#f28e52] hover:text-[#e07d43] transition">
                        Esqueceu a senha?
                    </a>
                @endif
            </div>

            <!-- Botão -->
            <button type="submit"
                class="w-full bg-[#f28e52] text-white py-3 rounded-lg font-medium hover:bg-[#e07d43] transition shadow-sm">
                Entrar
            </button>

            <!-- Registro -->
            @if (Route::has('register'))
                <p class="text-center text-sm text-gray-500 mt-6">
                    Não tem uma conta?
                    <a href="{{ route('register') }}" class="text-[#f28e52] hover:text-[#e07d43] font-medium transition">Cadastre-se</a>
                </p>
            @endif
        </form>
    </div>
</x-guest-layout>