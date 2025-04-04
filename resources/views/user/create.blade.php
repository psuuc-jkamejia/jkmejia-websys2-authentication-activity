<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>
    @if(session('success'))
    <p style="color:green"{{ session('success') }}></p>
    @endif

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error) 
            <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('user.create') }}" method="post">
        @csrf
        <label for="">Username:</label>
        <input type="text" name="username" id="">
        <br><br>
        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror

        <label for="">Password:</label>
        <input type="password" name="ppassword" id="">
        <br><br>

        <label for="">Retype Password:</label>
        <input type="password" name="repassword" id="">
        <br><br>

        <button type="submit">Create User</button>
    </form>
</body>
</html>