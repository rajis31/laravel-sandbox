<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="password">Passowrd</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Submit</button>
    </form>

    <div class="errors">
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="register">
        <a href="{{ route('register') }}">Register Here</a>
    </div>
    <div class="reset">
        <a href="{{ route('reset') }}">Reset Password</a>
    </div>
   
</body>
</html>