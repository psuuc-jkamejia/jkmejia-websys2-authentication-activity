<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to Dashboard</h1>
    <form action="<?php echo e(route('logout')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\GE Folder\formExercise\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>