<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>

    <?php echo $__env->yieldContent('content'); ?>

    </body>

</html>
<?php /**PATH C:\Workspace\www\candy-cane\resources\views/layouts/app.blade.php ENDPATH**/ ?>