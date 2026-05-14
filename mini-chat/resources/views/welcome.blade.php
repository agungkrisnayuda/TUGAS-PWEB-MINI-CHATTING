<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Chat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen text-white">

<div class="min-h-screen flex items-center justify-center px-6">
    <div class="max-w-5xl w-full grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-5xl md:text-6xl font-black leading-tight">
                Realtime
                <span class="text-cyan-400">Mini Chat</span>
            </h1>

            <p class="mt-6 text-slate-300 text-lg leading-relaxed">
                Aplikasi chat realtime modern menggunakan Laravel, Reverb, dan WebSocket.
            </p>

            <div class="flex gap-4 mt-8">
                <a href="{{ route('login') }}"
                   class="px-6 py-3 rounded-2xl bg-cyan-500 hover:bg-cyan-400 transition font-semibold shadow-lg shadow-cyan-500/30">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="px-6 py-3 rounded-2xl border border-slate-600 hover:bg-slate-800 transition font-semibold">
                    Register
                </a>
            </div>
        </div>

        <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-3xl p-8 shadow-2xl">
            <div class="space-y-4">
                <div class="bg-slate-800 rounded-2xl p-4 w-fit max-w-xs">
                    Halo 👋
                </div>

                <div class="bg-cyan-500 rounded-2xl p-4 w-fit max-w-xs ml-auto text-white">
                    Realtime chat sudah aktif 🚀
                </div>

                <div class="bg-slate-800 rounded-2xl p-4 w-fit max-w-xs">
                    Laravel Reverb keren 🔥
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>