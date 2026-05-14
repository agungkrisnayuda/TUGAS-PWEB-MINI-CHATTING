<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/10 rounded-3xl p-8 shadow-2xl text-white">

        <div class="text-center mb-8">
            <h1 class="text-4xl font-black text-cyan-400">
                Mini Chat
            </h1>

            <p class="text-slate-300 mt-3">
                Login untuk masuk ke realtime chat.
            </p>
        </div>

        <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-5">
            <?php echo csrf_field(); ?>

            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Email
                </label>

                <input type="email"
                       name="email"
                       required
                       autofocus
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3">
            </div>

            <div>
                <label class="block mb-2 text-sm text-slate-300">
                    Password
                </label>

                <input type="password"
                       name="password"
                       required
                       class="w-full rounded-2xl bg-slate-800 border border-slate-700 text-white px-4 py-3">
            </div>

            <button type="submit"
                    class="w-full bg-cyan-500 hover:bg-cyan-400 transition rounded-2xl py-3 font-bold">
                Login
            </button>
    <!-- REGISTER LINK -->
<div class="text-center pt-2">

    <a href="<?php echo e(route('register')); ?>"
       class="text-cyan-400 hover:text-cyan-300 text-sm transition">

        Belum punya akun?

    </a>

</div>
        </form>

    </div>
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
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mini-chat/resources/views/auth/login.blade.php ENDPATH**/ ?>