<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    
    <p>This is the home page</p>
    <h2>Input Form</h2>
    <form action="{{ route('add')}}" method="POST">
        @csrf
        <label for="name">Item Name</label>
        <input type="text" name="name" placeholder="Item Name">
        <br>
        <label for="count">Count</label>
        <input type="text" name="count" placeholder="Count">
        <br>
        <button type="submit">Submit</button>
    </form>
    <div class="error">
        <ul style="list-style:none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>