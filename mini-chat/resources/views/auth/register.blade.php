<x-guest-layout>

<div class="min-h-screen flex items-center justify-center px-4 py-10 relative">

    <!-- BACK BUTTON -->
    <div class="absolute top-6 left-6">
        <a href="/"
           class="flex items-center gap-2 text-white hover:text-cyan-400 transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 19l-7-7 7-7"/>
            </svg>

            Back
        </a>
    </div>

    <!-- CARD -->
    <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/10 rounded-3xl p-8 shadow-2xl text-white">

        <!-- HEADER -->
        <div class="text-center mb-8">

            <h1 class="text-4xl font-black text-cyan-400">
                Mini Chat
            </h1>

            <p class="text-slate-300 mt-3">
                Buat akun untuk mulai chatting realtime.
            </p>

        </div>

        <!-- FORM -->
        <form method="POST"
              action="{{ route('register') }}"
              class="space-y-5">

            @csrf

            <!-- NAME -->
            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Name
                </label>

                <input type="text"
                       name="name"
                       required
                       autofocus
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3 focus:border-cyan-400 focus:ring-cyan-400">
            </div>

            <!-- EMAIL -->
            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Email
                </label>

                <input type="email"
                       name="email"
                       required
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3 focus:border-cyan-400 focus:ring-cyan-400">
            </div>

            <!-- PASSWORD -->
            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Password
                </label>

                <input type="password"
                       name="password"
                       required
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3 focus:border-cyan-400 focus:ring-cyan-400">
            </div>

            <!-- CONFIRM PASSWORD -->
            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Confirm Password
                </label>

                <input type="password"
                       name="password_confirmation"
                       required
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3 focus:border-cyan-400 focus:ring-cyan-400">
            </div>

            <!-- BUTTON -->
            <button type="submit"
                    class="w-full bg-cyan-500 hover:bg-cyan-400 transition rounded-2xl py-3 font-bold shadow-lg shadow-cyan-500/30">

                Register

            </button>

            <!-- LOGIN LINK -->
            <div class="text-center pt-2">

                <a href="{{ route('login') }}"
                   class="text-cyan-400 hover:text-cyan-300 text-sm">

                    Sudah punya akun?

                </a>

            </div>

        </form>

    </div>

</div>

</x-guest-layout>