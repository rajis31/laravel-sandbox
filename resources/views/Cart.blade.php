<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
    <form action="{{ route('updateCart') }}" method="post" id="cart">
        @csrf
        <label for="item">Item Name</label>
        <input type="text" name="item">
        <button type="submit">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $("#cart").submit(function(e){
                e.preventDefault();

                let frm = $(this);
                let url = frm.attr("action");

                $.ajax(
                {
                    type: "POST",
                    url: url,
                    data: frm.serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        console.log(data); // show response from the php script.
                    }
                });
        });
    </script>
</body>
</html>