<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(config('app.name', 'Mini Chat')); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">

    <?php echo e($slot); ?>


</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mini-chat/resources/views/layouts/guest.blade.php ENDPATH**/ ?>