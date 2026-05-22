<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-10">

        <div class="text-center mb-8">
            <div class="mx-auto mb-5 w-14 h-14 rounded-full bg-[#fce3cf] flex items-center justify-center text-[#f28e52]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V7.5a4.5 4.5 0 00-9 0v3m-.75 0h10.5A1.75 1.75 0 0119 12.25v6A1.75 1.75 0 0117.25 20H6.75A1.75 1.75 0 015 18.25v-6A1.75 1.75 0 016.75 10.5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14.5v2" />
                </svg>
            </div>

            <h1 class="text-3xl font-semibold text-[#1a1a1a]">
                Confirme sua senha
            </h1>

            <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                Esta é uma área segura. Para continuar, confirme sua senha.
            </p>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-[#1a1a1a] mb-1">
                    Senha
                </label>

                <input id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="w-full border border-gray-200 rounded-lg px-4 py-3 text-sm text-[#1a1a1a] focus:outline-none focus:ring-2 focus:ring-[#f28e52] focus:border-transparent transition"
                    placeholder="Digite sua senha">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Botão -->
            <button type="submit"
                class="w-full bg-[#f28e52] text-white py-3 rounded-lg font-medium hover:bg-[#e07d43] transition shadow-sm">
                Confirmar
            </button>
        </form>
    </div>
</x-guest-layout>