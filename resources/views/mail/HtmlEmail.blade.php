<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Email</title>
</head>
<body>
        <p style="font-weight:bold; font-size: 1.5rem;">Auto Message Alert</p>
        <p>Name: {{ $fields->name }}</p>
        <p>Message: {{ $fields->message }}</p>
</body>
</html>