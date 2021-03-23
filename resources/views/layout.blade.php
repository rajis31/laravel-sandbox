<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @stack("styles")
</head>
<body>
    <div class="header">
        @yield("header")
    </div>
    <div class="content">
        @yield("content")
    </div>
    <div class="form">
        @yield("form")
    </div>
    <div class="footer">
        @yield("footer")
    </div>

</body>
</html>