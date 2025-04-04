<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\KENN Folder\loginActivity\resources\views/auth/login.blade.php ENDPATH**/ ?>