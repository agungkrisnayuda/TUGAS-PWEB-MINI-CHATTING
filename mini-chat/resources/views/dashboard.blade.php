<x-app-layout>

<div class="h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white flex flex-col">

    <!-- HEADER -->
    <div class="border-b border-white/10 bg-white/5 backdrop-blur-xl px-6 py-4 flex justify-between items-center">

        <div>
            <h1 class="font-black text-2xl text-cyan-400">
                Mini Chat
            </h1>

            <p class="text-sm text-slate-300">
                Realtime Laravel Chat
            </p>
        </div>

        <div class="flex items-center gap-4">

            <!-- ONLINE -->
            <div class="flex items-center gap-2">

                <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>

                <span class="text-sm">
                    {{ Auth::user()->name }}
                </span>

            </div>

            <!-- LOGOUT -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                        class="bg-red-500 hover:bg-red-400 transition px-4 py-2 rounded-xl text-sm font-semibold">

                    Logout

                </button>
            </form>

        </div>

    </div>

    <!-- CHAT AREA -->
    <div id="chat-box"
         class="flex-1 overflow-y-auto px-6 py-6 space-y-4 scroll-smooth">

        @forelse($messages ?? [] as $message)

            <div class="flex {{ $message->user_id == auth()->id() ? 'justify-end' : 'justify-start' }}">

                <div class="max-w-md rounded-3xl px-5 py-4 shadow-xl

                    {{ $message->user_id == auth()->id()
                        ? 'bg-cyan-500 text-white'
                        : 'bg-white/10 backdrop-blur-xl border border-white/10 text-white' }}">

                    <!-- USER -->
                    <div class="text-xs opacity-70 mb-1">

                        {{ $message->user->name }}

                    </div>

                    <!-- MESSAGE -->
                    <div class="text-sm leading-relaxed">

                        {{ $message->message }}

                    </div>

                    <!-- TIME -->
                    <div class="text-[10px] opacity-60 mt-2 text-right">

                        {{ $message->created_at->format('H:i') }}

                    </div>

                </div>

            </div>

        @empty

<div class="text-center text-slate-400">
    Belum ada chat
</div>

@endforelse

    </div>

    <!-- CHAT FORM -->
    <div class="p-5 border-t border-white/10 bg-white/5 backdrop-blur-xl">

        <form id="chat-form" class="flex gap-3">

            <input type="text"
                   id="message"
                   placeholder="Type your message..."
                   autocomplete="off"
                   class="flex-1 bg-slate-800 border border-slate-700 rounded-2xl px-5 py-4 focus:ring-cyan-400 focus:border-cyan-400 text-white">

            <button type="submit"
                    class="bg-cyan-500 hover:bg-cyan-400 transition px-8 rounded-2xl font-bold shadow-lg shadow-cyan-500/30">

                Send

            </button>

        </form>

    </div>

</div>

<script>

const form = document.getElementById('chat-form');
const input = document.getElementById('message');
const chatBox = document.getElementById('chat-box');

function scrollBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}

scrollBottom();

form.addEventListener('submit', async (e) => {

    e.preventDefault();

    if (!input.value.trim()) return;

    await axios.post('/send-message', {
        message: input.value
    });

    input.value = '';
});

window.Echo.channel('chat')
.listen('.message.sent', (e) => {

    const isMine = e.message.user_id == {{ auth()->id() }};

    chatBox.innerHTML += `
        <div class="flex ${isMine ? 'justify-end' : 'justify-start'}">

            <div class="max-w-md rounded-3xl px-5 py-4 shadow-xl ${
                isMine
                    ? 'bg-cyan-500 text-white'
                    : 'bg-white/10 backdrop-blur-xl border border-white/10 text-white'
            }">

                <div class="text-xs opacity-70 mb-1">
                    ${e.message.user.name}
                </div>

                <div class="text-sm leading-relaxed">
                    ${e.message.message}
                </div>

                <div class="text-[10px] opacity-60 mt-2 text-right">
                    baru saja
                </div>

            </div>

        </div>
    `;

    scrollBottom();
});

</script>

</x-app-layout>