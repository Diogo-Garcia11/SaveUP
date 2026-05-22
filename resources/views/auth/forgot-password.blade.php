<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-10">

        <div class="text-center mb-8">
            <div class="mx-auto mb-5 w-14 h-14 rounded-full bg-[#fce3cf] flex items-center justify-center text-[#f28e52]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V7.5a4.5 4.5 0 00-9 0v3m-.75 0h10.5A1.75 1.75 0 0119 12.25v6A1.75 1.75 0 0117.25 20H6.75A1.75 1.75 0 015 18.25v-6A1.75 1.75 0 016.75 10.5z" />
                </svg>
            </div>

            <h1 class="text-3xl font-semibold text-[#1a1a1a]">
                Esqueceu sua senha?
            </h1>

            <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                Sem problemas! Informe seu email e enviaremos um link para você redefinir sua senha.
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-[#1a1a1a] mb-1">
                    Email
                </label>

                <input id="email" 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    required 
                    autofocus
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition"
                    placeholder="Digite seu email">

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Botão -->
            <button type="submit"
                class="w-full bg-[#f28e52] text-white py-3 rounded-lg font-medium hover:bg-[#e07d43] transition shadow-sm">
                Enviar link de redefinição
            </button>

            <!-- Voltar para login -->
            <p class="text-center text-sm text-gray-500 mt-6">
                Lembrou sua senha?
                <a href="{{ route('login') }}" class="text-[#f28e52] hover:text-[#e07d43] font-medium transition">
                    Entrar
                </a>
            </p>
        </form>
    </div>
</x-guest-layout>