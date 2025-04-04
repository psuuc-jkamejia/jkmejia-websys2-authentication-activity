<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post" action=""{{ route('register') }}>
        @csrf
        <div>
            <label for="anme">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="" required>
        </div>
        <div><label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="" required>
    </div>
    <button type="submit">Register</button>
    </form>
</body>
</html>