<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails</title>
</head>
<body>
    
    <form action="{{ route('email')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name"> 
        <br>
        <label for="message">Enter a Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>