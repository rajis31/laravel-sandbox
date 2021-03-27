<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password</label>
        <input type="text" name="password">
        <br>
        <label for="password2">Confirm Password</label>
        <input type="text" name="password2">
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

</body>
</html>