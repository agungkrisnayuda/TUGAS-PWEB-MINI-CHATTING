<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

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
                    <?php echo e(Auth::user()->name); ?>

                </span>

            </div>

            <!-- LOGOUT -->
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>

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

        <?php $__empty_1 = true; $__currentLoopData = $messages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="flex <?php echo e($message->user_id == auth()->id() ? 'justify-end' : 'justify-start'); ?>">

                <div class="max-w-md rounded-3xl px-5 py-4 shadow-xl

                    <?php echo e($message->user_id == auth()->id()
                        ? 'bg-cyan-500 text-white'
                        : 'bg-white/10 backdrop-blur-xl border border-white/10 text-white'); ?>">

                    <!-- USER -->
                    <div class="text-xs opacity-70 mb-1">

                        <?php echo e($message->user->name); ?>


                    </div>

                    <!-- MESSAGE -->
                    <div class="text-sm leading-relaxed">

                        <?php echo e($message->message); ?>


                    </div>

                    <!-- TIME -->
                    <div class="text-[10px] opacity-60 mt-2 text-right">

                        <?php echo e($message->created_at->format('H:i')); ?>


                    </div>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<div class="text-center text-slate-400">
    Belum ada chat
</div>

<?php endif; ?>

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

    const isMine = e.message.user_id == <?php echo e(auth()->id()); ?>;

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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mini-chat/resources/views/dashboard.blade.php ENDPATH**/ ?>