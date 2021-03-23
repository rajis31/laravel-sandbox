<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($result as $item) 
        <em>{{ $item->name }}</em>
        <em>{{ $item->count }}</em>
        <br>
    @endforeach
    <br>
    <a href="<?php echo url("/"); ?>">Go Back</a>
</body>
</html>