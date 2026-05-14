<!DOCTYPE html>
<html>
<head>
    <title>Mini Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="auth-user-id" content="{{ auth()->id() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<script>
document.addEventListener("DOMContentLoaded", function () {

    const authUserId = document.querySelector('meta[name="auth-user-id"]').content;

    // pastikan Echo sudah ada
    if (!window.Echo) {
        console.error("Echo belum ready");
        return;
    }

    window.Echo.channel('chat')
        .listen('.message.sent', (e) => {

            console.log('REALTIME MASUK:', e);

            const msg = e.message;

            let messages = document.getElementById('messages');

            let div = document.createElement('div');

            div.classList.add('msg');
            div.classList.add(msg.user_id == authUserId ? 'me' : 'other');

            div.innerHTML = `
                <strong>${msg.user.name}</strong><br>
                ${msg.message}
            `;

            messages.appendChild(div);
            messages.scrollTop = messages.scrollHeight;
        });

});
</script>
    <style>
        body {
            background: #f3f4f6;
        }

        .chat-box {
            max-width: 600px;
            margin: auto;
            margin-top: 40px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .messages {
            height: 400px;
            overflow-y: auto;
            padding: 15px;
        }

        .msg {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        .me {
            background: #3b82f6;
            color: white;
            margin-left: auto;
        }

        .other {
            background: #e5e7eb;
        }

        .input-box {
            display: flex;
            border-top: 1px solid #ddd;
        }

        input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
        }

        button {
            padding: 10px 20px;
            background: #3b82f6;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="chat-box">

    <div class="messages" id="messages">

        @foreach($messages as $msg)
            <div class="msg {{ $msg->user_id == auth()->id() ? 'me' : 'other' }}">
                <strong>{{ $msg->user->name }}</strong><br>
                {{ $msg->message }}
            </div>
        @endforeach

    </div>

    <div class="input-box">
        <input type="text" id="message" placeholder="Tulis pesan...">
        <button onclick="sendMessage()">Kirim</button>
    </div>

</div>

<script>
function sendMessage() {
    let message = document.getElementById('message').value;
    if (!message.trim()) return;

    fetch('/chat/send', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message })
    });

    document.getElementById('message').value = '';
}
</script>
</body>
</html>