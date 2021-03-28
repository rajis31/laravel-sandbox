<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body> 
    <p>Enter your email so a password reset could be set to the email you registered with</p>
    <form action="{{ route('reset') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>