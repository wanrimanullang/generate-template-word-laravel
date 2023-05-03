<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .container form{
          display: flex;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('word.index') }}">
            @csrf
            <input type="text" name="name_client" placeholder="Input Name">
            <input type="text" name="located" placeholder="Input Located">
            <input type="text" name="number_preorder" placeholder="Input Number Preorder">
            <input type="text" name="type_property" placeholder="Input Type Property">
            <input type="submit" name="Submit">
        </form>
    </div>
</body>

</html>
