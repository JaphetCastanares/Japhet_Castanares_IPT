<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Picture Page</title>
</head>
<body>
    <h1>Item Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Item Page</a> |
        <a href="{{ route('pictures') }}">Picture Page</a>
    </nav>
    <div class="container">
        <img src="./data/baemax.jpg" alt="picture 1">
        <img src="./data/donee.jpg" alt="picture 2">
        <img src="./data/louie.jpg" alt="picture 3">
    </div>

    <p>Welcome to the Picture Page!</p>
</body>
</html>
