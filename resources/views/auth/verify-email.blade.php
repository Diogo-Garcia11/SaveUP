<x-guest-layout>
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-10">

        <div class="text-center mb-8">
            <div class="mx-auto mb-5 w-14 h-14 rounded-full bg-[#fce3cf] flex items-center justify-center text-[#f28e52]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5A2.25 2.25 0 0119.5 19.5h-15A2.25 2.25 0 012.25 17.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0l-7.5-4.615a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>

            <h1 class="text-3xl font-semibold text-[#1a1a1a]">
                Verifique seu email
            </h1>

            <p class="text-gray-500 text-sm mt-3 leading-relaxed">
                Obrigado por se cadastrar! Antes de começar, confirme seu endereço de email clicando no link que enviamos para você.
            </p>

            <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                Se não recebeu o email, podemos enviar outro link de verificação.
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm font-medium text-green-700">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex flex-col gap-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <button type="submit"
                    class="w-full bg-[#f28e52] text-white py-3 rounded-lg font-medium hover:bg-[#e07d43] transition shadow-sm">
                    Reenviar email de verificação
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    class="w-full border border-gray-200 text-gray-600 py-3 rounded-lg text-sm font-medium hover:bg-[#fdfaf6] hover:text-[#1a1a1a] transition">
                    Sair da conta
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>